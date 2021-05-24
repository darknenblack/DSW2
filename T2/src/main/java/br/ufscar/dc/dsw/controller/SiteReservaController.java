package br.ufscar.dc.dsw.controller;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import br.ufscar.dc.dsw.domain.SiteReserva;
import br.ufscar.dc.dsw.service.spec.ISiteReservaService;

@Controller
@RequestMapping("/sites")
public class SiteReservaController {
	
	@Autowired
	private ISiteReservaService service;
	
	@Autowired
	private BCryptPasswordEncoder encoder;
	
	@GetMapping("/cadastrar")
	public String cadastrar(SiteReserva site) {
		return "site/cadastro";
	}
	
	@GetMapping("/listar")
	public String listar(ModelMap model) {
		model.addAttribute("sites", service.buscarTodos());
		return "site/lista";
	}
	
	@PostMapping("/salvar")
	public String salvar(@Valid SiteReserva site, BindingResult result, RedirectAttributes attr) {
		
		if (result.hasErrors()) {
			return "site/cadastro";
		}

		site.setSenha(encoder.encode(site.getSenha()));
		site.setRole("ROLE_SITE");
		
		service.salvar(site);
		attr.addFlashAttribute("sucess", "Site inserido com sucesso.");
		return "redirect:/sites/listar";
	}
	
	@GetMapping("/editar/{id}")
	public String preEditar(@PathVariable("id") Long id, ModelMap model) {
		model.addAttribute("site", service.buscarPorId(id));
		return "site/cadastro";
	}
	
	@PostMapping("/editar")
	public String editar(@Valid SiteReserva site, BindingResult result, RedirectAttributes attr) {
		
		if (result.hasErrors()) {
			return "site/cadastro";
		}

		site.setRole("ROLE_SITE");
		
		service.salvar(site);
		attr.addFlashAttribute("sucess", "Site editado com sucesso.");
		return "redirect:/sites/listar";
	}
	
	@GetMapping("/excluir/{id}")
	public String excluir(@PathVariable("id") Long id, ModelMap model) {
		if (service.siteTemLocacoes(service.buscarPorId(id).getEmail())) {
			model.addAttribute("fail", "Site não excluído. Possui locações vinculadas.");
		} else {
			service.excluir(id);
			model.addAttribute("sucess", "Site excluído com sucesso.");
		}
		return listar(model);
	}
}
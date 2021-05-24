package br.ufscar.dc.dsw.service.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import br.ufscar.dc.dsw.dao.ISiteReservaDAO;
import br.ufscar.dc.dsw.domain.SiteReserva;
import br.ufscar.dc.dsw.service.spec.ISiteReservaService;

@Service
@Transactional(readOnly = false)
public class SiteReservaService implements ISiteReservaService {

	@Autowired
	ISiteReservaDAO dao;
	
	public void salvar(SiteReserva site) {
		dao.save(site);
	}
	
	public void excluir(Long id) {
		dao.deleteById(id);
	}

	@Transactional(readOnly = true)
	public SiteReserva buscarPorId(Long id) {
		return dao.findById(id.longValue());
	}
    
	@Transactional(readOnly = true)
	public List<SiteReserva> buscarTodos() {
		return dao.findAll();
	}

	@Transactional(readOnly = true)
	public boolean siteTemLocacoes(String site) {
		return !dao.verifyLocation(site).isEmpty();
	}
}
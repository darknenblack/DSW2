package br.ufscar.dc.dsw;

import java.math.BigDecimal;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;

import br.ufscar.dc.dsw.dao.ISiteReservaDAO;
import br.ufscar.dc.dsw.domain.SiteReserva;
import br.ufscar.dc.dsw.dao.ILocadoraDAO;
import br.ufscar.dc.dsw.domain.Locadora;
import br.ufscar.dc.dsw.dao.IAdminDAO;
import br.ufscar.dc.dsw.domain.Admin;
import br.ufscar.dc.dsw.dao.ILocacaoDAO;
import br.ufscar.dc.dsw.domain.Locacao;

@SpringBootApplication
public class BicicletasMvcApplication {

	public static void main(String[] args) {
		SpringApplication.run(BicicletasMvcApplication.class, args);
	}

	@Bean
	public CommandLineRunner demo(ISiteReservaDAO siteDAO, ILocadoraDAO locadoraDAO, IAdminDAO adminDAO, BCryptPasswordEncoder encoder, ILocacaoDAO locacaoDAO) {
		return (args) -> {
			
			Admin a1 = new Admin();
			a1.setNome("admin");
			a1.setSenha(encoder.encode("admin"));
            a1.setEmail("admin");
            a1.setRole("ROLE_ADMIN");
			adminDAO.save(a1);

            SiteReserva c1 = new SiteReserva();
			c1.setNome("site");
			c1.setSenha(encoder.encode("123"));
            c1.setEmail("site");
			c1.setRole("ROLE_SITE");
			c1.setSite("site.com.br");
			siteDAO.save(c1);

            Locadora l1 = new Locadora();
			l1.setNome("locadora");
			l1.setSenha(encoder.encode("123"));
            l1.setEmail("locadora");
			l1.setRole("ROLE_LOCADORA");
			l1.setCnpj("12.212.121/2121-21");
			l1.setCidade("São Carlos");
			locadoraDAO.save(l1);

			Locadora l2 = new Locadora();
			l2.setNome("locadora teste");
			l2.setSenha(encoder.encode("123"));
            l2.setEmail("locadora@teste");
			l2.setRole("ROLE_LOCADORA");
			l2.setCnpj("12.212.121/2121-21");
			l2.setCidade("São Carlos");
			locadoraDAO.save(l2);

			Locadora l3 = new Locadora();
			l3.setNome("locadora da sabs");
			l3.setSenha(encoder.encode("123"));
            l3.setEmail("locadora@locadora");
			l3.setRole("ROLE_LOCADORA");
			l3.setCnpj("12.212.121/2121-21");
			l3.setCidade("Rio Preto");
			locadoraDAO.save(l3);

			/*
			 * Locacao l4 = new Locacao(); l4.setCliente("cliente");
			 * l4.setLocadora("locadora"); l4.setData("2020-12-23"); l4.setHorario("12:00");
			 * locacaoDAO.save(l4);
			 * 
			 * Locacao l5 = new Locacao(); l5.setCliente("cliente 3");
			 * l5.setLocadora("locadora da sabs"); l5.setData("2020-12-23");
			 * l5.setHorario("12:00"); locacaoDAO.save(l5);
			 */
		};
	}
}
package br.ufscar.dc.dsw.service.spec;

import java.util.List;
import br.ufscar.dc.dsw.domain.SiteReserva;

public interface ISiteReservaService {
	void salvar(SiteReserva site);
	void excluir(Long id);
	SiteReserva buscarPorId(Long id);
	List<SiteReserva> buscarTodos();
	boolean siteTemLocacoes(String site);
}
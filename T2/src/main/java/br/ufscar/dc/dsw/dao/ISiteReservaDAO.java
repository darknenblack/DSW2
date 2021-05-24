package br.ufscar.dc.dsw.dao;

import java.util.List;
import org.springframework.data.repository.CrudRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import br.ufscar.dc.dsw.domain.SiteReserva;

@SuppressWarnings("unchecked")
public interface ISiteReservaDAO extends CrudRepository<SiteReserva, Long>{
	SiteReserva save (SiteReserva site);
	void deleteById(Long id);
	SiteReserva findById(long id);
	List<SiteReserva> findAll();

	@Query("SELECT l FROM SiteReserva l inner join Locacao lc on (lc.site = :site)") 
    List<SiteReserva> verifyLocation(@Param("site") String site);
}
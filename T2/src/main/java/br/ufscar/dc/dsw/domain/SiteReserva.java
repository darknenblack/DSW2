package br.ufscar.dc.dsw.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.validation.constraints.NotBlank;

@SuppressWarnings("serial")
@Entity
@Table(name = "SiteReserva")
public class SiteReserva extends Usuario {        
    @NotBlank(message = "{NotBlank.usuario.site}")
	@Column(length = 50)
    private String site;
    
    public String getSite() {
		return site;
	}
	public void setSite(String site) {
		this.site = site;
    }
    
}
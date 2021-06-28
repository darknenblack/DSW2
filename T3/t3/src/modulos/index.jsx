import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";
import Filter from './filter.jsx';
import foto1 from '../img/pousada-santa-rita.jpg';
import Dados from '../js/dados.js';




class Index extends Component {

  render() {
    return (
      <div>
        <Filter />

        <div className="album bg-light content">
          <div className="container">
            <div className="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              {/* Dados é importado do dados.js, como é um array então .map faz um for em todos os objetos dentro do array e coloca em data */}
              {Dados.map((data, key) => {
                return (
                  <div key={key}>
                    {card(data)}
                  </div>
                )
              })}
            </div>
          </div>
        </div>
      </div>
    )
  }
}



// Para pegar o valor é só usar data.img ou data.nome (os mesmos que estão em dados.js)
function card(data) {
  return (
    <div className="col filt" >
      <div className="card shadow-sm cards__item text-center" id="hotel3">
        <img src={data.img} className="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" />
        <div className="card-body">
          <h5 className="card-title"><b>{data.nome}</b></h5>
          <p className="intervalo card-text">{data.dataIn} a {data.dataOut}</p>
          <p hidden className="cidades"> {data.cidade}</p>
          <div className="row">
            <div className="col-1">
              <p className="data card-text">Diárias</p>
            </div>
            <div className="col">
              <p>A vista - {data.aVista}</p>
              <p>Parcelado - {data.parcelado} </p>
            </div>
          </div>
          <div className="d-flex justify-content-between align-items-center">
            <div className="btn-group">
              <a href={data.site}>
                <button type="button" className="btn btn-sm btn-outline-secondary">Acessar Site</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );

}

export default Index;





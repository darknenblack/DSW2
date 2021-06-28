import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";

class Filter extends Component {

  constructor() {
    super();

    this.state = {
      cidade: '',
      data_fim: '',
      data_inicio: ''
    }

    // Esse bind parace que não permite que o this seja igual, nao entendi tb kkkk
    this.changeCidade = this.changeCidade.bind(this);
    this.changeData_fim = this.changeData_fim.bind(this);
    this.changeData_inicio = this.changeData_inicio.bind(this);
    this.clearFilter = this.clearFilter.bind(this);

  }


  myFunction() {
    console.log(this.state.cidade)
    var input = document.getElementById("cidade");
    const filter = input.value.toUpperCase();
    var data1 = this.state.data_inicio;
    var data2 = this.state.data_inicio;
    // console.log(filter)
    var data1 = new Date(data1.replaceAll("-", ","))
    var data2 = new Date(data2.replaceAll("-", ","))

    var cards = document.getElementsByClassName("filt")
    var localizacoes = document.getElementsByClassName("cidades")
    var date = document.getElementsByClassName("intervalo")

    for (let i = 0; i < cards.length; i++) {

      if (localizacoes[i].innerHTML.toUpperCase().includes(filter) && ((isNaN(data1) || (data1 >= getdate(date[i], 0) && data1 <= getdate(date[i], 1))) && (isNaN(data2) || (data2 >= getdate(date[i], 0) && data2 <= getdate(date[i], 1))))) {
        cards[i].style.display = ""
      }
      else {
        cards[i].style.display = "none"
      }

    }
    console.log(data1)
    console.log(data2)
    console.log(filter)
    // console.log(getdate(date[0],0))
  }

  // event.target.value tem o value do html
  changeCidade(event) {
    this.setState({
      cidade: event.target.value
    }, () => {
      this.myFunction()
    });


  }

  changeData_fim(event) {
    this.setState({
      data_fim: event.target.value
    }, () => {
      this.myFunction()
    });
  }

  changeData_inicio(event) {
    this.setState({
      data_inicio: event.target.value
    }, () => {
      this.myFunction()
    });

  }

  clearFilter() {
    console.log(this.state.cidade)
    this.setState({
      cidade: '',
      data_fim: '',
      data_inicio: ''
    }, () => {
      this.myFunction()
    });
  }

  render() {
    return (
      <div className="row">
        <div className="filter">
          <label className="filter_item">Cidade:</label>
          <input type="text" id="cidade" value={this.state.cidade} onChange={this.changeCidade} placeholder="Cidade..." />
          <label className="filter_item">Data de checkin:</label>
          <input type="date" id="data_inicio" className="filter_date" value={this.state.data_inicio} onChange={this.changeData_inicio} />
          <label className="filter_item">Data de checkout:</label>
          <input type="date" id="data_final" className="filter_date" value={this.state.data_fim} onChange={this.changeData_fim} />

          <button className="btn" onClick={this.clearFilter}> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" className="bi bi-backspace-fill" viewBox="0 0 16 16">
            <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
          </svg> </button>
        </div>
      </div>
    );
  }
}


function getdate(date, part) {
  var data = date.innerHTML.split("a")[part]
  var data = data.split("/")
  var d = new Date(data[2], data[1], data[0])
  d.setMonth(d.getMonth() - 1);
  return d
}



export default Filter;


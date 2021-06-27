import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";


// Contém o menu lateral que deve ser mostrado após o login
class Home extends Component{
    render(){
        return(
            <div class="sidenav">


    <div className="menu">
      <a href="{{url_for('home')}}">Home</a>
      <a href="{{url_for('hoteis')}}">Hotéis</a>
      <a href="{{url_for('sites')}}">Sites de Reserva</a>
      <a href="{{url_for('novapromocao')}}">Cadastrar promoção</a>
    

      <a href="{{url_for('logout')}}">Sair</a>
    </div>
    </div>

        )
    }
}

export default Home;
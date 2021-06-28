import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";
import {
    Route,
    NavLink,
    HashRouter
  } from "react-router-dom";


// Contém o menu lateral que deve ser mostrado após o login
class Home extends Component{
    render(){
        return(
            <div class="sidenav">


    <div className="menu">
      <a ><NavLink to="/home">Hoteis</NavLink></a>
      <a ><NavLink to="/home">Sites</NavLink></a>
      <a ><NavLink to="/home">Promocões</NavLink></a>
      <a><NavLink to="/">Sair</NavLink></a>
    </div>
    </div>

        )
    }
}

export default Home;
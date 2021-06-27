import '../css/bootstrap.min.css';
import '../css/style.css';
import React, { Component } from "react";
import { HashRouter,NavLink } from 'react-router-dom';


// Para pegar a string digitada o react pega a cada alteração, por isso em onChange tem essa função que atualiza o state
//Estou tentando fazer p checkForm validar se é admin para enviar para a pagina home usando isso <NavLink to="/home">Login</NavLink>

class Login extends Component{

  constructor(){
    super();

    this.state = {
      login:'',
      senha:''
    }
    
    // Esse bind parace que não permite que o this seja igual, nao entendi tb kkkk
    this.changeLogin = this.changeLogin.bind(this);
    this.changeSenha= this.changeSenha.bind(this);

  }

  // event.target.value tem o value do html
  changeLogin(event){
    this.setState({
      login: event.target.value
    });

  }

  changeSenha(event){
    this.setState({
      senha: event.target.value
    });
  }

  //Parei aqui, quero conferir se é admin para poder achar uma forma de redirecionar pra home usando isso (ou não) <NavLink to="/home">Login</NavLink>
  checkForm(){
    if (this.state.login ==="admin" && this.state.senha === "admin"){
      console.log("ACEITO")
    }
  }


    render(){
        return(
            <div class="content">
            <h1>Login</h1>
            <div  className="login_geral">
              <table>
                <tr>
                  <th><label>Login: </label></th>
                  <th><input type="text" value={this.state.login} onChange={this.changeLogin} name="login" id="login" width="100%"/></th>
                </tr>
                <tr>
                  <th><span className="error"> </span></th>
                </tr>
                <tr>
                  <th><label>Senha: </label></th>
                  <th><input type="password" value={this.state.senha} onChange={this.changeSenha} name="password" id="password" width="100%"/></th>
                </tr>
                <tr>
                  <th><span className="error"> </span></th>
                </tr>
                <tr>
                  <th>
                    <HashRouter>
                  <th ><button className="btn login-button" id="login-button" onClick={this.checkForm}>Login</button></th>
                  </HashRouter>
                  </th>
                </tr>
              </table>
            </div>
          </div>

        )
    }
}

export default Login;
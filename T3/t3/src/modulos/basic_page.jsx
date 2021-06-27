import '../css/bootstrap.min.css';
import '../css/style.css';
import logo from '../img/logo01.png'
import logo2 from '../img/logo02.png'
import Login from './login.jsx'
import Index from './index.jsx'
import Home from './home.jsx'

import {
  Route,
  NavLink,
  HashRouter
} from "react-router-dom";


//Função para criar o template básico para todas as paginas, ela coloca o Header em cima, footer embaixo e a div com os route mudam o meio da paginas
export function BasicPage() {

  return (
    <div>
      <Header />
      {/* Tem que ter esse HashRouter quando coloca Route ou NavLink */}
      <HashRouter>


        {/* Essa é div que é trocada. Dependendo da pagina escolhida ela mostra outro componente. Se for / mostra Index se for /login mostra Login.
      
      O que é usado para mudar as paginas é o NavLink, que precisa estar dento do HashRouter, tem um ali no Header */}

        <div>
          <Route path="/login" component={Login} />
          <Route exact path="/" component={Index} />

          <Route path="/home" component={Home} />
        </div>
      </HashRouter>
      <Footer />
    </div>
  )
}

function Header() {

  return (
    <div >
      <HashRouter>
        {/* Botão que manda para /login e faz o componente Login ser mostrado ali em cima */}
        <button className="btn login-button" id="login-button"><NavLink to="/login">Login</NavLink></button>

      </HashRouter>
      <div className="header navbar navbar-dark bg-dark shadow-sm">
        <div className="navbar-header">

          <HashRouter>
            <NavLink to="/">
              <img className="navbar-brand" src={logo} />
            </NavLink>
          </HashRouter>

        </div>
      </div>
    </div>
  );
}

function Footer() {

  return (
    <div className="footer bg-dark">
      <img src={logo2} />
    </div>

  );
}


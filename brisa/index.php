<html>
<head>
<title>Brisa</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    function ready() {
        document.getElementById('inicio').value = new Date().toISOString().split('T')[0];
        document.getElementById('fim').value = new Date().toISOString().split('T')[0];
    }
    </script>
</head>
<body onload="ready()">
<div class="header">
  <img src="img/logo.png" height=220 style="margin-top:-60px;">
  
</div>
<div class="content">
  <h2>CSS Template</h2>
    <div id="login-button">
        <a href="login.php">Login</a>
    </div>
    <div id="filter">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label class="filter_item">Cidade:</label>
            <input type="text" name="cidade">
            <label class="filter_item">Data de checkin:</label>
            <input type="date" class="filter_date"name="inicio" id="inicio">
            <label class="filter_item">Data de checkout:</label>
            <input type="date" class="filter_date"name="fim" id="fim">
            <input type="submit" value="filtrar">
        </form>
    </div>
    <div class="cards">
        <!-- A card with given width -->
        <?php

        $imgs = array(
          0=>"img/pousada-santa-rita.jpg",
          1=>"img/78530860.jpg",
          2=>"img/images.jpg",
          3=>"img/pousada-caicara.jpg",
          4=>"img/WEB-PousadaVivamar-166-e1567982987303.jpg",
        );
        $pousadas = array(
          0=>"Pousada Santa Rita",
          1=>"Pousada Shangrila",
          2=>"Pousada-Maresias",
          3=>"Pousada Caicara",
          4=>"Pousada Vivamar",
        );
        $sites = array(
          0=>"http://www.hotelpousadasantarita.com.br/",
          1=>"https://www.shangrila.com.br/",
          2=>"https://www.maresiasbeiramar.com.br/",
          3=>"http://www.caicarapousada.com.br/",
          4=>"https://pousadavivamar.com.br/",
        );
        
        $pousadas = array(
          0=>"Pousada Santa Rita",
          1=>"Pousada Shangrila",
          2=>"Pousada-Maresias",
          3=>"Pousada Caicara",
          4=>"Pousada Vivamar",
        );

        $localizacoes = array(
          0=>"Ribeirao Preto",
          1=>"Serra Negra",
          2=>"Maresias",
          3=>"Ilha Grande",
          4=>"Ubatuba",
        );

        $datas_inicio = array(
          0=>"Pousada Santa Rita",
          1=>"Pousada Shangrila",
          2=>"Maresias",
          3=>"Ilha Grande",
          4=>"Ubatuba",
        );

        for($i=0; $i<5; $i++){
          echo'<div class="cards__item" id = "hotel3" > <img src="';
          echo  $imgs[$i];
          echo'" alt="" class = "hotel" >';
          echo'<a href="';
          echo $sites[$i];
          echo'"> <p>';
          echo $sites[$i];
          echo'</p></a>';

          echo'<p>27/05/2021 a 05/07/2021</p><br>
          <div class="tab-2itens">
            <div class="tab2">
              <p>Diaria a vista </p> <p>R$ 209,90 </p>
            </div>
            <div class="tab2">
              <p>Diaria parcelada </p> <p>R$ 229,90 </p>
            </div>
          </div>
        </div>';
        }
        $data_filtrada = date_create($_POST["inicio"]) ;
        ?>

    </div>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>

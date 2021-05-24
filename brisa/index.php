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
        <form action="#">
            <label class="filter_item">Cidade:</label>
            <input type="text" name="cidade">
            <label class="filter_item">Data de checkin:</label>
            <input type="date" class="filter_date"name="inicio" id="inicio">
            <label class="filter_item">Data de checkout:</label>
            <input type="date" class="filter_date"name="fim" id="fim">
        </form>
    </div>
    <div class="cards">
        <!-- A card with given width -->
        <div class="cards__item" > 
          <img src="img/pousada-santa-rita.jpg" alt="" class = "hotel" >
          <a href=""> <p>pousada Santa Rita</p></a>
        </div>
        <div class="cards__item" id = "hotel2" >
          <img src="img/78530860.jpg" alt="" class = "hotel" >
          <a href=""> <p>pousada Santa Rita</p></a>
        </div>
        <div class="cards__item" id = "hotel3" >
          <img src="img/images.jpg" alt="" class = "hotel" >
          <a href=""> <p>pousada Santa Rita</p></a>
        </div>
        <div class="cards__item" id = "hotel4" >
          <img src="img/pousada-caicara.jpg" alt="" class = "hotel" >
          <a href=""> <p>pousada Santa Rita</p></a>
        </div>
        <div class="cards__item" id = "hotel5" >
          <img src="img/WEB-PousadaVivamar-166-e1567982987303.jpg" alt="" class = "hotel" >
          <a href=""> <p>pousada Santa Rita</p></a>
        </div>

    </div>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>

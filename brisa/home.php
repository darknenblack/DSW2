<?php session_start(); 
  if ($_SESSION['Active'] == false){
    header('location: login.php');
  }
?>
<html>
<head>
<title>DiFerias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("header.php"); ?>

<?php include("menu.php"); ?>

<?php if ($_SESSION['Username'] == "hotel"): ?>
  <div class="cards">
<div class="card_home" id = "hotel3" >
          <img src="img/images.jpg" alt="" class = "hotel" >
          <a href="https://www.maresiasbeiramar.com.br/"> <p>Pousada-Maresias</p></a>
          <p>27/05/2021 a 05/07/2021</p><br>
          <div class="tab-2itens">
            <div class="tab2">
              <p>Diaria a vista </p> <p>R$ 209,90 </p>
            </div>
            <div class="tab2">
              <p>Diaria parcelada </p> <p>R$ 229,90 </p>
            </div>
          </div>
        </div>
</div>
  <?php endif ?>

<?php if ($_SESSION['Username'] == "site"): ?>
  <div class="cards">
<div class="card_home" id = "hotel3" >
          <img src="img/pousada-santa-rita.jpg" alt="" class = "hotel" >
          <a href="https://www.hurb.com/br/hotels/ribeirao-preto/pousada-santa-rita-JNP-JP626275?cmp=396312&prm=515&gclid=Cj0KCQjwwLKFBhDPARIsAPzPi-KhbV1YgtLvjiCJYKuYArYerkEQEPSG9-6WP-5KGDlpNu31r6P2YgwaAtaaEALw_wcB/"> <p>Pousada Santa Rita</p></a>
          <p>27/05/2021 a 05/07/2021</p><br>
          <div class="tab-2itens">
            <div class="tab2">
              <p>Diaria a vista </p> <p>R$ 209,90 </p>
            </div>
            <div class="tab2">
              <p>Diaria parcelada </p> <p>R$ 229,90 </p>
            </div>
          </div>
        </div>
</div>
  <?php endif ?>

</body>
</html>

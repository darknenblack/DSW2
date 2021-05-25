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
<?php include ("menu.php");?>

<div class="content">
  <h2>Hotéis</h2>
<p><a href="novo-hotel.php">Novo</a></p>
<table class="gv">
  <thead>
    <tr>
      <th class="gv-header">
      Nome
      </th>
      <th class="gv-header">
      CNPJ
      </th>
      <th class="gv-header">
      Cidade
      </th>     <th class="gv-header">
      E-mail
      </th>
      <th>
      </th>

      <!-- Repeat other header column ... -->
      </tr>
    </thead>
    <tbody>
    <tr>
      <td class="gv-col">Pousada Santa Rita</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Ribeirao Preto</td>
      <td class="gv-col">santarita@gmail.trips</td>
    </tr>
    <tr>
      <td class="gv-col">Pousada Shangrila</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Serra Negra</td>
      <td class="gv-col">Shangrila@gmail.com</td>
    </tr>
    <tr>
      <td class="gv-col">Maresias Beira Mar</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Maresias</td>
      <td class="gv-col">beiraMaar@gmail.com.br</td>
    </tr>
    <tr>
      <td class="gv-col">Pousada Caiçara</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Ilha Grande</td>
      <td class="gv-col">Caicara@bol.org</td>
    </tr>
    <tr>
      <td class="gv-col">Pousada VivaMar</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Ubatuba</td>
      <td class="gv-col">VivaMar@gmail.org</td>
    </tr>
    </tbody>
  </table>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>

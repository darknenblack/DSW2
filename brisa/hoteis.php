<html>
<head>
<title>Brisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <img src="img/logo.png" height=220 style="margin-top:-60px;">
</div>

<?php
include ("menu.php");
?>

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
      <td class="gv-col">Hotel Embrazado</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Rio de Janeiro</td>
      <td class="gv-col">contato@hotelembrazado.com</td>
    </tr>
    <tr>
      <td class="gv-col">Hotel Embrazado</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Rio de Janeiro</td>
      <td class="gv-col">contato@hotelembrazado.com</td>
    </tr>
    <tr>
      <td class="gv-col">Hotel Embrazado</td>
      <td class="gv-col">13.365.608/0001-61</td>
      <td class="gv-col">Rio de Janeiro</td>
      <td class="gv-col">contato@hotelembrazado.com</td>
    </tr>
    </tbody>
  </table>
  <p>A full-height, fixed sidenav and content.</p>
</div>

</body>
</html>

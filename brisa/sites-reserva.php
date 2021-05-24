<?php session_start(); 
  if ($_SESSION['Active']==false):
    header('location: login.php')
?>
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
<p><a href="novo-sitereserva.php">Novo</a></p>
<table class="gv">
  <thead>
    <tr>
      <th class="gv-header">
      Nome
      </th>
      <th class="gv-header">
      URL
      </th>
      <th class="gv-header">
      E-mail
      </th>
      <th>
      </th>

      <!-- Repeat other header column ... -->
      </tr>
    </thead>
    <tbody>
    <tr>
      <td class="gv-col">Booking</td>
      <td class="gv-col">https://booking.com</td>
      <td class="gv-col">mrbooking@booking.com</td>
    </tr>
    <tr>
      <td class="gv-col">Airbnb</td>
      <td class="gv-col">https://airbnb.com</td>
      <td class="gv-col">mrbnb@airbnb.com</td>
    </tr>
    <tr>
      <td class="gv-col">BestTrips</td>
      <td class="gv-col">https://best.trips</td>
      <td class="gv-col">admin@best.trips</td>
    </tr>
    </tbody>
  </table>
  <p>A full-height, fixed sidenav and content.</p>
</div>
<?php include("footer.php"); ?>
</body>
</html>

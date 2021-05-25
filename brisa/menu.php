<?php session_start(); ?>
<div class="menu">
  

  <?php if ($_SESSION['Username'] == "admin"): ?>
    <a href="hoteis.php">Hotéis</a>
    <a href="sites-reserva.php">Sites de Reserva</a>
  <?php endif ?>

  
  <?php if ($_SESSION['Username'] == "hotel"): ?>
    <a href="nova-promocao.php">Cadastrar promoção</a>
    <a href="hoteis.php">Hotéis</a>
  <?php endif ?>

  <?php if ($_SESSION['Username'] == "site"): ?>
    <a href="nova-promocao.php">Cadastrar promoção</a>
    <a href="sites-reserva.php">Sites de Reserva</a>
  <?php endif ?>

  <a href="logout.php">Sair</a>
</div>


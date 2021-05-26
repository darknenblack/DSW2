
<div class="sidenav">
  <a href="home.php">Home</a>
  <?php if ($_SESSION['Username'] == "admin"): ?>
  <a href="hoteis.php">Hotéis</a>
  <a href="sites-reserva.php">Sites de Reserva</a>
  <?php else: ?>
  <a href="nova-promocao.php">Cadastrar promoção</a>
  <?php endif ?>
  <a href="logout.php">Sair</a>
</div>


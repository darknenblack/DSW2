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
<div class="header">
    <img src="img/logo.png" height=220 style="margin-top:-60px;">
</div>

<?php include("menu.php"); ?>

<div class="content">
  <h2>Cadastrar hotel</h2>
  <table>
  <form action="novo-hotel.php" method="POST">
  <tr>
    <td>CNPJ:</td>
    <td><input type="text" name="cnpj"></td>
  </tr> 
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome"></td>
  </tr>
  <tr>
    <td>Cidade:</td>
    <td><input type="text" name="cidade"></td>
  </tr> 
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Senha:</td>
    <td><input type="password" name="senha"></td>
  </tr>
  <tr>
    <td><input type="submit" value="Criar" onclick="Sucesso()></td>
  </tr>
  </form>
  </table>
</div>
<?php include("footer.php"); ?>
<script>
function Sucesso() {
  alert("Hotel cadastrado com sucesso!");
}
</script>
</body>
</html>

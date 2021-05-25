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

<div class="content">
  <h2>Cadastrar promoção</h2>
  <table>
  <form action="nova-promocao.php" method="POST">
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome"></td>
  </tr> 
  <tr>
    <td>Cidade:</td>
    <td><input type="text" name="cidade"></td>
  </tr>
  <tr>
    <td>Início:</td>
    <td><input type="date" name="inicio"></td>
  </tr> 
  <tr>
    <td>Fim:</td>
    <td><input type="date" name="fim"></td>
  </tr>
  <tr>
    <td>Descrição:</td>
    <td><textarea name="descricao" rows="4" cols="50"> </textarea></td>
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
  alert("Promoção cadastrada com sucesso!");
}
</script>
</body>
</html>

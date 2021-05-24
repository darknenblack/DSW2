<html>
<head>
<title>Brisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <img src="img/logo.png" height=220 style="margin-top:-60px;">
</div>

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
    <td><input type="submit" value="Criar"></td>
  </tr>
  </form>
  </table>
</div>

</body>
</html>


<html>
<head>
<title>DiFerias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="ready()">
<?php include("header.php"); ?>

<?php include("menu.php"); ?>

<?php
  $cidadeErr = $inicioErr = $fimErr = $nomeErr= "" ;
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
      $nome = $_POST["nome"];
      $cidade = $_POST["cidade"];
      $inicio =  $_POST["inicio"];
      $fim =  $_POST["fim"];
    
      if ($nome == '')
      $nomeErr = 'Nome obrigatorio';
      if ($cidade == '')
      $cidadeErr = 'Cidade obrigatoria';
      if ($inicio == '')
      $inicioErr = 'Data de inicio obrigatoria';
      if ($fim == '')
      $fimErr = 'Data final obrigatoria';
      if (date_create($inicio) > date_create($fim))
        $inicioErr = "A data inicial deve ser antes da final";
      if ($cidadeErr == $inicioErr && $cidadeErr == $fimErr && $cidadeErr == $nomeErr){

        echo"<script> alert('Promoção cadastrada com sucesso!');</script> ";
      }
    
  
  }
?>

<div class="content">
  <h2>Cadastrar promoção</h2>
  <table>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <tr>
    <td>Nome:</td>
    <td><input type="text" name="nome"></td>
    <td><span class="error">* <?php echo $nomeErr;?></span></td>
  </tr> 
  <tr>
    <td>Cidade:</td>
    <td><input type="text" name="cidade"></td>
    <td><span class="error">* <?php echo $cidadeErr;?></span></td>
  </tr>
  <tr>
    <td>Início:</td>
    <td><input type="date" name="inicio"></td>
    <td><span class="error">* <?php echo $inicioErr;?></span></td>
  </tr> 
  <tr>
    <td>Fim:</td>
    <td><input type="date" name="fim"></td>
    <td><span class="error">* <?php echo $fimErr;?></span></td>
  </tr>
  <tr>
    <td>Descrição:</td>
    <td><textarea name="descricao" rows="4" cols="50"> </textarea></td>
  </tr>
  <tr>
    <td><input type="submit" value="Criar" ></td>
  </tr>
</form>
  </table>
<?php include("footer.php"); ?>
</div>

</body>
</html>

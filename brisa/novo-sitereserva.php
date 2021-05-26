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

<?php
  $websiteErr = $nomeErr = $senhaErr = $cidadeErr = $emailErr = "" ;
  

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
      $website = $_POST["website"];
      $nome = $_POST["nome"];
      $senha =  $_POST["senha"];
      $cidade =  $_POST["cidade"];
      $email =  $_POST["email"];

      if ($website == '')
      $websiteErr = 'website obrigatorio';
      if ($nome == '')
      $nomeErr = 'Nome obrigatoria';
      if ($senha == '')
      $senhaErr = 'Senha obrigatoria';
      if ($cidade == '')
      $cidadeErr = 'Cidade obrigatoria';
      if ($email == ''){
        $emailErr = 'Email obrigatoria';
      }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = 'Email inválido';
        } 
      }
            
      if ($cidadeErr == $websiteErr && $cidadeErr == $senhaErr && $cidadeErr == $nomeErr && $cidadeErr == $emailErr){

        echo"<script> alert('Site de reservas cadastrado com sucesso!');</script> ";
      }
    
  
  }
?>

<div class="content">
  <h2>Cadastrar Site de Reserva</h2>
  <table>
  <form action="novo-sitereserva.php" method="POST">
  <tr>
    <td>Website:</td>
    <td><input type="text" name="website"></td>
    <td><span class="error">* <?php echo $websiteErr;?></span></td>
  </tr> 
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
    <td>Email:</td>
    <td><input type="text" name="email"></td>
    <td><span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
    <td>Senha:</td>
    <td><input type="password" name="senha"></td>
    <td><span class="error">* <?php echo $senhaErr;?></span></td>
  </tr>
  <tr>
    <td><input type="submit" value="Criar" ></td>
  </tr>
  </form>
  </table>
</div>
<?php include("footer.php"); ?>

</body>
</html>

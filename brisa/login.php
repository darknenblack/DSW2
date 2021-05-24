<html>
<head>
<title>Brisa</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
    function ready() {
        document.getElementById('inicio').value = new Date().toISOString().split('T')[0];
        document.getElementById('fim').value = new Date().toISOString().split('T')[0];
    }
    </script>
</head>
<body onload="ready()">

<?php
// define variables and set to empty values
$login = $password = "";
$loginErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $login = $_POST["login"];
  $password = $_POST["password"];

  
  switch ($login){
    case "":
      $loginErr = "Usuario não informado";
      case "admin":
        if ($password == "admin"){
          $login = ($_POST["login"]);
          $password = ($_POST["password"]);
          $loginErr = $passwordErr = "";

          header('location: home.php');
        }
        else{
          $passwordErr = "Senha incorreta";
        }
        break;
        default:
        $loginErr = "Usuario não encontrado";
        break;
        
      }
  if (empty($_POST["password"]))
    $passwordErr = "Senha não informada";
  
  
}

?>


<div class="header">
  <h1>Title</h1>
  <p>A slogan here. Perhaps change all to an image?</p>
</div>
<div class="content">
  <h2>Login</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class= "login_geral">
      <table>
      <tr>
        <th><label class="login-lbl">Login: </label></th>
        <th><input type="text" name="login"></th>
      </tr>
      <tr>
        <th><span class="error"> <?php echo $loginErr;?></span></th>
      </tr>
      <tr>
        <th><label class="login-lbl">Senha: </label></th>
        <th><input type="password" name="password"></th>
      </tr>
      <tr>
        <th><span class="error"> <?php echo $passwordErr;?></span></th>
      </tr>
      <tr>
        <th></th>
        <th style="text-align:right"><input type="submit" value="Entrar"></th>
      </tr>
      </table>
      </form>
</div>

</body>
</html>

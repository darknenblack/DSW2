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
<div class="header">
  <h1>Title</h1>
  <p>A slogan here. Perhaps change all to an image?</p>
</div>
<div class="content">
  <h2>Login</h2>
  <form action="home.php" method="POST">
    <table>
    <tr>
      <th><label class="login-lbl">Login: </label></th>
      <th><input type="text" name="login"></th>
    </tr>
    <tr>
      <th><label class="login-lbl">Senha: </label></th>
      <th><input type="password" name="password"></th>
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

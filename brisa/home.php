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
  <h2>CSS Template</h2>
  <p>A full-height, fixed sidenav and content.</p>
</div>

<?php include("footer.php"); ?>
</body>
</html>

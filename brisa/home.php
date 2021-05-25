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
  
</div>

<?php include("footer.php"); ?>
</body>
</html>

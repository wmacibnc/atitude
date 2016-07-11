<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
include 'config.php' 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Cine Atitude</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="css/ie-emulation-modes-warning.js"></script>

    <!-- Contador -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/icomonn.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.ccountdown.js"></script>
    <script src="js/init.js"></script>
    <!-- Contador -->

  </head>

  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Célula Atitude</h3>
              <nav>
              <?php 
                $url = $_SERVER['REQUEST_URI'];
              ?>
              
                <ul class="nav masthead-nav">
                  <?php 
                    if (strpos($url, 'index') !== false) {
                      echo '<li class="active"><a href="index.php">Home</a></li>';
                      echo '<li><a href="contato.php">Contato</a></li>';
                    }else if (strpos($url, 'contato') !== false) {
                      echo '<li><a href="index.php">Home</a></li>';
                      echo '<li class="active"><a href="contato.php">Contato</a></li>';
                    }else{
                      echo '<li><a href="index.php">Home</a></li>';
                      echo '<li><a href="contato.php">Contato</a></li>';
                    }
                  ?>
                </ul>
              </nav>
            </div>
          </div>

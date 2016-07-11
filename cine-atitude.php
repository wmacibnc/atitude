<?php include 'header.php'; ?>

<div class="inner cover">
  <div class="md-12" style="margin-left: 18%;">
    <?php include('contador.php'); ?>
  </div>
  <h1 class="cover-heading">Presença confirmada !!!</h1>

  <?php
  $query="insert into contador values (null);";
  mysql_query($query);
  $resultado = mysql_query("select max(id) from contador");
  $total = mysql_fetch_array($resultado);
  ?>

  <h2 class="cover-heading" style="color:#8f2323;"><?php echo $total[0] ?> pessoas confirmadas.</h2>
</div>

<?php include 'footer.php'; ?>
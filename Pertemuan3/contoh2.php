<!DOCTYPE html>
<html>
<head>
       <title>Contoh 2</title>
</head>
<body text=#666633 bgcolor=#ffcccc>
      <?php
           $jumlah = 10.5;
           $harga = 2500;
           $total = $jumlah * $harga;
      ?>
      <hr size="5" width=50% align="left" color="#000066">

      Jumlah beli = <?php echo $jumlah; ?><br>
      Harga satuan = <?= $harga; ?><br>
      Total = <?php echo $total; ?>

      <hr size=2 width=50% align="left">

      Tipe variable jumlah adalah: <?php echo gettype($jumlah); ?><br>
      Tipe variable harga adalah: <?php echo gettype($harga); ?>

      <hr size=5 width=50% align="left" color="#00FF33">

</body>
</html>

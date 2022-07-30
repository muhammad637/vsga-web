<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Coba Radio</h1>
  <p>Silahkan Pilih Menu Dibawah</p>


  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <input type="radio" name="menu" id="html" value="true">
    <label for="html">HTML</label><br>
    <input type="radio" name="menu" id="css" value="false">
    <label for="css">css</label><br>
    <input type="radio" name="menu" id="js" value="false">
    <label for="js">js</label><br>
    <input type="radio" name="menu" id="php" value="false">
    <label for="php">php</label><br><br>
    <input type="submit" value="Cek"><br><br>
  </form>
  <span><?php
        $hasil = $_POST['menu'];
        if ($hasil == "true") {
          echo  "jawaban benar";
        } else {
          echo "jawaban salah";
        }
        ?></span>
</body>

</html>
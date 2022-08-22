<?php
require 'script.php';
if (isset($_POST['edit'])) {
  if (edit($_POST) === "berhasil") {
    echo "<script>
        alert('data berhasil diperbarui');
        document.location.href = 'index.php';
        </script>";
  } else {
    echo "<script>
        alert('data gagal diperbarui');
        </script>";
  }
}
$id = $_GET['id'];
$data = query("SELECT * FROM printer Where no = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <button><a href="index.php">back</a></button>
  <form action="" method="post">
    <?php
    foreach ($data as $d) {
    ?>
      <ul>
        <input type="hidden" name="id" value="<?= $id; ?>">
        <li><label>
            merk :<input type="text" name="merk" value="<?= $d['merk']; ?>" autofocus>
          </label></li>
        <li><label>
            warna :<input type="text" name="warna" value="<?= $d['warna']; ?>">
          </label></li>
        <li><label>
            jumlah :<input type="text" name="jumlah" value="<?= $d['jumlah']; ?>">
          </label></li>
        <button type="submit" name="edit">Edit Data</button>
      </ul>
    <?php } ?>
  </form>
</body>

</html>
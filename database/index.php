<?php
include('script.php');
$datas = query('select * from printer');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <button><a href="tambah.php">tambah data</a></button>
  <h1>Data Printer</h1>
  <table>
    <tr>
      <th>no</th>
      <th>merk</th>
      <th>warna</th>
      <th>jumlah</th>
      <th>aksi</th>
    </tr>

    <?php foreach ($datas as $data) { ?>
      <tr>
        <td><?= $data['no']; ?></td>
        <td><?= $data['merk']; ?></td>
        <td><?= $data['warna']; ?></td>
        <td><?= $data['jumlah']; ?></td>
        <td>
          <button><a href="delete.php?id= <?= $data['no']; ?>">delete</a></button>
          <button><a href="edit.php?id= <?= $data['no']; ?>">edit</a></button>
        </td>
      </tr>

    <?php
    } ?>
  </table>

</body>

</html>
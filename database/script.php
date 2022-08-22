<?php
function conn()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "printer_db";
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    return $conn;
  }
}

function query($query)
{
  $conn = conn();
  return mysqli_query($conn, $query);
  $conn->close();
}

function insert($data)
{
  $merk = htmlspecialchars($data['merk']);
  $warna = htmlspecialchars($data['warna']);
  $jumlah = htmlspecialchars($data['jumlah']);

  $conn = conn();

  $tambah =  mysqli_query($conn, "INSERT INTO printer (merk,warna,jumlah) values ('$merk','$warna', $jumlah);");

  if ($tambah === false) {
    echo $conn->error;
  } else {
    return "berhasil";
  }
  $conn->close();
}

function delete($id)
{
  $conn = conn();
  $delete = mysqli_query($conn, "DELETE FROM printer WHERE no = $id;");

  if ($delete === false) {
    echo $conn->error;
  } else {
    return "berhasil";
  }
  $conn->close();
}

function edit($data)
{
  $conn = conn();
  $id = htmlspecialchars($data['id']);
  $merk = htmlspecialchars($data['merk']);
  $warna = htmlspecialchars($data['warna']);
  $jumlah = htmlspecialchars($data['jumlah']);


  $edit = mysqli_query($conn, "UPDATE printer SET merk = '$merk', warna = '$warna', jumlah = $jumlah WHERE no = $id;");

  if ($edit === false) {
    echo $conn->error;
  } else {
    return "berhasil";
  }
  $conn->close();
}

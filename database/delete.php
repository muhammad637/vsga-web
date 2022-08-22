<?php
include('script.php');
$id = $_GET['id'];
if (delete($id) === "berhasil") {
  echo "<script>
      alert('data berhasil dihapus');
      document.location.href = 'index.php';
      </script>";
} else {
  echo "<script>
      alert('data gagal dihapus');
      </script>";
}

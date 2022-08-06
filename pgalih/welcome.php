<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  session_start();
  $name = $umur = $alamat = $email = $gender = $comment = $website = "-";


  if ($_SESSION['comment'] != "") {
    $comment = $_SESSION['comment'];
  }
  if ($_SESSION['name'] != "") {
    $name = $_SESSION['name'];
  }
  if ($_SESSION['umur'] != "") {
    $umur = $_SESSION['umur'];
  }
  if ($_SESSION['alamat'] != "") {
    $alamat = $_SESSION['alamat'];
  }
  if ($_SESSION['email'] != "") {
    $emali = $_SESSION['email'];
  }
  if ($_SESSION['gender'] != "") {
    $gender = $_SESSION['gender'];
  }
  if ($_SESSION['website'] != "") {
    $website = "<a href='$_SESSION[website]' target='_blank'>$_SESSION[website]</a>";
  }

  ?>


  <div class="container">

    <div class="header">
      <h1>Profile</h1>
      <h3>Hii...</h3>
    </div>

    <div class="content">

      <div class="left">
        <h3>About Me</h3>
        <p>
          <?php
          echo $comment;
          ?>
        </p>
      </div>

      <div class="center">
        <img src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659652__340.png" alt="">
      </div>

      <div class="right">
        <h3>Details</h3>

        <div class="detail-title">Nama :</div>
        <p> <?php echo $name; ?></p> <br>
        <div class="detail-title">Umur :</div>
        <p> <?php echo $umur; ?></p> <br>
        <div class="detail-title">Alamat :</div>
        <p> <?php echo $alamat; ?></p> <br>
        <div class="detail-title">Gender :</div>
        <p> <?php echo $gender; ?></p> <br>
        <div class="detail-title">Email :</div>
        <p> <?php echo $email; ?></p> <br>
        <div class="detail-title">Website :</div>
        <p> <?php echo $website; ?></p> <br>

      </div>

    </div>

  </div>

</body>

</html>
<?php
// define variables and set to empty values
$nameErr = $umurErr = $alamatErr = $emailErr = $genderErr = $websiteErr = "";
$name = $umur = $alamat = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $valid = true;

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $valid = false;
  } else {
    $name = test_input($_POST["name"]);
    $_SESSION['name'] = $name;
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
      $valid = false;
    }
  }


  if (empty($_POST["umur"])) {
    $umurErr = "umur is required";
    $valid = false;
  } else {
    $umur = test_input($_POST["umur"]);
    $_SESSION['umur'] = $umur;
  }

  if (empty($_POST["alamat"])) {
    $alamatErr = "alamat is required";
    $valid = false;
  } else {
    $alamat = test_input($_POST["alamat"]);
    $_SESSION['alamat'] = $alamat;
    if (!preg_match("/^[a-zA-Z-' ]*$/", $alamat)) {
      $alamatErr = "Only letters and white space allowed";
      $valid = false;
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $valid = false;
  } else {
    $email = test_input($_POST["email"]);
    $_SESSION['email'] = $email;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $valid = false;
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
    $_SESSION['website'] = $website;
  } else {
    $website = test_input($_POST["website"]);
    $_SESSION['website'] = $website;
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
      $websiteErr = "Invalid URL";
      $valid = false;
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
    $_SESSION['comment'] = $comment;
  } else {
    $comment = test_input($_POST["comment"]);
    $_SESSION['comment'] = $comment;
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $valid = false;
  } else {
    $gender = test_input($_POST["gender"]);
    $_SESSION['gender'] = $gender;
  }

  if ($valid) {
    header('location: welcome.php');
    exit();
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

      <div class="row">
        <div class="label">Name:</div> <input type="text" id="input" name="name" placeholder="nama...">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Umur:</div> <input type="text" id="input" name="umur" placeholder="umur...">
        <span class="error">* <?php echo $umurErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Alamat:</div> <input type="text" id="input" placeholder="alamat..." name="alamat">
        <span class="error">* <?php echo $alamatErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Email:</div> <input type="text" id="input" name="email" placeholder="email...">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Website:</div> <input type="text" id="input" name="website" value="<?php echo $website; ?>" placeholder="ex: https://example.com">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Comment:</div> <textarea name="comment" id="input" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
      </div>
      <div class="row">
        <div class="label">Gender:</div>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <br><span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
      </div>
      <div class="row">
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>

  </div>

</body>

</html>
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
  <div class="container">
    <form action="page2.php" class="form" method="post">
      <div class="error" style="display: none"></div>

      <div class="input-field">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" />
      </div>

      <div class="input-field">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" />
      </div>

      <input type="submit" value="Login">
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>
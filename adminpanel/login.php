<?php
require '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">\
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>

<style>
  .main {
    height: 100vh;
  }

  .login-box {
    width: 500px;
    height: 300px;
    border: 1px solid black;
  }
</style>
<body>
  <div class="main d-flex justify-content-center align-items-center">
    <div class="login-box">
      <form action="" method="post">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username">

        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password">

        <button class="btn btn-succes" type="submit">Login</button>
      </form>
    </div>
  </div>  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
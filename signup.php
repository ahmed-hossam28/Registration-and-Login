<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup and Login</title>
    <link rel ="stylesheet" href="style/signup.css">
</head>
<body>
<div class="container">
    <h2>Signup</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Signup">
    </form>
    <div class="switch">
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <?php
      require_once "database.php";
       //global $db;

      $name = isset($_POST['username'])?$_POST['username']:null;
      $password = isset($_POST['password'])?$_POST['password']:null;
       if(isset($name)&&isset($password)) {
           $st = "INSERT INTO USERS (name, pass) VALUES ('$name','$password')";
           if ($db->exec($st))
               echo "<p style='color: green'>registration successful!</p>";
       }
    ?>

</div>

</body>
</html>

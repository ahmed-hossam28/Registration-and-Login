<?php
session_start();
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM USERS";
    $st = $db->query($sql);
    $data = $st->fetchAll(PDO::FETCH_ASSOC);

    function findUser($data, $name, $pass) {
        foreach ($data as $arr) {
            if ($arr['name'] == $name && $arr['pass'] == $pass) {
                return true;
            }
        }
        return false;
    }

    if (findUser($data, $username, $password)) {
        $_SESSION['status'] = true;

        header("Location: dashboard.php");
        exit();
    } else {
        global $flag;
       $flag = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/signin.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
        <?php
        global  $flag;
         if($flag){
             echo "<p style='color: red'> wrong username or password";
         }
        ?>
    </form>
    <div class="switch">
        <p>Don't have an account? <a href="signup.php">Signup</a></p>
    </div>
</div>
</body>
</html>

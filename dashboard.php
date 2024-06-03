<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Admin Panel</h1>
    </div>
    <div class="menu">
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Settings</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="content">
        <h2>Welcome to the Dashboard</h2>
        <p>This is the main content area where you can display various information and functionalities.</p>
    </div>
    <h5><?php if(isset($_GET['var'])) echo $_GET["var"];?></h5>
    <div class="clearfix"></div>
</div>
</body>
</html>

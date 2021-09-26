<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CommodiTime</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <nav>
        <a href="profile.php">profile</a>
        <a href="marketplace.php">Marketplace</a>
        <a href="network.php">Network</a>
    </nav>
    <a href="logout.php">logout</a>
    <br>
    <h1>Hello <?php echo $user_data["user_name"]; ?> </h1>
    
</body>
</html>

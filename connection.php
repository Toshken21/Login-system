<?php 
// database connection to login
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect!");
}

// database connection to user_profile
$dbhost_profile = "localhost";
$dbuser_profile = "root";
$dbpass_profile = "";
$dbname_profile = "profiles";

if(!$profiles_con = mysqli_connect($dbhost_profile, $dbuser_profile, $dbpass_profile, $dbname_profile)){
    die("Failed to collect to profile");
}
echo "Connected profile database succcessfully";



?>


<?php
include "connection.php";

function check_login($con){ 
        if(isset($_SESSION["user_id"])){

            $id = $_SESSION["user_id"];
            $query = "select * from users where user_id = '$id' limit 1";

            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    // redirect to login
    header("Location: login.php");
    die;
}

function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i= 0; $i < $len; $i++) {
        $text .= rand(0,9);
    }
    return $text;
}

function doesProfileExist($name){
    $check_unique_query = "select ifnull((select * from user_profiles where user_name = '$name' limit 1), 0)";
    $is_existing = mysqli_query($profiles_con, $check_unique_query);
    if($is_existing){
        return True;

    }else{
        return False;
    }
}

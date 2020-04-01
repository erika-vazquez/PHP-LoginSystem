<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    /*

    */
    if($_POST['captcha'] != $_SESSION['captcha']){
        echo "Invalid captcha";
    }else{
        echo "Valid captcha";
    }
}

?>
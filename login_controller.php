<?php
session_start();

require_once '';


$message = "Please enter your login credentials";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $getvars = $_GET;
    if (isset($getvars["action"]) && $getvars["action"] == 'login') {
        //$validLogin = $model->validate_login($_POST["email"], $_POST["password"]);
       
        
        // echo $validLogin;
        if ($validLogin) {
            $_SESSION["id"] =  $validLogin;
            header ('Location: index.php');
        } else {
            $message = "Entered email and/or password is invalid";
        }
    }
}


?>

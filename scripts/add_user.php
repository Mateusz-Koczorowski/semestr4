<?php
   //var_dump($_POST);
require_once "./connect.php";
    foreach ($_POST as $key => $value){
        if(empty($value)) {
            //echo "$key is empty!<br>";
            header("location: ../3_db/4_add_user.php");
            exit();
        }
    }

    require_once "./connect.php";
    $sql = "INSERT INTO `users` (`id`, `city_id`, `firstName`, `secondName`, `birthday`) 
VALUES (NULL, $_POST[city_id], '$_POST[firstName]', '$_POST[secondName]', '$_POST[birthday]');";
    $conn -> query($sql);



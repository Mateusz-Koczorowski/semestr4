<?php
   //echo "<h4> Usuwanie uzytkownika </h4>";
    //print_r($_GET);
require_once "./connect.php";
    $sql = "DELETE FROM users WHERE `users`.`id` = $_GET[userId]";
    $conn -> query($sql);
    if($conn -> affected_rows == 0){
        header("location: ../3_db/3_delete_user.php?deleteUserId=0");
    }
    else{
        header("location: ../3_db/3_delete_user.php?deleteUserId=$_GET[userId]");
    }
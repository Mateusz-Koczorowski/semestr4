<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/table.css">
    <title>Użytkownicy</title>
</head>
<body>
<h4>Użytkownicy</h4>
<?php
if(isset($_GET["deleteUserId"])) {
    if ($_GET["deleteUserId"] == 0) {
        echo "Nie udalo sie usunać rekordu!";
    } else {
        echo "Udalo sie usunąć rekord o ID = $_GET[deleteUserId]";
    }
}
?>
<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
        <th>Województwo</th>
        <th>Państwo</th>
    </tr>
    <?php
    require_once "../scripts/connect.php";
    $sql = "SELECT `u`.`id` `userId` ,`u`.`firstName` as `imie`, `u`.`secondName`, `u`.`birthday`, `c`.`city`, `s`.`state`, `co`.`country` FROM `users` u JOIN `cities` c ON `u`.`city_id`=`c`.`id` JOIN `states` s ON `c`.`state_id`=`s`.`id` JOIN `countries` co ON `s`.`conutry_id`=`co`.`id`;";
    $result = $conn->query($sql);
    //echo $result -> num_rows;
    if($result -> num_rows == 0){
        echo "<tr><td colspan='6'>Brak rekordow do wyświetlenia!</td></tr>";
    }
    else {
        while ($user = $result->fetch_assoc()) {
            echo <<< TABLEUSERS
      <tr>
        <td>$user[imie]</td>
        <td>$user[secondName]</td>
        <td>$user[birthday]</td>
        <td>$user[city]</td>
        <td>$user[state]</td>
        <td>$user[country]</td>
        <td><a href="../scripts/delete_user.php?userId=$user[userId]"> usuń</a></td>
      </tr>
TABLEUSERS;
        }
    }
    echo "</table>";
    if(isset($_GET["add_user"])){
        echo <<< ADDUSERFORM
            <h4> Formularz</h4>
<form action="../scripts/add_user.php" method="post">
    <input type="text" name="firstName" placeholder="Imie" autofocus required><br><br>
    <input type="text" name="secondName"placeholder="Nazwisko" required><br><br>
    <input type="date" name="birthday" placeholder="Data urodzenia" required><br><br>
    <input type="text" name="city_id" placeholder="Miasto" required><br><br>
    <input type="submit" value="ADD USER">
    
</form>
ADDUSERFORM;

    }
    else {
        echo "<a href='4_add_user.php?add_user=1'>Dodaj użytkownika</a>";
    }
    $conn->close();
    ?>
</body>
</html>

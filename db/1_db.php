<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <h4>Użytkownicy z bazy danych: </h4>
    <table>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
            <th>Stan</th>
            <th>Kraj</th>
        </tr>
    
    <?php
    require_once "../scripts/connect.php";
    $sql = "SELECT firstName, secondName, birthday,cities.city as city, states.state as state, countries.country as country  FROM `users`\n"

    . "\n"

    . "    join cities on users.city_id=cities.id\n"

    . "\n"

    . "    join states on cities.state_id=states.id\n"

    . "    \n"

    . "    join countries on states.conutry_id=countries.id;";
    $result = $connect->query($sql);

    while( $user = $result -> fetch_assoc()){
        echo "<tr>";
        echo <<< TABLEUSERS
        <td>$user[firstName]</td>
        <td>$user[secondName]</td>
        <td>$user[birthday]</td>
        <td>$user[city]</td>
        <td>$user[state]</td>
        <td>$user[country]</td>

        TABLEUSERS;
        echo "</tr>";
    }
    ?>
    </table>

</body>
</html>
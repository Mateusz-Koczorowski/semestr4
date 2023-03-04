<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       <?php
            $firstName = "Janusz";
            $lastName = "Nowak";
            echo "Imię i naziwsko: $firstName $lastName <br>"; 
            echo 'Imię i naziwsko: $firstName $lastName<br>'; 

            //heredoc
            echo <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName<br>
            </hr>
            DATA;

            $data = <<< DATA
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName<br>
            </hr>
            DATA;

            echo $data;

            //nowdoc
            echo <<< 'DATA'
            <hr>
            Imię: $firstName<br>
            Nazwisko: $lastName<br>
            </hr>
            DATA;

            $bin = 0b1010;
            echo $bin;

            $oct = 010;
            echo $oct;

            $hex = 0xA;
            echo $hex;


        ?>
        <script src="" async defer></script>
    </body>
</html>
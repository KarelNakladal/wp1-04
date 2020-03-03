<?php 
$age = 5;

if ($age >=18 ){

    $answer = "Thanks come a gain";
    $picture = "https://www.vera-kovarova.cz/wp-content/uploads/2019/05/ilustra%C4%8Dn%C3%AD-foto_alkohol.jpg";

}

else {

    $answer = "Get out of my shop you filthy brat";
    $picture = "https://steamuserimages-a.akamaihd.net/ugc/156899501285374658/CC5FE8DE7AC7E46BA9C2A26B7F186084358F71FB/";
}


?>




<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?= $answer ?>
    <img src= <?= $picture ?> alt="obrazek">
</body>
</html>
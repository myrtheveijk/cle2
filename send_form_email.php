<?php
include_once 'includes/database.php';

//print_r($_POST);
$days = $_POST['date'];

//foreach ($days as $day =>  $dayParts) {
    //foreach ($dayParts as $dayPart) {
        //echo 'Op: '.$day.' is dagdeel: '.$dayPart.' geselecteerd';
        // INSERT INTO
        //$query = "INSERT INTO availabilities_users (availability_id, user_id, comments)
        //          VALUES ('$availability_id', '3', '$comments')";
    //}
    //echo '<br>';
//}
//echo 'Opmerkingen: '.($_POST['comment']);
//echo '<br>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <title>Formulier - Hotel De Gravin</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="wpr-nav">
    <div id="cnr-nav">
        <img id="logo" src="img/HotelDeGravin-logo.jpg" alt="logo"/>
        <div class="admin">
            <img class="admin-icon" src="img/admin-icon.png" alt="admin"/>
            <p class="admin-style">
<!--                --><?//= $user['firstname'] ?>
<!--                --><?//= $user['lastname'] ?>
            </p>
            <a href="#"><i class="fas fa-sort-down"></i></a>
        </div>
    </div>
</div>


<div id="wpr-header">
    <div id="cnr-header">
    </div>
</div>

<div id="wpr-intro" class="standard-block-style bg-beige">
    <div id="cnr-intro">
        <div class="intro-title">De beschikbaarheid is ontvangen,</div>
        <div class="intro-text">
            <p>
                Je beschikbaarheid is ontvangen! De plannin wordt voor vrijdag gemaakt. <br>
                <?php foreach ($days as $day =>  $dayParts) {
                    foreach ($dayParts as $dayPart) {
                        echo 'Op deze dag ben je beschikbaar: '.$day.' (dagdeel:) '.$dayPart.' geselecteerd';
                    }
                    echo '<br>';
                }
                echo 'Opmerkingen: '.($_POST['comment']);
                echo '<br>';
                ?>
            </p>
        </div>
    </div>
</div>

<div id="wpr-contact" class="standard-block-style">
    <div id="cnr-contact">
        <div class="intro-title">Vragen en/of<br>opmerkingen?</div>
        <div class="intro-text">
            <p>
                Welke dag en welk dagdeel ben jij beschikbaar? Selecteer
                het dagdeel dat jij beschikbaar bent aan, vul (eventueel) een opmerking in
                en verstuur. Wij ontvangen jou beschikbaarheid en maken hier vanuit een planning.
            </p>
        </div>
    </div>
</div>

<div id="wpr-footer">
    <div id="cnr-footer">
        <img id="footer-logo" src="img/HotelDeGravin-logo.jpg" alt="logo"/>
        <div id="footer-owner"><p>Judith & Marianne</p></div>
    </div>
</div>

<div id="wpr-footer-end">
    <div id="cnr-footer-end">
        <p id="disclaimer">Disclaimer</p>
    </div>
</div>

</body>
</html>
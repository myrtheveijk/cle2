<?php
include_once 'includes/database.php';

    $queryUsers = 'SELECT * FROM users';
    $resultUsers = mysqli_query($db, $queryUsers)
    or die('Error ' . mysqli_error($db) . '<br>Query: ' . $queryUsers);

    $users = [];
    while ($row = mysqli_fetch_assoc($resultUsers)) {
        $users[] = $row;
    }

foreach ($users as $index => $user) {}
//    if (isset($_POST['submit'])) {
//        //post back, with data from the form.
//        $monday = $_POST['monday'];
//        $tuesday = $_POST['tuesday'];
//        $wednesday = $_POST['wednesday'];
//        $thursday = $_POST['thursday'];
//        $friday = $_POST['friday'];
//        $saturday = $_POST['saturday'];
//        $sunday = $_POST['sunday'];
//        $comment = $_POST['comment'];
//    }

$query = "SELECT u.id AS user_id, u.firstname, a.id AS availability_id
          FROM users AS u
          INNER JOIN availabilities_users AS au ON au.user_id = u.id
          INNER JOIN availabilities AS a ON a.id = au.availability_id";
$result = mysqli_query($db, $query);

$nextWeekNumber = date('W') + 1;

$queryAvailabilities = "SELECT * FROM availabilities WHERE week = $nextWeekNumber";
$resultAvailabilities = mysqli_query($db, $queryAvailabilities);

$availabilities = [];
while ($row = mysqli_fetch_assoc($resultAvailabilities)) {
    $availabilities[$row['dayoftheweek']][] = $row;
}

$days = [
        1 => 'MA',
        2 => 'DI',
        3 => 'WO',
        4 => 'DO',
        5 => 'VR',
        6 => 'ZA',
        7 => 'ZO',
];

$dayPartNames = [
    1 => 'Ochtend',
    2 => 'Middag',
    3 => 'Avond',
];

$nextMonday = date('d . M . Y', time() + (8 - date('w')) * 24 * 3600);
$weekDay = $nextMonday;

mysqli_close($db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <title>Hotel De Gravin</title>

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
                <?= $user['firstname'] ?>
                <?= $user['lastname'] ?>
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
        <div class="intro-title">Wanneer wil jij werken?<br>Plan het in!</div>
        <div class="intro-text">
            <p>
                Is de planning niet helemaal duidelijk.
                Of ben je ingepland, maar kun je niet. Geef dit zo snel mogelijk
                door via WhatsApp, telefonisch of kom even langs. Hoe eerder wij
                het weten, hoe eerder we het kunnen oplossen!
            </p>
        </div>
    </div>
</div>

<div id="wpr-available">
    <div id="cnr-available">
        <div id="available-info">
            <img src="img/HotelDeGravin-painting.jpg" alt="Meisje met de parel"/>
            <div id="available-info-block">
                <h3>Belangrijke info,<br>regels & tips</h3>
                <hr>
                <p>
                    Hotel De Gravin werkt met een weekplanning. Het is belangrijk
                    dat je op tijd aan geeft wanneer je beschikbaar bent. Om te
                    voorkomen dat je dit vergeet krijg je elke donderdagochtend een
                    herinneringsmail.<br>
                </p>
                <p>
                    Eenmaal alles ingevuld te hebben moet je niet
                    vergeten om op versturen te klikken.<br>
                </p>
                <p>
                    Opmerkingen is optioneel.
                    Ook wanneer dit vak leeg is kun je jouw beschikbaarheid versturen.
                    Daarnaast is het wel handig en fijn als je bijvoorbeeld eerder weg
                    moet vanwege school, tandarts, etc. je dit ook aangeeft. Zodat wij hier
                    ook van op de hoogte zijn.
                </p>
            </div>
        </div>
        <div id="available-content">
            <h3>
                Selecteer het dagdeel dat je<br>
                beschikbaar bent in week
                <?= $nextWeekNumber; ?>:
            </h3>

            <form action="send_form_email.php" method="post">
                <?php foreach ($availabilities as $dayOfTheWeek => $dayParts) { ?>
                    <div id="monday" class="day">
                        <p class="day-style"><?= $days[$dayOfTheWeek];?></p>
                        <p><?= $weekDay ?></p>
                        <?php foreach ($dayParts as $dayPart) { ?>
                            <?php $dayPartId = $dayOfTheWeek.'-'.$dayPart['daypart'];?>
                            <input type="checkbox" id="<?= $dayPartId?>"
                                   name="date[<?= date('Y-m-d', strtotime($weekDay)) ?>][]"
                                   value="<?= $dayPart['daypart'] ?>"/>
                            <label for="<?= $dayPartId?>"><?= $dayPartNames[$dayPart['daypart']];?></label>
                        <?php } ?>
                    </div>
                <?php $weekDay = date('d . M . Y', strtotime($weekDay) + 60 * 60 * 24) ?>
                <?php } ?>

                <div id="comment">
                    <label for="comment">Opmerkingen</label>
                    <textarea id="comment-input" title="comment" name="comment" value=""></textarea>
                </div>

                <button type="submit" name="submit">Verstuur beschikbaarheid</button>
            </form>

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

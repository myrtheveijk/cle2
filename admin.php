<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <title>Hotel De Gravin</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="wpr-nav">
    <div id="cnr-nav">
        <img id="logo" src="img/HotelDeGravin-logo.jpg" alt="logo" />
        <div class="admin">
            <img class="admin-icon" src="img/admin-icon.png" alt="admin" />
            <p class="admin-style">Judith Zuijderwijk</p>
            <a href="#"><i class="fas fa-sort-down"></i></a>
        </div>
    </div>
</div>


<div id="wpr-header">
    <div id="cnr-header">
    </div>
</div>

<div id="wpr-intro-admin" class="standard-block-style bg-blue">
    <div id="cnr-intro">
        <div class="intro-title">Planning van de <br>medewerkers maken</div>
        <div class="intro-text">
            <p>
                Selecteer de werknemer die beschikbaar is. De werknemers met
                de groene kleur zijn beschikbaar. De werknemers met de rode
                kleur zijn niet beschikbaar, maar kunnen wel ingepland worden.
            </p>
        </div>
    </div>
</div>

<div id="wpr-calendar-admin">
    <div id="cnr-calendar-admin">
        <div class="calendar-title">
            <h3>Planning week <?= date('W',time()+( 8 - date('w'))*24*3600);?></h3>
            <p><?= date('d . M . Y',time()+( 8 - date('w'))*24*3600);?> - <?= date('d . M . Y',time()+( 14 - date('w'))*24*3600);?></p>
        </div>

        <div class="calendar-planning">
            <table>
                <thead>
                    <tr>
                        <th>DATUM</th>
                        <th>MA <br> <?= date('d . M . Y',time()+( 8 - date('w'))*24*3600);?></th>
                        <th>DI <br> <?= date('d . M . Y',time()+( 9 - date('w'))*24*3600);?></th>
                        <th>WO <br> <?= date('d . M . Y',time()+( 10 - date('w'))*24*3600);?></th>
                        <th>DO <br> <?= date('d . M . Y',time()+( 11 - date('w'))*24*3600);?></th>
                        <th>VR <br> <?= date('d . M . Y',time()+( 12 - date('w'))*24*3600);?></th>
                        <th>ZA <br> <?= date('d . M . Y',time()+( 13 - date('w'))*24*3600);?></th>
                        <th>ZO <br> <?= date('d . M . Y',time()+( 14 - date('w'))*24*3600);?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="morning">OCHTEND</td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="morning">OCHTEND</td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="afternoon">MIDDAG</td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="evening">AVOND</td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option value="x">x</option>
                                <option value="myrthe">Myrthe</option>
                                <option value="charlotte">Charlotte</option>
                                <option value="cas">Cas</option>
                                <option value="lars">Lars</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="wpr-footer">
    <div id="cnr-footer">
        <img id="footer-logo" src="img/HotelDeGravin-logo.jpg" alt="logo" />
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

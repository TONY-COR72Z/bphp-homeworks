<?php
$hours = date("H");
$days = date("N");
$day;
$msg;
$gMorning = 'Доброе утро!';
$gAfternoon = 'Добрый день!';;
$gEvening = 'Добрый вечер!';
$gNigth = 'Доброй ночи!';
$scheduleMsg;
$imageMorning = '1.jpg';
$imageAfternoon = '2.jpg';
$imageEvening = '3.jpg';
$imageNigth = '4.jpg';

    if ($hours >= 6 && $hours < 11) {
        $msg = $gMorning;
        $image = $imageMorning;
    } elseif ($hours >= 11 && $hours < 18) {
        $msg = $gAfternoon;
        $image = $imageAfternoon;
    } elseif ($hours >= 18 && $hours < 23) {
        $msg = $gEvening;
        $image = $imageEvening;
    } else {
        $msg = $gNigth;
        $image = $imageNigth;
    }

    if ($days >= 1 && $days <= 3) {
        if ($hours >= 9 && $hours < 18) {
            $scheduleMsg = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18.00';
        } else {
            if ($days == 3 && $hours >= 18) {
                $scheduleMsg = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10.00';
            } elseif ($hours < 9) {
                $scheduleMsg = 'Сегодня - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 9.00';
            } else {
                $scheduleMsg = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 9.00';
            }    
        }
    } else if ($days >= 4 && $days <= 6) {
        if ($hours >= 10 && $hours < 18) {
            $scheduleMsg = 'Это лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас до 18.00';
        } else {
            if ($days == 6 && $hours >= 18) {
                $scheduleMsg = 'Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10.00';
            } elseif ($hours < 10) {
                $scheduleMsg = 'Сегодня - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10.00';
            } else {
                $scheduleMsg = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 10.00';
            }     
        }
    } else {
        $scheduleMsg = 'Завтра - лучший день, чтобы обратиться в Horns&Hooves! Мы работаем для Вас с 9.00';
    }
    switch ($days) :
        case 1: $day = 'Понедельник'; break;
        case 2: $day = 'Вторник'; break;
        case 3: $day = 'Среда'; break;
        case 4: $day = 'Четверг'; break;
        case 5: $day = 'Пятница'; break;
        case 6: $day = 'Суббота'; break;
        case 7: $day = 'Воскресенье'; break;
    endswitch;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?= $msg; ?></h1>
            <hr>
            <p><b>Сегодня <?= $day; ?>.</b></p>
            <p><b><?= $scheduleMsg; ?></b></p>
        </div>
    </div>
</body>
</html>
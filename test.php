<?php

/**
 * Перша задача по підрахунку усіх пятниць 13 у високосний рік
 */
$begin = new DateTime("1900-01-01");
$end = new DateTime("1918-01-01");

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval, $end);

foreach ($daterange as $date) {
    if ($date->format('l j') == 'Friday 13' && $date->format('L') === "1") {
        echo $date->format("Y F l 13S") . "<br>";
    }
}
 

/**
 * Задачу про корінь квадратний можна вирішити простою PHP функцією, або я не зовсім зрозумів поставлену задачу
 */
sqrt(9);


?>

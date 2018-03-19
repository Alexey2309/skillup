<?php

$greeting = 'yess';
echo "Hello" ." $greeting ". "world!!";

// 2018-03-19 20:11:35
define('SECONDS_IN_DAY',60*60*24);
$secondInWeek = SECONDS_IN_DAY *7;
$nextWeekTime = time() + $secondInWeek;
echo date('Y-m-d H:i:s',$nextWeekTime);
echo'<br>' . time() . '<br/>';

$thisTime = date('H:i');
echo $thisTime;

// если сейчас больше 19:00 и меньше 22:00 "занятие идет",
//Если меньше 22:00 и больше 21:45 - заканчивается
//иначе не идет.
//


if (($thisTime >= '19:00') && ($thisTime < '21:45')) {
    echo "Занятие идет";
} elseif (($thisTime <= '22:00') && ($thisTime >= '21:45')) {
    echo "Заканчивается";
} else {
    echo "Не идет";
}


//phpinfo();
//echo '<br>';


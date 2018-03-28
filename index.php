<?php





require ('functions.php');
incrementCounter();
$aCounter = getCounter();
echo $aCounter[0];
// На сайте должно выводться количество просмотров и дату последнего визита

$sFileName = getController($_GET['page']);
require ($sFileName);




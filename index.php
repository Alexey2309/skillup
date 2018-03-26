<?php
$sUri = $_SERVER['REQUEST_URI'];
$aUri = explode('/',trim($sUri, '/'));
//var_dump($_SERVER);
$sName = '      Name          ';
$sName = trim($sName);

var_dump($aUri);
if ($aUri[0] === 'skillogram' && empty($_GET)) {
    require('pages/Home.php');
} elseif (isset($_GET['page'])) {
    require ('pages/' . $_GET['page']. '.php');
}
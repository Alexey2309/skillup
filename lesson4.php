<?php

$sName = 'Artem';
$iAge = 18;
$fPrice = 5.5;
$bIsAdmin = true;
$aHashTags = [
    'cat' => 'about.php',
    'neon' => 'hasTag',
    'color' => 'green',
    'great' => 'greanss',

];
$aExemples = [

   'key_1' => 'value 1',
   'key_2' => 'value 2',
    'key_3' => 'value 3',

];
var_dump($aExemples);

 foreach ($aExemples as $aValue => $aKey){
     echo 'Key: '.$aKey. '--'.'Value: '.$aValue.'<br>';

 }

$aUser = [

 'info_common' => [
    'name' => $sName,
     'age' => $iAge,
     'address' => 'Gluharskay St.'
     ],
    'info_work' => [
        'city' => 'spb',
        'phone' => '11111',
        'address' => 'Vostaniya St.'
    ],
    'city' => 'msk',
];

 foreach ($aUser as $sKey => $aInfo){
     echo $sKey . '<br>';
     if (is_string($aInfo)) {
         break;
     }
     foreach ($aInfo as $sInfoKey => $sInfo){

         echo '----'.$sInfoKey.'' . $sInfo. '<br>';
         if (!empty($aUser[$sInfoKey])) {
             echo '<br>'. $aUser[$sInfoKey] . '<br>';
         }
     }
 }


$nNull = null;

echo '<pre>';
print_r($aHashTags);
print_r($aUser);
echo '<br>';
var_dump($aHashTags). '<br>';
var_dump($aUser);
//echo $aHashTags[3]. '<br>';
echo $aUser['city']. '<br>';

echo count($aHashTags). '<br>';

var_dump(array_keys($aUser)). '<br>';

//var_dump($aUser['last_name']);

If ($iAge === '18') {
    echo 'true';

}elseIf ($bIsAdmin ===  1) {
    echo 'admin';
};
foreach ($aHashTags as $sHashTag => $sLink){

  echo '<a href="' .$sLink. '">'.$sHashTag.'</a><br>';

};

//unset($aHashTags);
//var_dump($aHashTags);

?>




<div class="hashtag_wrapper">
    <?php foreach ($aHashTags as $sHashTag => $sLink): ?>
        <a href="<?php echo $sLink; ?>"><?php echo $sHashTag; ?></a> <br>
    <?php endforeach; ?>
</div>
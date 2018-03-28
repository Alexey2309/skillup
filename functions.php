<?php
function getController($sRequestedPage)
{
    if (!empty($sRequestedPage)) {
        $sController = $sRequestedPage;
    } else {
        $sController = 'Home';
    }
    $sFileName = './pages/' . basename($sController) . 'php';
    if (!file_exists($sFileName)) {
        $sFileName = './pages/404.php';
    }

    return $sFileName;
}

function getCounter(){
    $sCounterName = 'counter.txt';
    // 1.Проверить есть ли файл,
    if (file_exists($sCounterName)) {
        // 1.1 если есть, то взять из файла
        $sData = file_get_contents($sCounterName);
    } else {
        // 1.2 если нет, то счетчик равен 0
        $sData = '';
    }

    return explode("\t", $sData);
}

function incrementCounter()
{
    $sCounterName = 'counter.txt';
    $aData = getCounter();
    //2.Увеличить счетчик
    $aData[0]++;
    $aData[1] = date('Y-m-d H:i:s');
    $aData[2] = $_SERVER['REMOTE_ADDR'];

    $sData = implode("\t",$aData);
    //3. Перезаписать файл с счетчиком новыми данными
    file_put_contents($sCounterName, $sData);
}
    //На сайте должно выводиться кол-во просмотров  дату послденего визита

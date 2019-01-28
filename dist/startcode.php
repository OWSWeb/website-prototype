<?php


    require_once 'simpleSerial.php';

    $mySerial = new Serial();

    $mySerial->setSecret('12345678');
    $mySerial->setRounds(52);
    $mySerial->setSerialLength(20);
    $mySerial->setCount(1);

    $serials = $mySerial->generateSerials();


foreach($serials as $serial) echo $serial;

?>
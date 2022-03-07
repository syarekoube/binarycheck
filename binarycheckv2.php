<?php
function weekcheck($dayofweek){
    $MON = (int)decbin(1);
    $TUE = (int)decbin(2);
    $WED = (int)decbin(4);
    $THU = (int)decbin(8);
    $FRI = (int)decbin(16);
    $SUT = (int)decbin(32);
    $SUN = (int)decbin(64);

    $weekselect = "";
    if ($dayofweek & $MON){
        $weekselect .= "月" . ",";
    }
    if ($dayofweek & $TUE){
        $weekselect .= "火" . ",";
    }
    if ($dayofweek & $WED){
        $weekselect .= "水" . ",";
    }
    if ($dayofweek & $THU){
        $weekselect .= "木" . ",";
    }
    if ($dayofweek & $FRI){
        $weekselect .= "金" . ",";
    }
    if ($dayofweek & $SUT){
        $weekselect .= "土" . ",";
    }
    if ($dayofweek & $SUN){
        $weekselect .= "日" . ",";
    }
    rtrim($weekselect, ",");
    return $weekselect;
}

$MON = (int)1;
$TUE = (int)2;
$WED = (int)4;
$THU = (int)8;
$FRI = (int)16;
$SUT = (int)32;
$SUN = (int)64;


$dayofweek = (int)3;
echo $dayofweek. "\n\n";
#echo weekcheck($dayofweek) . "\n\n";

echo $MON."\n";
echo $TUE."\n";
echo $WED."\n";
echo $THU."\n";
echo $FRI."\n";
echo $SUT."\n";
echo $SUN."\n\n";

echo (($dayofweek & $MON) == $MON)."\n";
echo (($dayofweek & $TUE) == $TUE)."\n";
echo (($dayofweek & $WED) == $WED)."\n";
echo (($dayofweek & $THU) == $THU)."\n";
echo (($dayofweek & $FRI) == $FRI)."\n";
echo (($dayofweek & $SUT) == $SUT)."\n";
echo (($dayofweek & $SUN) == $SUN)."\n\n";

$test = (binary)decbin(8);
echo (($test & $MON) == $MON)."\n";

(PHP_BINARY)
?>

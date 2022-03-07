<?php
class week{
    const MON = 1;    #1
    const TUE = 2;    #10
    const WED = 4;    #100
    const THU = 8;    #1000
    const FRI = 16;   #10000
    const SUT = 32;   #100000
    const SUN = 64;   #1000000
}

function weekcheck($dayofweek){
    $weekselect = "";
    if (($dayofweek & week::MON) == week::MON){
        $weekselect .= "月" . ",";
    }
    if (($dayofweek & week::TUE) == week::TUE){
        $weekselect .= "火" . ",";
    }
    if (($dayofweek & week::WED) == week::WED){
        $weekselect .= "水" . ",";
    }
    if (($dayofweek & week::THU) == week::THU){
        $weekselect .= "木" . ",";
    }
    if (($dayofweek & week::FRI) == week::FRI){
        $weekselect .= "金" . ",";
    }
    if (($dayofweek & week::SUT) == week::SUT){
        $weekselect .= "土" . ",";
    }
    if (($dayofweek & week::SUN) == week::SUN){
        $weekselect .= "日" . ",";
    }
    $weekselect = rtrim($weekselect, ",");
    return $weekselect;
}

$dayofweek = 126;
echo weekcheck($dayofweek) . "\n\n";

?>

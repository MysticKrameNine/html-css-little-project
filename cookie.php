<?php

function secToDays($sec)
{
    return ($sec / 60 / 60 / 24); 
}




function secToDaysTime($sec)
{
    $days = floor($sec / 3600 / 24);
    $hours = floor($sec / 3600 % 24);
    $mins = floor($sec / 60 % 60);
    $secs = floor($sec % 60);
    return "".$days." days, ".$hours.":".$mins.":".$secs;
}

function secToTime($sec)
{
    $hours = floor($sec / 3600);
    $mins = floor($sec / 60 % 60);
    $secs = floor($sec % 60);
    return "".$hours.":".$mins.":".$secs;

}

if (isset($_COOKIE['myuser'])) {
    list($value, $expiry) = explode("|", $_COOKIE["myuser"]);
    $e = secToDays((intval($expiry) - time()));
    if (round($e, 1) < 1) {
        $e = secToTime((intval($expiry) - time()));
        echo "Cookie will expire in " . $e;
    } else {
        $e = secToDaysTime((intval($expiry) - time()));
        echo "Cookie will expire in " . $e;
    }
} else {
    echo "Cookie not set...";
}

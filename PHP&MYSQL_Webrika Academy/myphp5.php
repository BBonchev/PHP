<?php

function obhojdane($number, $vtori) {

    echo $number . ' - ' . $vtori;

}
$chislo = 532535;
obhojdane('gasgsagasga', 124124);

$i = 100;
$k = 40;



$u = 'petko';
$o = 'ognqn';

function proizhojdane ($u, $o) {
    if ('petko' == 'petur') {
        echo $u;
    }
    else {
        echo $o;
    }
}

//proizhojdane ($u, $o);

$mas = array('ako', 'pako', 'tako', 'takos');

function obhojdanemasiv ($masiv) {
    foreach ($masiv as $k => $elem) {
        echo $k . ' - ' . $elem . '<br>';
    }
}

//obhojdanemasiv ($mas);

$mmas = array (
    array ('sofia', 'plovdiv', 'burgas', 'zarata'),
    array (456, 123, 12235, 'asdasd', 'rgxcvt'),
    array ('da be', 'a ne be', 'ti si lyd', 'za vruzvane'),
    array (67867878, 76842213, 2344675672, 11456376),
);

//function obhojdanemnogomerenmasiv ($masiv) {
//    foreach ($masiv as $value) {
//        foreach($value as $stoinost) {
//            echo $stoinost . '<br><hr><br>';
//        }
//    }
//}

//obhojdanemnogomerenmasiv ($mmas);

function oobhojdane ($masiv) {
    for ($i = 0; $i < count($masiv); $i++) {
        for ($u = 0; $u < count($masiv); $u++){
            if (($u + 1) % 2 == 0) {
                echo $masiv[$i][$u];
            }
        }
    }
}
//oobhojdane ($mmas);

echo '<br>';

echo 5 * 5 / 6;

$i = 2000;
$k = 2016;

function visokosnigodini ($i, $k) {
    for ($i; $i < $k; $i++) {
        if($i % 4 == 0) {
            echo $i . '<br>';
        }
    }
}

visokosnigodini($i, $k);


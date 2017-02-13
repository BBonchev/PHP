<?php
//$i = array ('Burgas', 'Kaspichan', 666, 'Pleven');
//
//for ($i = 0; $i <= 3; $i++);
//    echo $i [$i];

//$a = 3;
//$b = 34;
//$c = 'a';
//$d = 'valio';
//$e = array ('asd', 'vfg', 453);
//    echo count ($d);

//$arr = array ('asd', 'vfg', 453, 'asada', 'asdasd');

//for ($i = 0; $i < count($arr); $i++) {
//    echo $arr [$i] . '<br>';
//}

//$u = count($arr) - 1;
//while ($u >= 0) {
//    echo $arr [$u] . '<br>';
//    $u--;
//}

$masivche = array (
    'purvi' => 'gosho',
    'vtori' => 'tosho',
    'petko',
     354 => 12
);
$a = '';
foreach ($masivche as $elem) {
    //$a = $a . $elem;
    $a .= $elem;
    echo $a . '<br>';
}
//
//foreach ($masivche as $key => $val) {
//    echo $key . '=>' . $val . '<br>';
//}


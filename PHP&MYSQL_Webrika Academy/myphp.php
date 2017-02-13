<?php

for ($x = 0; $x <= 100; $x++) {
    if ($x % 2 == 0) {
        echo $x . ' ';
    }
}
echo "<br>";

$x = 0;
while ($x <= 100) {
    if ($x % 2 != 0) {
        echo $x . ' ';
    }
    $x++;
}
echo "<br>";

for ($x = 1000; $x >= 500; $x -= 3) {
    echo $x . ' ';
}
echo '<br>';
$x = 1000;
while ($x >= 500)
    $x -= 3; {
    echo $x . ' ';
}

$masiv = array('gosho', 'tosho', 354, 'alex');
var_dump($masiv);

$masiv = array(
    'purvi' => 'gosho',
    'vtori' => 'tosho',
    'treti' => 354,
    'chetvurti' => 'alex'
);

echo $masiv ['purvi'];

$masiv = array('BG', 'US', 'UK');
echo $masiv [1];

echo '<br>';

$masiv = array(
    1 => 'Sa',
    2 => 'EN',
    3 => 'PB',
);
echo $masiv [3];

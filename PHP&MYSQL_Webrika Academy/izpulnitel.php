<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$query = "SELECT * FROM izpulnitel";

$izpulniteli = $link->query($query);

$izpulnitel= [];

while($red = mysqli_fetch_assoc($izpulniteli)) {
    $izpulnitel[] = $red;
}

foreach ($izpulnitel as $k => $v) {
    echo '<p>' . $v['ime'] . '</p>';
    echo '<p>' . $v['stil'] . '</p>';
    echo '<hr>';
}
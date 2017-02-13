<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$i = $_POST['title'];
$k = $_POST['type'];
$o = $_POST['location'];
$u = $_POST['publisher'];
$h = $_POST['date'];

$query = "UPDATE statii SET title = '$i', type = '$k', location = '$o', publisher = '$u', date = '$h' WHERE id = 2";

$article = $link->query($query);

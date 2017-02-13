<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$i = $_POST['text'];
$k = $_POST['type'];
$o = $_POST['shortdescription'];
$l = $_POST['city'];
$p = $_POST['publisher'];
$d = $_POST['date'];

$query = "INSERT INTO statii (type, title, shortdescription, location, publisher, date) VALUES ('$i', '$k', '$o', '$l', '$p', '$d')";
$link->query($query);
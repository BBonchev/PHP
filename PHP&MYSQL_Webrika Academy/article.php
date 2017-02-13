<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$query = "SELECT * FROM statii WHERE id = " . $_GET['id'];

$article = $link->query($query);

$row = mysqli_fetch_assoc($article);

echo '<h1>'. $row['title'] . '</h1>';

echo '<p>' . $row['shortdescription'];

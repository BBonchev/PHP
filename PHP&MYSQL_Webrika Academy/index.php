<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$query = "INSERT INTO statii (`type`, `title`, `shortdescription`, `location`, `publisher`, `date`) VALUES ('zabavno123', 'smeshno', 'story', 'Denmark', 'H. C. Andersen', '15.5.2014')";

echo $query;
//$link->query($query);
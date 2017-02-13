<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$query = "SELECT * FROM statii";

$articles = $link->query($query);

$statii = [];
while($row = mysqli_fetch_assoc($articles)) {
    $statii[] = $row;
}

foreach($statii as $k => $v) {
    echo '<p>' . $v['title'] . '</p>';
    echo '<p>' . $v['type'] . '</p>';
    echo '<p>' . $v['shortdescription'] . '</p>';
    echo '<p>' . $v['date'] . '</p>';
    echo '<a href="article.php?id=' . $v['id'] . '">See more</a>';
    echo '<a href="edit.php?id=' . $v['id'] . '">Edit</a>';
    echo '<hr>';
}

<?php

$link = mysqli_connect('127.0.0.1', 'root', '', 'webrika');

$query = "SELECT * FROM statii WHERE id = " . $_GET['id'];

$article = $link->query($query);

$row = mysqli_fetch_assoc($article);

?>
<html>
    <head>

    </head>
    <body>

        <form method="POST" action="update.php">
            <span>Title:</span><input type="text" name="title" value="<?php echo $row['title'];?>" /></br>
            <span>Type:</span><input type="text" name="type" value="<?php echo $row['type'];?>" /></br>
            <span>Locaiton:</span><input type="text" name="location" value="<?php echo $row['location'];?>" /></br>
            <span>Publisher:</span><input type="text" name="publisher" value="<?php echo $row['publisher'];?>" /></br>
            <span>Date:</span><input type="text" name="date" value="<?php echo $row['date'];?>" /></br>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
            <input type="submit" value="Go"/>
        </form>
    </body>
</html>

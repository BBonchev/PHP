<html>
    <head>
        <h1>Statii</h1>
    </head>
    <body>
        <form method="post" action="my.php">
            <span>Title:</span><input type="text" name="text"></br>
            <span>Type:</span>
            <select name="type">
                <option value="comedy">Comedy</option>
                <option value="drama">Drama</option>
                <option value="action">Action</option>
                <option value="adventure">Adventure</option>
            </select></br>
            <span>Short Description:</span>
            <select name="shortdescription">
                <option value="funny">Funny</option>
                <option value="sad">Sad</option>
                <option value="interesting">Interesting</option>
            </select></br>
            <span>Location:</span><input type="text" name="city"></br>
            <span>Publisher:</span><input type="text" name="publisher"></br>
            <span>Date:</span><input type="text" name="date"></br>
            <input type="submit" value="Go">
        </form>
    </body>
</html>
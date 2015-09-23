<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ajrskelton</title>
    </head>
    <body>
        <?php
            echo "<h1>Database info:</h1>";
            echo "<p>Server: $server</p>";
            echo "<p>Username: $username</p>";
            echo "<p>Password: $pasword</p>";
            echo "<p>DB: $db</p>";
        ?>
    </body>
</html>
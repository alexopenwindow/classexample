<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $port = $url["port"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
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
            echo "<p>Port: $port</p>";
            echo "<p>Username: $username</p>";
            echo "<p>Password: $password</p>";
            echo "<p>DB: $db</p>";
            echo "<hr>";
            
            $query = "SELECT * FROM Messages;"
            
            $result = $conn->query($query);
            
            while ($row = result->fetch_assoc())
            {
                echo "<p>" . $row['text'] . "</p>";
            }
        ?>
    </body>
</html>
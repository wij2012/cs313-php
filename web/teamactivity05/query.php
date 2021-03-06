<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database scriptures</title>
</head>
<body>
    <h1>Scripture Resources</h1>

    <?php
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);
    
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    foreach ($db->query('SELECT * FROM scripture') as $row)
    {
        echo '<div><b>' . $row['book'] . " " . $row['chapter'] . ':' . $row['verse'] . '</b> </div>';
        echo ' - ' . $row['text']; 
        echo '<br/>';
    }
    ?>

    <form method="POST" action="search.php">
        <input type="text" name="search"> 
        <input type="submit">
    </form>

</body>
</html>
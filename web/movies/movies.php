<?php
    try{
     $dbUrl = getenv('DATABASE_URL');

     $dbopts = parse_url($dbUrl);
     
     $dbHost = $dbopts["host"];
     $dbPort = $dbopts["port"];
     $dbUser = $dbopts["user"];
     $dbPassword = $dbopts["pass"];
     $dbName = ltrim($dbopts["path"],'/');
     
     $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
     
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $ex){
        echo 'Error!' . $ex->getMessage();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
    <?php
        $user_rating = $_GET["rating"];
        
        $query = "SELECT * FROM movies m INNER JOIN ratings r ON m.rating_id = r.id WHERE r.code = ':rating';";
        $statement = $db->prepare($query);
        $statement.bindvalue(":rating", $user_rating, PDO::PARAM_STR);

        foreach($statement->fetchall(PDO::FETCH_ASSOC) as $movie){
            $title = $movie["title"];
            $year = $movie["year"];
            $rating = $movie["code"];
            echo "<li>$title, ($year), $rating </li>";
        }
    ?>
    </ul>

    
</body>
</html>
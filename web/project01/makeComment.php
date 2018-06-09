<?php
    include 'navbar.php';
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
    <link rel="stylesheet" href="chessStyle.css">
    <title>Document</title>
</head>
<body>
<h1>Comment on a match </h1>
<div class="data">
    <?php
    $match_id = $_POST["match_id"];
    $name = $_POST["playerName"];
    $comment = $_POST["comment"];

    if(!empty($match_id)&&!empty($name)&&!empty($comment)){
        //search for given player name in player table
        $query = "SELECT * FROM players 
        WHERE name = :name";
        $statement = $db->prepare($query);
        $statement->bindValue(":name", $name, PDO::PARAM_STR);
        $statement->execute();
        //extract player id from player table
        $player = $statement->fetch();
        $player_id = $player["id"];

        //search for the match by the id
        $query = "SELECT * FROM match 
        WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $match_id, PDO::PARAM_INT);
        $statement->execute();
        //extract match id from match table
        $match = $statement->fetch();
        $match_id = $match["id"];

        //insert statement into the comment table if both ids are not blank strings
        if(!empty($match_id)&&!empty($player_id)){
            $query = "INSERT INTO comments(match_id, commenter, text) VALUES (:match, :commenter, :comment);";
            $statement = $db->prepare($query);
            $statement->bindValue(":match", $match_id, PDO::PARAM_INT);
            $statement->bindValue(":commenter", $player_id, PDO::PARAM_INT);
            $statement->bindValue(":comment", $comment, PDO::PARAM_INT);
            $statement->execute(); 
        }

    }
    ?>

    <form action="makeComment.php" method="post">
    <div>
    NOTICE: You must be a player listed on our website to make a comment on one of our chess matches
    <br> You can see if your name is listed in our database by clicling on the 'See all Records' link
    <br> at the top of the page and selecting Players.
    <br>
    </div>
    <div>Input the match ID Number (See all Records and select Match to check Match ID)</div>
    <input type="text" name="match_id">

    <div>Input your name</div>
    <input type="text" name="playerName">

    <div>Enter your comment here</div>
    <input type="text" name="comment">
    <br>
    <input type="submit">
    </form>

    </div>
</body>
</html>
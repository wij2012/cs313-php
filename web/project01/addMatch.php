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
<h1>Add data for a new/recent Match </h1>
<div class="data">
    <?php
    $player1 = $_POST["player1"];
    $player2 = $_POST["player2"];
    $winner = $_POST["winner"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"]; //need to concat this to be 01 or 04 if the number is less than 10
    $date = $year . "-" . $month . "-" . $day;
    //echo " $player1 - $player2 - $winner - $date";

    if(!empty($player1)&&!empty($player2)&&!empty($winner)&&!empty($year)&&!empty($month)&&!empty($day)){
        //search for given player1 name in player table
        $query = "SELECT * FROM players
        WHERE name = :player1";
        $statement = $db->prepare($query);
        $statement->bindValue(":player1", $player1, PDO::PARAM_STR);
        $statement->execute();
        //extract player id from player table
        $player1 = $statement->fetch();
        $player1_id = $player1["id"];
        echo "player 1 = " . $player1_id;

        //search for given player2 name in player table
        $query = "SELECT * FROM players 
        WHERE name = :player2";
        $statement = $db->prepare($query);
        $statement->bindValue(":player2", $player2, PDO::PARAM_STR);
        $statement->execute();
        //extract player id from player table
        $player2 = $statement->fetch();
        $player2_id = $player2["id"];
        echo "player 2 = " . $player2_id;

        //search for given winner name in player table
        $query = "SELECT * FROM players 
        WHERE name = :winner";
        $statement = $db->prepare($query);
        $statement->bindValue(":winner", $winner, PDO::PARAM_STR);
        $statement->execute();
        //extract player id from player table
        $winner = $statement->fetch();
        $winner_id = $winner["id"];
        echo "Winner = " . $winner_id;

        //insert statement into the match table
        if(!empty($player1_id)&&!empty($player2_id)&&!empty($winner_id)){
            $query = "INSERT INTO match (player1, player2, winner, datePlayed) VALUES (:player1, :player2, :winner, :datePlayed)";
            $statement = $db->prepare($query);
            $statement->bindValue(":player1", $player1_id, PDO::PARAM_INT);
            $statement->bindValue(":player2", $player2_id, PDO::PARAM_INT);
            $statement->bindValue(":winner", $winner_id, PDO::PARAM_INT);
            $statement->bindValue(":datePlayed", $date, PDO::PARAM_STR);
            $statement->execute(); 
        }

    }
    
    ?>

    <form action="addMatch.php" method="post">
    <div>Player 1:</div>
    <input type="text" name="player1">

    <div>Player 2:</div>
    <input type="text" name="player2">

    <div>Match Winner: </div>
    <input type="text" name="winner">

    <div>Date:</div>
    <!--<input type="text" name="date">-->
    Month 
    <br>
    <select  name="month">
        <option value="01"> January </option>
        <option value="02"> February </option>
        <option value="03"> March </option>
        <option value="04"> April </option>
        <option value="05"> May </option>
        <option value="06"> June </option>
        <option value="07"> July </option>
        <option value="08"> August </option>
        <option value="09"> September </option>
        <option value="10"> October </option>
        <option value="11"> November </option>
        <option value="12"> December </option>
    </select>
    Year
    <br>
    <select name="year">
        <option value="2016"> 2016 </option>
        <option value="2017"> 2017 </option>
        <option value="2018"> 2018 </option>
    </select>
    Day (please enter a whole number between 1-31 depending on the month)
    <br>
    <input type="text" name="day">
    <br>
    <input type="submit">
    </form>
</div>
</body>
</html>
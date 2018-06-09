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
    $day = $_POST["day"];
    $date = $year . "-" . $month . "-" . $day;
    echo " $player1 - $player2 - $winner - $date";

    //find player ids goes here
    
    //insert new match goes here

    echo "<table><tr><th>Match ID Number</th> <th> Player 1 </th> <th> Player 2 </th> <th> Winner </th> <th> Date Played </th></tr>";
    foreach ($db->query("SELECT match.id
    , p1.name AS p1N
    , p2.name AS p2N
    , p3.name AS p3N
    , match.date FROM players p1 INNER JOIN match 
    ON p1.id = match.player1
    INNER JOIN players p2 
    ON p2.id = match.player2
    INNER JOIN players p3
    ON p3.id = match.winner;") as $row){
        echo "<tr><td>" . $row["id"] . "</td>";
        echo "<td>" . $row["p1n"] . "</td>";
        echo "<td>" . $row["p2n"] . "</td>";
        echo "<td>" . $row["p3n"] . "</td>";
        echo "<td>" . $row["date"] . "</td></tr>";
    }
    echo "</table> </div>";
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
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
    <title>Chess Games</title>
</head>
<body>
    <h1>Chess Club Game Records</h1>
    <?php
        $table = $_POST["table"];
        if($table == 'players'){
            echo '<div><strong>Players</strong> <br>';
            foreach ($db->query('SELECT * FROM players') as $row)
            {
                echo $row['name'] . ' <br>';
            }
            echo '</div>';
        }
        else if($table == 'matches'){
            echo '<div><strong>Matches</strong> <br>';
            echo '<table><th> Player 1 </th> <th> Player 2 </th> <th> Winner </th> <th> Date Played </th>';
            foreach ($db->query('SELECT * FROM match') as $row)
            {
                echo '<tr>' . $row['player1'] . '</tr>';
                echo '<tr>' . $row['player2'] . '</tr>';
                echo '<tr>' . $row['winner'] . '</tr>';
                echo '<tr>' . $row['date'] . '</tr>';
            }
            echo '</table> </div>';
        }

        else if($table == 'comments'){
            echo '<div><strong>Players</strong> <br>';
            echo '<table><th> Match </th> <th> Commenter </th> <th> Comment </th>';
            foreach ($db->query('SELECT * FROM comments') as $row)
            {
                echo '<tr>' . $row['match_id'] . '</tr>';
                echo '<tr>' . $row['commentor'] . '</tr>';
                echo '<tr>' . $row['text'] . '</tr>';
            }
            echo '</table> </div>';
        }
            
    ?>

    <p>Select a table to display (raw data)</p>
    <form action="chess.php" method="post">
        <select name="table">
            <option value="players"> Players </option>
            <option value="matches"> Matches </option>
            <option value="comments"> Comments </option>
        </select>
        <input type="submit">
    </form>
</body>
</html>
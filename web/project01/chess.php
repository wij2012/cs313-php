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
    <link rel="stylesheet" href="style.css">
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
            echo '<table><tr><th>Match ID Number</th> <th> Player 1 </th> <th> Player 2 </th> <th> Winner </th> <th> Date Played </th></tr>';
            /*foreach ($db->query('SELECT * FROM match;') as $row)
            {
                echo '<tr><td>' . $row['player1'] . '</td>';
                echo '<td>' . $row['player2'] . '</td>';
                echo '<td>' . $row['winner'] . '</td>';
                echo '<td>' . $row['date'] . '</td></tr>';
            }*/
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
                echo "<td>" . $row["p1.name"] . "</td>";
                echo "<td>" . $row["p2.name"] . "</td>";
                echo "<td>" . $row["p3.name"] . "</td>";
                echo "<td>" . $row["date"] . "</td></tr>";
            }
            echo "</table> </div>";
        }

        else if($table == 'comments'){
            echo '<div><strong>Comments</strong> <br>';
            echo '<table><tr><th> Match </th> <th> Commenter </th> <th> Comment </th></tr>';
            /*foreach ($db->query('SELECT * FROM comments') as $row)
            {
                echo '<tr><td>' . $row['match_id'] . '</td>';
                echo '<td>' . $row['commenter'] . '</td>';
                echo '<td>' . $row['text'] . '/<td></tr>';
            }*/
            foreach ($db->query('SELECT players.name
            , comments.match_id
            , comments.text FROM players INNER JOIN comments
            ON comments.commenter = players.id;') as $row){
                echo '<tr><td>' . $row['match_id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['text'] . '</td></tr>';
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
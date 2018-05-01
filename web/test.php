<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> This is a php page </p>

    <?php
    for($i = 0; $i < 10; $i++){
        $id = ($i + 1);
        if($id % 2 == 0)
            echo '<div id="$id" color="red"> Div $id </div>';
        else
            echo '<div id="$id"> div $id </div>';    
    }
    ?>
</body>
</html>


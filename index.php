<?php 
    
    require_once __DIR__ . '/database.php';

    $sql = "SELECT * FROM stanze";
    $result = $conn->query($sql);

    $rooms = [];
    if ($result && $result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // var_dump($row);
            //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
            $rooms[] = $row;
        }
    }

    //var_dump($rooms)

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Lista stanze</h1>

    <ol>
        <?php foreach($rooms as $room) { ?>
        <?php var_dump($room); ?>
        
        <li>
            Numero stanza: <?php  ?> <br>
            Piano: <?php  ?> <br>
            <a href="room-info.php?id=<?php echo $room['id'];?>">Dettagli stanza</a>
        </li>
        <?php } ?>

    </ul>

</body>
</html>
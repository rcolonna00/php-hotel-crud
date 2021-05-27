<?php 
    require_once __DIR__ . '/database.php';

    $room_id = $_GET['id'];
    
    $sql = "SELECT * FROM stanze WHERE `id` = " . $room_id . ";";
    $result = $conn->query($sql);
    
    $room = [];
    if ($result && $result->num_rows > 0) {

        $row = $result->fetch_assoc();
    }
    var_dump($room);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagi stanza</title>
</head>
<body>

    <h1>Dettagi stanza numero <?php echo $room['room_number'] ?> </h1>

    <ul>
        <li>
        
        </li>
    </ul>

</body>
</html>

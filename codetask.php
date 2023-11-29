<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>welcome</h2>
    <?php
    $connection = pg_connect("host=localhost dbname= brokerDetails user=postgres password=vassu4266");
    if(!$connection){
        echo "Anerror.<br>";
        exit;
    }
    $result = pg_query($connection,"SELECT * FROM brokerDetails");
    if(!$result) {
        echo "an error .<br>";
        exit;
    }
    ?>

    <table>
        <tr>
            <th>BrokerName</th>
            <th>BrokerContact</th>
            <th>BrokerEmail</th>
            <th>BrokerExperience</th>
        </tr>
       <?php
        while($row = pg_fetch_assoc($result)) {
            echo "
            <tr>
            <th>BrokerName</th>
            <th>BrokerContact</th>
            <th>BrokerEmail</th>
            <th>BrokerExperience</th>
        </tr> ";
        }
        ?>
    </table>
</body>
</html>
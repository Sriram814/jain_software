<?php
$host = "localhost"; // e.g., localhost
$port = "5432"; // default is usually 5432
$dbname = "brokerDetails";
$user = "postgres";
$password = "vassu4266";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
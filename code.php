<?php
include("backend.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["brokerName"];
    $contact = $_POST["brokerContact"];
    $email = $_POST["brokerEmail"];
    $experience = $_POST["brokerExperience"];

    try {
        $stmt = $conn->prepare("INSERT INTO brokers (name, contact, email, experience) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $contact);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $experience);
        $stmt->execute();

        echo "Broker added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
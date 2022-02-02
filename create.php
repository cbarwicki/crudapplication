<?php
    include 'db.php';
    $name = $_POST["name"];
    $location = $_POST["location"];
    $sql = "INSERT INTO people (name_, location_) VALUES ('$name', '$location')";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>
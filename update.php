<?php
    include 'db.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $sql = "UPDATE people SET name_='$name', location_='$location' WHERE id=$id";
    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>
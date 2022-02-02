<?php
    include 'db.php';
    $sql = "SELECT * FROM  people";
    $result = $conn->query($sql);
    if (!isset($_GET['id'])) {
        $_GET['id'] = -1;
    }
    while($row = $result->fetch_assoc()) {
        if ($row['id'] == $_GET['id']){
            echo '<form action="update.php" method="POST">';
            echo '<td><input type="text" name="name" value="' . $row['name_'] . '"></td>';
            echo '<td><input type="text" name="location" value="' . $row['location_'] . '"></td>';
            echo '<td><button type="submit" class="button1">Save</button></td>';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '</form>';
        }
        else {
            echo "<tr>";
            echo "<td>" . $row['name_'] . "</td>";
            echo "<td>" . $row['location_'] . "</td>";
            echo '<td><a class="button1" href="index.php?id=' . $row['id'] . '" role="button">Edit</a><a class="button2" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
            echo "</tr>";
        }
    }
    $conn->close();
?>
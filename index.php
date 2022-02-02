<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Crud</title>
</head>
<body>
    
    <table>
        <tr>
          <th>Name</th>
          <th>Location</th>
          <th>Action</th>
        </tr>

        <!-- dynamically creates a table using date in database -->
        <?php include 'read.php'; ?>

        <!-- <tr>
          <td>Chris</td>
          <td>New York</td>
          <td><button type="button" class="button1">Edit</button><button type="button" class="button2">Delete</button></td>
        </tr> -->
    </table>

    <br>

    <form action="create.php" method="POST">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name"><br>
        <label for="location">Location</label><br>
        <input type="text" id="location" name="location" placeholder="Enter your location"><br><br>
        <input type="submit" class="button1" value="Update">
    </form>
      
</body>
</html>
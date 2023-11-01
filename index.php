<?php
    //including the database connection file
    include_once("dbConnection/mysqlconfig_connection.php");
    //including the fetch file
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a><br/><br/>
    <table width="100%" style="border: 1px solid black;">
    <tr>
        <th>ID</th>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th>Action</th>
    </tr>
    <?php 
        while ($res = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td align='center'>".$res["subject_id"]."</td>";
            echo "<td align='center'>".$res["subject_code"]."</td>";
            echo "<td align='center'>".$res["subject_name"]."</td>";
            echo "<td align='center'>
                      <a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                      <a href=\"functions/delete.php?id=$res[subject_id]\"
                      onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                  </td>";
        }
    ?>
</table>

</body>
</html>
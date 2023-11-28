<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Syllabus</title>
</head>
<body>
    <h1>Add Syllabus</h1>
    <a href="../index.php">Home</a>
    <br/><br/>
    <form action="../functions/addsyllabus.php" method="post" name="form1">
        <table width="25%" style="border: 1px solid black;">
            <tr>
                <td>Syllabus Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            
            <tr>
                <td>Syllabus Author</td>
                <td><input type="text" name="author"></td>
            </tr>

            <tr>
                <td>Subject</td>
                <td>
                    <select name="subject">
                        <?php 
                        include_once("../dbConnection/mysqlconfig_connection.php");
                        $query = "SELECT * FROM tblsubjects"; // Fix the SQL query
                        $result = mysqli_query($dbc, $query); 
                        while($res = mysqli_fetch_array($result)) {
                            echo "<option value=\"" . $res['subject_id'] . "\">"; // Fix the variable name
                            echo $res['subject_name']; // Fix the variable name
                            echo "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>

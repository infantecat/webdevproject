<?php 
    //including database connection file
    include_once("../dbConnection/mysqlconfig_connect.php");
    //getting id of the data from url
    $id = $_GET['id'];
    //deleting the row from table
    mysqli_query($dbc, "DELETE FROM tblschedule WHERE subject_id=$id");
    //redirecting to the display (index.php  in our case)
    header("Location:../index.php");
?>
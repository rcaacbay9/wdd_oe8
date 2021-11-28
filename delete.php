<?php
require_once('conn.php');

$id = $_GET['id']; // get id through query string

$query = "DELETE FROM users_tbl where id = '$id'";

$del = mysqli_query($db,$query); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:main.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
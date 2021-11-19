<html>
    <head>
        <title>OE6_WDD_Caacbay</title>
        <style>
            body {
                background-color: whitesmoke;
            }
            input {
                width: 40%;
                height: 5%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 15px 8px 15px;
                margin: 10px 0px 15px 0px;
                box-shadow: 1px 1px 2px 1px grey;
               
            }
            
        </style>

</head>
<body>
    <center>
<form action ="" method = "POST">
<input type = "text" name = "lname" placeholder = "Enter Lastname"/> <br>
<input type = "submit" name = "search" value = "Search your Data"/>
</form>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'it15_database');

if (isset($_POST['search'])){

    $lname = $_POST['lname'];

    $query = "SELECT * FROM users_tbl where LastName = '$lname' ";
    $query_run = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($query_run)) 
    {
        ?>
            <form action= "" method = "POST">
            <input type = "hidden" name = "id"  value = "<?php echo "strong".$row['id']?>"/> <br>
            <input type = "text" name = "fname"  value = "First Name: <?php echo   $row['FirstName'] ?>"/><br>
            <input type = "text" name = "email"  value = "Address: <?php echo $row['Address']?>"/><br>
            <input type = "text" name = "fname"  value = "Email: <?php echo $row['Email']?>"/><br>
            <input type = "text" name = "fname"  value = "Birthday: <?php echo $row['BirthDate']?>"/><br>
            <input type = "text" name = "fname"  value = "Register Date: <?php echo $row['regs_date']?>"/><br>
    </div>
    </form>
    <?php
    }
}
?>

</body>
</html>
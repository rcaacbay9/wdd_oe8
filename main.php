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
<input type = "text" name = "id" placeholder = "Enter the ID"/> <br>
<input type = "submit" name = "search" value = "Search your Data"/>
</form>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'it15_database');

if (isset($_POST['search'])){

    $id = $_POST['id'];

    $query = "SELECT * FROM users_tbl where id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($query_run)) 
    {
        ?>
            <form action= "" method = "POST">
            <input type = "hidden" name = "id"  value = "<?php echo $row['id']?>"/> <br>
            <input type = "text" name = "fname"  value = " <?php echo $row['FirstName'] ?>"/><br>
            <input type = "text" name = "lname"  value = " <?php echo $row['LastName'] ?>"/><br>
            <input type = "text" name = "address"  value = " <?php echo $row['Address']?>"/><br>
            <input type = "text" name = "email"  value = " <?php echo $row['Email']?>"/><br>
            <input type = "text" name = "bday"  value = " <?php echo $row['BirthDate']?>"/><br>
            <input type = "text" name = "regd"  value = " <?php echo $row['regs_date']?>"/><br>
            <input type = "submit" name = "update" value = "Update your Data"/><br>
            <input type = "submit" name = "delete" value = "Delete"/>
    </form>
    <?php
    }
}
?>
</center>
</body>
</html>

<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'it15_database');

    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $bday = $_POST['bday'];
        $regd = $_POST['regd'];
        
        $query = "UPDATE users_tbl SET FirstName = '$_POST[fname]',LastName = '$_POST[lname]',Address = '$_POST[address]', Email = '$_POST[email]',birthdate = '$_POST[bday]',regs_date = '$_POST[regd]' where id = '$_POST[id]'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run){
            echo '<script>alert("The data is updated!!") </script>';
        }
        else {
            echo '<script>alert("Error! Data didnt update") </script>';
        }
    }

?>
<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'it15_database');

    if(isset($_POST['delete'])){

        $query = "DELETE FROM users_tbl where id = '$_POST[id]'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run){
            echo '<script>alert("Data is deleted!") </script>';
        }
        else {
            echo '<script>alert("Error! Cant delete the data") </script>';
        }
    }

?>
<html>
    <head>
        <title>OE8_WDD_Caacbay</title>
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
            .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
}
        </style>

</head>
<body>
    <center>
<H1>Outcomes Evaluation 8<br></H1>
<H2>PHP Delete and display all fields except password with MySQL. 
    <br>
<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Registration Date</th>
  </tr>
    <body>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'it15_database');
$query = "SELECT * FROM users_tbl";
$query_run = mysqli_query($connection, $query);

if (mysqli_num_rows($query_run)>0){
    foreach($query_run as $row){
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['FirstName']; ?></td>
            <td><?= $row['LastName']; ?></td>
            <td><?= $row['Email']; ?></td>
            <td><?= $row['Address']; ?></td>
            <td><?= $row['regs_date']; ?></td>
            <td><a href = 'delete.php?id=<?=$row['id'];?>'> Delete</td>
        </tr>
        
        <?php
        
    }
}

?>
</center>
</body>
</html>


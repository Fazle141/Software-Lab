<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
        if(!isset($_SESSION))
        {
            session_start();
        }
        //echo $_SESSION['user'];
$username=$_SESSION['user'];
//echo $username;
include "db.php";



$sql = "SELECT  `Name`, `p_id`, `Contact`, `Weight`, `Blood_Group`, `username`, `bookingb_id` FROM `patient` WHERE  username='$username' ";
//echo $sql;
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        echo "<table><tr><th>ID</th><th>Name</th><th>Username</th><th>Contact</th><th>Blood Group</th><th>Weight</th></tr>";
    while($row = $result->fetch_assoc()) {
         echo "<tr>
         <td>".$row["p_id"]."</td>
         <td>".$row["Name"]."</td>
         <td>".$row["username"]."</td>
         <td>".$row["Contact"]."</td>
         <td>".$row["Blood_Group"]."</td>
         <td>".$row["Weight"]."</td>
         </tr>";
         $_SESSION['pid']=$row["p_id"];

    }
} else {
    echo "0 results";
}
$conn2->close();
?>
<form action='logout.php'>
<input type="submit" name="Logout" style="background-color:white;" value="Logout">
</form>
<form action='' method='post'>
<?php 
    include 'drop.php';
    if(isset($choosenCategory)){
        include 'doctorlist.php';
    }
?>
</form>

</html>
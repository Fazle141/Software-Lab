<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
if(!isset($_SESSION)){
    session_start();
    }

$username=$_SESSION['user'];
//echo $username;
include 'db.php';

//include "db.php";
$query=mysqli_query($conn2,"select d_id from doctor WHERE username='$username'");
//echo "2nd query";
//echo $query1;
$result1 = mysqli_fetch_row($query);
$did = $result1[0];
//echo $did;

$sql = "SELECT p.Name, p.Contact, p.Blood_Group FROM `patient` p JOIN booking b WHERE b.Patientp_id=p.p_id && b.Doctord_id='$did'";
//echo $sql;
//$sql = "SELECT `name`, `category`, `shedule`, `fee`, `location`,  FROM `patient` WHERE  username='$username' ";
$result = $conn2->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        echo "<table><tr><th>Name</th><th>Contact</th><th>Blood Group</th></tr>";
    while($row = $result->fetch_assoc()) {
         echo "<tr>
         <td>".$row["Name"]."</td>
         <td>".$row["Contact"]."</td>
         <td>".$row["Blood_Group"]."</td>
         </tr>";

    }
} else {
    echo "0 results";
}
$conn2->close();
?>
<form action='logout.php'>
<input type="submit" name="Logout" style="background-color:white;" value="Logout">
</form>
</html>
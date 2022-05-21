<?php
        if(!isset($_SESSION))
        {
            session_start();
        }
?>
<?php

        
    //echo $_POST['select'];
    include "db.php";
    if(isset($_POST['select'])){
        $selected = $_POST['select'];
        $query1=mysqli_query($conn2,"select c_id from category WHERE c_id='$selected'");
        //echo "2nd query";
        //echo $query1;
        $result = mysqli_fetch_row($query1);
        $choosenCategory = $result[0];
        //echo $choosenCategory;
        $_SESSION['cat']= $choosenCategory;


    }

    $query=mysqli_query($conn2,"select DISTINCT c_id,c_name from category WHERE 1");
    echo ' <form method="POST" action="">';
    echo "<select name='select'>";
    echo "<option value=''></option>";
    while ($row = mysqli_fetch_array($query)) {
    echo "<option value='" . $row['c_id'] ."'>" . $row['c_name'] ."</option>";
    }
echo " </select>";
echo "  ";
if(isset($_SESSION['user'])){
    echo '<input type="submit"  class="btn btn-primary btn-sm" value="Submit" style="padding: 2px 16px; font-size: 15px;"/>';
}
echo '</form>';


?>

<?php
    if(isset($_SESSION)){
        session_destroy();
    }
    include "pdo.php";

    if(isset($_POST["submit"])){
        if(isset($_POST['password'])){
                    $name = $_POST["name"];
        $password = $_POST["password"];
        $username = $_POST["username"];
        $contact = $_POST["contact"];
        $blood_group = $_POST["blood_group"];
        $weight = $_POST["weight"];
        
        $userquery= "insert into patient(`Name`, `p_id`, `Age`, `Contact`, `Weight`, `Blood_Group`, `username`, `password`, `bookingb_id`)
                                values('$name','','','$contact','$weight','$blood_group', '$username','$password','')";
            //echo $userquery;
        $returnvalue = $conn->prepare($userquery);
        
        $result = $returnvalue->execute();
        
        if($result){
            echo "Successfully registered";
        }
        }
    }
?>
<html>
<head>
    
<title>insert from data in mysql database using php</title>
    <style type="text/css">
        table {front font-size: 30px; margin-left: 25%;margin-top:-40%} 
        input,textarea{front-size :30px;}
    </style>
</head>
<body>

<form action="verifylogin.php"  method="post">
			Patient Username: <input type="text" placeholder="User Name Here" id="uname" name="uname">
			<br/>
			Patient Password: <input type="password" id="pass" name="pass">
			<br/>
			<input type="submit" value="Log In" name="submit">
		</form>

<br/><br/><br/><br/>
    <form action="" method ="post">

    <table>
        <tr>
            <th></th>
            <th><h2>For New Patient Registration</h2></th>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input autocomplete="off" type ="text" name ="name"></td>
        </tr>
        <tr>
            <td> User Name:</td>
            <td><input autocomplete="off" type ="text" name ="username"></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
            <td><input autocomplete="off" type ="text" name ="contact"></td>
        </tr>
        <tr>
            <td> Bloodgroup:</td>
            <td><input autocomplete="off" type ="text" name ="blood_group"></td>
        </tr>
        <tr>
            <td> Weight:</td>
            <td><input autocomplete="off" type ="number" name ="weight"></td>
        </tr>
	<tr>
            <td> Password:</td>
            <td><input type ="password" name ="password"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><inp</td>
        </tr>
<tr>
      <input type="submit" name="submit" style="background-color:white;
margin-left:25%;margin-right:auto;display:block;margin-top:20%;margin-bottom:-20%" value="Patient Sign Up">

</tr>        
 </table> </form>
    
 </body>
</html>

<html>
<head>
    
<title>insert from data in mysql database using php</title>
    <style type="text/css">
        table {front font-size: 30px; margin-left: 15%;margin-top:-10%} 
        input,textarea{front-size :30px;}
    </style>
</head>
<body>

<form action="doctorlogin.php"  method="post">
			Doctor Username: <input type="text" placeholder="User Name Here" id="uname" name="uname">
			<br/>
			Doctor Password: <input type="password" id="pass" name="pass">
			<br/>
			<input type="submit" value="Log In" name="submit">
		</form>

<br/><br/><br/><br/>
    <form action="" method ="post">

    <table>
        <tr>
            <th></th>
            <th><h2>For New Doctor Registration</h2></th>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input autocomplete="off" type ="text" name ="name"></td>
        </tr>
		<tr>
            <td> Shedule:</td>
            <td><input autocomplete="off" type ="date" name ="shedule"></td>
        </tr>
        <tr>
            <td>Fee:</td>
            <td><input autocomplete="off" type ="text" name ="fee"></td>
        </tr>
        <tr>
            <td> Location:</td>
            <td><input autocomplete="off" type ="text" name ="location"></td>
        </tr>
        <tr>
            <td> Category:</td>
            <td><?php include "drop.php";?>   </td>
        </tr>
		<tr>

      <input type="submit" name="submit" style="background-color:white;
margin-left:35%;margin-right:auto;display:block;margin-top:20%;margin-bottom:-25%" value="Doctor Sign Up">
   

</tr>              
        
    </table> </form>
    
 </body>
</html>

<?php
    include "pdo.php";

    if(isset($_POST["submit"])){
        if(isset($_POST['fee'])){
            
        $name = $_POST["name"];
	    $shedule = $_POST["shedule"];
        $contact = $_POST["fee"];
        $location = $_POST["location"];
        $fee = $_POST['fee'];
        
        $userquery= "insert into doctor(`Name`, `d_id`, `Shedule`, `Fee`, `location`, `Categoryc_id`, `password`, `username`) 
                                values('$name','','$shedule','$fee','$location','$choosenCategory','','')";
            //echo $userquery;
        
        $returnvalue = $conn->prepare($userquery);
        
        $result = $returnvalue->execute();
        
        if($result){
            echo "Successfully registered";
        }
        }

    }
?>
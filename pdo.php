<?php
try{
	///trying to establish connection with the MySQL database server
        $conn = new PDO("mysql:host=localhost:3306;dbname=medichelper;","root","");
        ///setting errormode so that when error occurs it will give us an exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $ex){
          echo  '<script>
                window.alert("Database not connected");
            </script>';
    }
?>
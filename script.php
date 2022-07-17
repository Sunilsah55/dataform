<?php
     $servername="localhost";
     $username="root";
     $dbpassword="";
     $dbname="form";
     $conn=mysqli_connect($servername, $username, $dbpassword, $dbname);

        if(!$conn){
             echo"connection failure";

        }
           // echo"connection established";
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $a = $b = $c = $d = '';
            $a=$_POST['name'];
            $b=$_POST['email'];
            $c=$_POST['subject'];
            $d=$_POST['message'];

            $sql = "INSERT INTO formdata (Name,Email,Subject,Message) VALUES ('$a','$b','$c','$d')";

            mysqli_query($conn, $sql) or die ("query fieled");
            echo '<script> alert("data submitted")</script>';
            header("Refresh:1; url=index.php");
            mysqli_close($conn);


        }

         ?>
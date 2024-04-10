<?php include 'studentheader.php';
 session_start(); 
?> 

<div id="main-content">
    <h2>Update Record</h2>
     <?php
                $conn =mysqli_connect("localhost","root","","test") or die("connection failed");

                $stu_id=$_SESSION['id'];
                $sql="DELETE FROM student WHERE pid={$stu_id}";
               $result= mysqli_query($conn,$sql) or die("query unsuccessful");
               include '../logout.php'; 
               header("Location:http://localhost/cms/index.php");
    
            ?> 
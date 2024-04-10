<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Student</h2>
     <?php
                $conn =mysqli_connect("localhost","root","","test") or die("connection failed");

                $stu_id=$_GET['id'];
                $sql="DELETE FROM student WHERE pid={$stu_id}";
               $result= mysqli_query($conn,$sql) or die("query unsuccessful");
               header("Location:http://localhost/cms/admin/adminhome.php");
             
            ?> 
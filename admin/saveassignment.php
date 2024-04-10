<?php
echo$a_name=$_POST['aname'];
echo$a_date=$_POST['adate'];
echo$a_teacher=$_POST['ateacher'];
echo$a_description=$_POST['adescription'];
$conn =mysqli_connect("localhost","root","","test") or die("connection failed");


 $sql="INSERT INTO assignments(aname,submissiondate,teachername,adescription) VALUES('{$a_name}','{$a_date}','{$a_teacher}','{$a_description}')";
 $result= mysqli_query($conn,$sql) or die("query unsuccessful");
 header("Location:http://localhost/cms/admin/adminhome.php");
mysqli_close($conn);
?>
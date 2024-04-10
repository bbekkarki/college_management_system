<?php
echo$stu_name=$_POST['pname'];
echo$stu_address=$_POST['paddress'];
echo$stu_class=$_POST['class'];
echo$stu_phone=$_POST['pphone'];
$conn =mysqli_connect("localhost","root","","test") or die("connection failed");
 $sql="INSERT INTO student(pname,paddress,pfaculty,pphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result= mysqli_query($conn,$sql) or die("query unsuccessful");
header("Location:http://localhost/cms/admin/adminhome.php");
mysqli_close($conn);
?>
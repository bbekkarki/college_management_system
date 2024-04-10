<?php 
echo $stu_id=$_POST['pid'];
echo $stu_name=$_POST['pname'];
echo $stu_address=$_POST['paddress'];
echo $stu_class=$_POST['pfaculty'];
echo $stu_phone=$_POST['pphone'];
$conn =mysqli_connect("localhost","root","","test") or die("connection failed");
 $sql1="UPDATE student SET pname='{$stu_name}', paddress='{$stu_address}', pfaculty='{$stu_class}', pphone='{$stu_phone}' WHERE pid={$stu_id}";

 echo"UPDATE student SET pname='{$stu_name}', paddress='{$stu_address}', pfaculty='{$stu_class}', pphone='{$stu_phone}' WHERE pid={$stu_id}";

$result= mysqli_query($conn,$sql1) or die("query unsuccessful");
// header("Location:http://localhost/cms/studenthome.php");
header("Location:studenthome.php?id=".$stu_id);
mysqli_close($conn);
?>

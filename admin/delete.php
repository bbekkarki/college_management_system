<?php include 'header.php'; ?>


<div id="main-content">
<div class="data">
    <h2>Delete Student</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="pid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <?php
    if(isset($_POST['deletebtn'])){
        $conn =mysqli_connect("localhost","root","","test") or die("connection failed");
             
                $stu_id=$_POST['pid'];
                echo  $stu_id;
              
                $sql="DELETE FROM student WHERE pid={$stu_id}";
                echo  $sql;
               $result= mysqli_query($conn,$sql) or die("query unsuccessful");
               header("Location:http://localhost/cms/admin/adminhome.php");
    }
    ?>
</div>
</div>
</div>
</body>
</html>

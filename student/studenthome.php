<?php include 'studentheader.php';
  session_start();
?>

<div id="main-content">
<div class="data">
    <h2>Your Information</h2>
     <?php
                $conn =mysqli_connect("localhost","root","","test") or die("connection failed");

                $stu_id=$_SESSION['id'];
                $sql="SELECT * FROM student WHERE pid={$stu_id}";
               $result= mysqli_query($conn,$sql) or die("query unsuccessful");

               if(mysqli_num_rows($result)>0){
             while($row=mysqli_fetch_assoc($result)){

             
            ?> 
    <form class="post-form" action="studentupdatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="pid" value="<?php echo $row['pid'];?>"/>
          <input type="text" name="pname" value="<?php echo $row['pname'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="paddress" value="<?php echo $row['paddress'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

          <?php
            $sql1="SELECT * FROM faculty";
            $result1= mysqli_query($conn,$sql1) or die("query unsuccessful");
            if(mysqli_num_rows($result1)>0){
                echo '<select name="pfaculty">';
            while($row1 = mysqli_fetch_assoc($result1)){
                if($row['pfaculty']==$row1['did']){
                    $select="selected";
                }else{
                    $select=""; 

                }
              echo"<option {$select} value='{$row1['did']}'>{$row1['dname']}</option>";
            }
         echo"</select>";
            }
                
          ?>
          
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="pphone" value="<?php echo $row['pphone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
         }
         }
    ?>
</div>
</div>
</div>
</body>
</html>

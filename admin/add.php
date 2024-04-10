<?php include 'header.php'; ?>
<div id="main-content">
<div class="data">
    <h2>Add New Student</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="pname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="paddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>

            <?php
                $conn =mysqli_connect("localhost","root","","test") or die("connection failed");
                $sql="SELECT * FROM faculty";
               $result= mysqli_query($conn,$sql) or die("query unsuccessful");

               while($row= mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $row['did'];?>"><?php echo $row['dname'];?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="pphone" />
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>   
</div>
</div>
</body>
</html>

<?php
include 'header.php';
?>
<div id="main-content">
    <div class="data">
    <h2>Assignments</h2>
    <?php
    $conn =mysqli_connect("localhost","root","","test") or die("connection failed");

    $sql="SELECT * FROM assignments" ;
    $result= mysqli_query($conn,$sql) or die("query unsuccessful");
if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>subject</th>
        <th>assignment</th>
        <th>teachername</th>
        <th>submissiondate</th>
        </thead>
        <tbody>
        <?php
        
        while($row = mysqli_fetch_assoc($result)){
        
            ?>
            <tr>
                <td><?php echo $row['assignmentid'];?></td>
                <td><?php echo $row['aname'];?></td>
                <td><?php echo $row['adescription'];?></td>
                <td><?php echo $row['teachername'];?></td>
                <td><?php echo $row['submissiondate'];?></td>
            </tr>
            <?php 
        }?>
           

        </tbody>
    </table>
    <?php
}
?>
</div>
</div>
</div>
</body>
</html>

<?php
include 'header.php';
?>
<div id="main-content">
    <div class="data">
    <h2>All Records</h2>
    <?php
    $conn =mysqli_connect("localhost","root","","test") or die("connection failed");

    $sql="SELECT * FROM student JOIN faculty WHERE student.pfaculty=faculty.did";
    $result= mysqli_query($conn,$sql) or die("query unsuccessful");
if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Faculty</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        
        while($row = mysqli_fetch_assoc($result)){
        
            ?>
            <tr>
                <td><?php echo $row['pid'];?></td>
                <td><?php echo $row['pname'];?></td>
                <td><?php echo $row['paddress'];?></td>
                <td><?php echo $row['dname'];?></td>
                <td><?php echo $row['pphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['pid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['pid'];?>'>Delete</a>
                </td>
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

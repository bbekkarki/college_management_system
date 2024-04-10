<?php include 'header.php'; ?>
<div id="main-content">
<div class="data">
    <h2>Give New asignment</h2>
    <form class="post-form" action="saveassignment.php" method="post">
        <div class="form-group">
            <label>Subject Name</label>
            <input type="text" name="aname" />
        </div>
        <div class="form-group">
            <label>Submission Date</label>
            <input type="date" name="adate" />
        </div>
        <div class="form-group">
            <label>Teacher Name</label>
            <input type="text" name="ateacher" />
        </div>
        <div class="form-group">
            <label>Assignment</label>
            <input type="text" name="adescription" />
        </div>
        <input class="submit" type="submit" value="Save"/>
    </form>
</div>   
</div>
</div>
</body>
</html>

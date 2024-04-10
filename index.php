<!DOCTYPE html>
<div id="wrapper">
<div id="main-content">
<div class="data">
<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

     <form action="admin/adminlogin.php" method="post">

        <h2 style="margin-bottom:0px;">AdminLOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <label style="color:white; fontsize:25px;">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label style="color:white; fontsize:25px;">Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit" class="submit">Login</button>

     </form>

     <form action="student/studentlogin.php" method="post">

<h2 style="margin-bottom:0px;">studentLOGIN</h2>

<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<label style="color:white; fontsize:25px;">User Name</label>
<input type="text" name="uname" placeholder="User Name"><br>

<label style="color:white; fontsize:25px;">Password</label>

<input type="password" name="password" placeholder="Password"><br> 

<button type="submit" class="submit">Login</button>

</form>

</body>
</div>
</div>
</div>
</html>
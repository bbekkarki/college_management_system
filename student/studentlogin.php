<?php 

session_start(); 

include "../db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
        echo"<h2>SELECT * FROM student WHERE pname='$uname' AND pphone='$pass'</h2>";
        $sql = "SELECT * FROM student WHERE pname='$uname' AND pphone='$pass'";
      
        echo" Uncaught TypeError: mysqli_num_rows(): Argument #1 ($result) must be of type mysqli_result, bool";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0){

            $row = mysqli_fetch_assoc($result);

            if ($row['pname'] === $uname && $row['pphone'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['pname'];

                $_SESSION['name'] = $row['pphone'];

                $_SESSION['id'] = $row['pid'];

                header("Location:studenthome.php?id=".$row['pid']);

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
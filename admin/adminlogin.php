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

        header("Location: ../index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: ../index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM adminlogin WHERE user_name='$uname' AND password='$pass'";
        echo" Uncaught TypeError: mysqli_num_rows(): Argument #1 ($result) must be of type mysqli_result, bool";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0){

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: adminhome.php");

                exit();

            }else{

                header("Location: ../index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location:../index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
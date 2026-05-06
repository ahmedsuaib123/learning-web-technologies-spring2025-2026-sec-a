<?php
    session_start();
    require_once('../Model/employeeModel.php');

    if(isset($_POST['register'])){

        $employeeName = $_POST['employeeName'];
        $companyName  = $_POST['companyName'];
        $contactNo    = $_POST['contactNo'];
        $username     = $_POST['username'];
        $password     = $_POST['password'];

        if($employeeName == "" || $companyName == "" || $contactNo == "" || $username == "" || $password == ""){

            echo "All fields required!";

        } else {

            $user = [
                'employeeName' => $employeeName,
                'companyName'  => $companyName,
                'contactNo'    => $contactNo,
                'username'     => $username,
                'password'     => $password
            ];

            $status = addUser($user);

            if($status){

                $_SESSION['status'] = true;

                header("location: ../View/login.php");

            } else {
                echo "Error!";
            }
        }

    } elseif(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){

            echo "Empty username or password!";

        } else {

            $user = [
                'username' => $username,
                'password' => $password
            ];

            $status = login($user);

            if($status){

                $_SESSION['status'] = true;

                header("location: ../View/home.php");

            } else {

                echo "Invalid user!";
            }
        }

    } elseif(isset($_POST['logout'])){

        session_destroy();

        header("location: ../View/login.php");

    } else {

        echo "Invalid Request!";
    }
?>
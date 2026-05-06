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
        }else{
            $_SESSION['user'] = [
                'employeeName' => $employeeName,
                'companyName'  => $companyName,
                'contactNo'    => $contactNo,
                'username'     => $username,
                'password'     => $password
            ];

            header("location: ../View/login.php");
        }
    }elseif(isset($_POST['login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "Empty username or password!";
        }else{

            if(isset($_SESSION['user']) &&
            $username == $_SESSION['user']['username'] &&
            $password == $_SESSION['user']['password']){

                $_SESSION['status'] = true;
                header("location: ../View/home.php");

            }else{
                echo "Invalid user!";
            }
        }
    } elseif(isset($_POST['logout'])){

        session_destroy();
        header("location: ../View/login.php");
    } else{
        echo "Invalid Request!";
    }
?>
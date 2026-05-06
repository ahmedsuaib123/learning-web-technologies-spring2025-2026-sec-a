<?php
    require_once('db.php');

    function login($user){
        $con=getConnection();
        $sql="select * from employee where username='{$user['username']}' and password='{$user['password']}'";
        $result=mysqli_query($con,$sql);

        if((mysqli_num_rows(($result)) == 1)){
            return true;
        } else {
            return false;
        }
    }

    function addUser($user){
        $con=getConnection();
        $sql="insert into employee values (null, '{$user['employeeName']}' companyNnme='{$user['companyName']},contactNo='{$user['contactNo']},username='{$user['username']},password='{$user['password']}')";
        
        if(mysqli_query($con,$sql)){
            return true;
        } else {
            return false;
        }
    }

    function getAllUsers(){
        $con=getConnection();
        $sql="select * from employee";
        $result=mysqli_query($con,$sql);
        $users=[];

        while($row=mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }

        return $users;
    }

    function getUserById($id){
        $con=getConnection();
        $sql="select * from employee where employyeID={$id}";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);

        return $row;
    }

    function updateUser($user){
        $con=getConnection();
        $sql= "update employee set employeeName='{$user['employeeName']}' companyNnme='{$user['companyName']},contactNo='{$user['contactNo']},username='{$user['username']},password='{$user['password']}' where employyeID={$user['id']}";

        if(mysqli_query($con,$sql)){
            return true;
        } else{
            return false;
        }

    }

    function deleteUser($id){
        $con=getConnection();
        $sql="delete from employee where employeeID={$id}";

        if(mysqli_query($con,$sql)){
            return true;
        } else{
            return false;
        }
    }

    function getUserByUsername($username){
        $con=getConnection();
        $sql="select * from employee where username={$username}";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);

        return $row;
    }

   

?>
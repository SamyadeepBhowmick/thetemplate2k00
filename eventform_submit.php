<?php

    session_start();
    $id=$_SESSION["eventid"];
    $block=$_SESSION["blocks"];


    $hostname="localhost";
    $username="root";
    $db_password="123samya";
    $db_name="thetemplate";
    
    $response = array();
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    $name=$_POST['name'];
    $email1=$_POST['email1'];
    $email2=$_POST['email2'];
    $email3=$_POST['email3'];
    $email4=$_POST['email4'];
    if($block==1){
        $sql="INSERT INTO event$id(teamname,email_1)VALUES('$name','$email1')";
    }
    elseif($block==2){
        $sql="INSERT INTO event$id(teamname,email_1,email_2)VALUES('$name','$email1','$email2')";

    }
    elseif($block==3){
        $sql="INSERT INTO event$id(teamname,email_1,email_2,email_3)VALUES('$name','$email1','$email2','$email3')";

    }
    else{
        $sql="INSERT INTO event$id(teamname,email_1,email_2,email_3,email_4)VALUES('$name','$email1','$email2','$email3','$email4')";

    }
    
    if(!mysqli_query($conn,$sql)){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response);
    mysqli_close($conn);
?>
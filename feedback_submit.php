<?php
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
    $email=$_POST['femail'];
    $text=$_POST['ftext'];
    $sql="INSERT INTO feedbacks(email,feed)VALUES('$email','$text')";
    if(!mysqli_query($conn,$sql)){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    $response['success'] = true;
    $response['message'] = "Feedback registered";
    echo json_encode($response);
    mysqli_close($conn);
?>
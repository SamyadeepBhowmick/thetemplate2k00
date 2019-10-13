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

    $sql = "SELECT * FROM event WHERE event_id=1";
    $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
     
        while ($row=mysqli_fetch_array($result)) {
            $name= $row['event_name'];
        }
        echo $name;   	


    mysqli_close($conn);
?>
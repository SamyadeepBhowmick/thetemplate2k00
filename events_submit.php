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
            $event_name= $row['event_name'];
            $event_type= $row['event_type'];
            $event_desc= $row['event_desc'];
            $event_rr= $row['event_rr'];
            $event_time= $row['event_time'];
            $event_fees= $row['event_fees'];
            $event_contact1= $row['event_contact1'];
            $event_contact2= $row['event_contact2'];
        }  	


    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Welcome:Thetemplate2K00</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="css/events_submit.css"/>
	</head>
	<body >

        

        <div class="p-5 bd-highlight text-center border" id="abc">
            

            <div class="p-2 bd-highlight text-center">
                <p>
                    <b>Event Name:</b><?php echo $event_name ?>
                </p>
            </div>
            

            <div class="p-2 bd-highlight text-center">
                <p>
                    <b>Event Type:</b><?php echo $event_type ?>
                </p>
            </div>
            <b>Event Description</b>

            <div class="p-2 bd-highlight text-center">
                <p><?php echo $event_desc ?></p>
            </div>
            <b>Event Rules & Regulations</b>

            <div class="p-2 bd-highlight text-center">
                <p>
                    <?php echo $event_rr ?>
                </p>
            </div>
            <b>Event Time</b>

            <div class="p-2 bd-highlight text-center">
                <?php echo $event_time ?>
            </div>
            <b>Event Registration Fees</b>

            <div class="p-2 bd-highlight text-center">
                <?php echo $event_fees ?>
            </div>
            <b>Event Contact</b>

            <div class="p-2 bd-highlight text-center">
                <p>
                    <?php echo $event_contact1 ?></br>
                    <?php echo $event_contact2 ?>
                </p>
            </div>

        </div>









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<!--<script type="text/javascript" src="js/events.js"></script>-->
	</body>
</html>
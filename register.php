<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Welcome:Thetemplate2K00</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="css/register.css"/>
	</head>
	<body >



	<nav class="navbar navbar-expand-lg navbar-light text-center" style="text-align: center;background-color: #F8F8F8;">
			<a class="navbar-brand" href="welcome.php">TheTemplate2k00</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link lead" href="events.php">About</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link lead" href="events.php">Gallery</a>
					</li>
					<li class="nav-item active lead">
						<a class="nav-link" href="events.php">Events</a>
					</li>
					<li class="nav-item active lead">
						<a class="nav-link" href="events.php">Results</a>
					</li>
					<li class="nav-item active lead">
						<a class="nav-link" href="events.php">Organizers</a>
					</li>
					<li class="nav-item active lead">
						<a class="nav-link" href="events.php">Sponsers</a>
					</li>
				</ul>
			</div>
		</nav>


        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-5 bd-highlight fit-to-screen">
				<p class="text-center"><h1>Registration Form</h1></p>
				<div class="p-2 bd-highlight">
					
				</div>
                <form method="post" action="register_submit.php">
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCollege">College</label>
                        <input type="text" class="form-control" id="exampleInputCollege" placeholder="Enter college" name="college">
					</div>
					<div class="form-group">
                        <label for="exampleInputContact">Contact</label>
                        <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter contact number" name="contact">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>








		<div class="bd-highlight text-white" style="background-color: black;">
			<div class="d-flex flex-row bd-highlight  mb-3">
				<div class="p-4 bd-highlight flex-fill">


					<div class="d-flex flex-column bd-highlight" style="text-align: center;">
						<div class="p-2 bd-highlight" ><h2>Contact Us</h2></div>
						<div class="p-2 bd-highlight" >

						<img src="img/gmail.png" alt="..." style="width:30px;height:30px;">  samyadeep98b@gmail.com
						
						</div>
						<div class="p-2 bd-highlight" >+91 90909 09090</div>
						<div class="p-2 bd-highlight" >+91 09090 90909</div>
					</div>


				</div>
				<div class="p-4 bd-highlight flex-fill">

					<div class="d-flex flex-column bd-highlight ">
						<div class="p-2 bd-highlight" style="margin-left: 20%;"><h2>Feedback</h2></div>
						<form action="/action_page.php">
							<div class="input-group mb-3">
								<input type="text" class="form-control " placeholder="Your Email" id="mail" name="email">
							</div>
							<div class="input-group">
								<textarea class="form-control" aria-label="With textarea" placeholder="Write anything to us"></textarea>
							</div>
							<div class="pt-3">
							<button type="submit" class="btn btn-outline-primary btn-md" style="margin-left: 20%;">Submit</button>
							</div>
						</form>
					</div>

				</div>
			</div>
			

		
			<div class="card-footer" style="text-align: center;">
				<div><h5>Connect With Us</h5></div>
				<a href="#">
					<img src="img/facebook.png" alt="..." style="width:40px;height:40px;border-radius:100%;margin: 10px;">
				</a>
				<a href="#">
					<img src="img/whatsapp.png" alt="..." style="width:40px;height:40px;border-radius:100%;margin: 10px;">
				</a>
				<a href="#">
					<img src="img/instagram.png" alt="..." style="width:40px;height:40px;border-radius:100%;margin: 10px;">
				</a>
				<a href="#">
					<img src="img/youtube.png" alt="..." style="width:40px;height:40px;border-radius:100%;margin: 10px;">
				</a>
			</div>
				

		</div>








        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">@aditrip@thi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc5.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<img src="images/cc3.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-4"> I am Adarsh Tripathi. </h2>
			<p class="py-4">Hardworking and passionate job seeker with strong organizational and technical skills eager to secure good
position and ready to help team achieve company goals.Position that offers professional challenges utilizing
interpersonal skills, excellent time management and problem-solving skills. Detail-oriented team player.Ability to
handle multiple projects simultaneously with a high degree of accuracy. Willingness to take on added
responsibilities to meet team goals.</p>
			<a href="#" class="btn btn-success">Wanna Know Me</a>		
		</div>
	</div>
</section>

<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Our Services </h2>
	</div>
	<div class="mt-5 container-fluid">
		<div class="row">
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/fontend.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Frontend Development</h4>
				    <p class="card-text">A front-end developer builds the front-end portion of websites and web applications—the part users see and interact with. A front-end developer creates websites and applications using web languages such as HTML, CSS, and JavaScript that allow users to access and interact with the site or app.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/images.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Backend Development</h4>
				    <p class="card-text">Back-end development means working on server-side software, which focuses on everything you can't see on a website. Back-end developers ensure the website performs correctly, focusing on databases, back-end logic, application programming interface (APIs), architecture, and servers.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/maintainance.png" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Maintenance</h4>
				    <p class="card-text">Maintenance, otherwise known as technical maintenance, refers to a set of processes and practices which aim to ensure the continuous and efficient operation of machinery, equipment, and other types of assets typically used in business.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
		</div>
	</div>
</section>



<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Technology</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/html.jpg" class="img-fluid">
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/css.png" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/javascript.jpeg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/mysql.png" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/php.png" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/python.png" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/react.png" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/bootstrap.jpeg" class="img-fluid">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/node.png" class="img-fluid">
		</div>
	</div>
</section>


<section class="my-5">
	<div class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
		<div class="form-group">
	    <label for="pwd">Username:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
		
	</div>
</section>

<footer>
	<div class=" bg-dark text-center text-capitalize">
		<h5 class="py-3 text-white">@@aditrip@th!</h5>
	</div>
</footer>



</body>
</html>
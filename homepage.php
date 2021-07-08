<!DOCTYPE html>
<html>
<head>


	<title>Antonio</title>

	<link rel="shortcut icon" type="image/x-icon" href="img/logo.ico" class="icon">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

	<div>

		<header id="home"></header>
		<nav class="navbar navbar-expand-lg navbar-dark py-2 fixed-top" style="background-color: #232223b5">
			<a class="down" href="#home">
				<img src="img/logo.png" class="navbar-brand mx-1 logo"><h1 class="navbar-brand py-2 brand-name"></h1>
			</a>

			<button class="navbar-toggler navbar-toggler-right mx-3" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse black" id="navbarCollapse">
				<ul class="navbar-nav mr-lg-3 ml-auto text-center">
					<li class="nav-item pullDown">
						<a class="nav-link down" href="#home">HOME</a>
					</li>
					<li class="nav-item pullDown">
						<a class="nav-link down" href="#about">ABOUT</a>
					</li>
					<li class="nav-item pullDown">
						<a class="nav-link down" href="#gallery">GALLERY</a>
					</li>
					<li class="nav-item pullDown">
						<a class="nav-link down" href="#contact">CONTACT</a>
					</li>
					<div class="nav_right">
			<ul>
				<li class="nr_li dd_main">
					<img src="img/prof.png" alt="profile_img">

					<div class="dd_menu">
						<div class="dd_left">
							<ul>
								<li><i class="far fa-user"></i></li>
								<li><i class="fas fa-cog"></i></li>
								<li><i class="fas fa-sign-out-alt"></i></li>
							</ul>
						</div>
						<div class="dd_right">
							<ul>
								<li><a href="#">Profile</li>
								<li><a href="#">Settings</li>
								<li><a href="Logout.php">Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
				</ul>
			</div>
		</nav>


		<div>

			<h1 class="profile"> HELLO MY NAME IS</h1>
			<h2 class="name">ANTHONY!</h2>

			<p class="info"> I AM A</p>
			<p class="personal"> PROGRAMMER <br> WEB DEVELOPER</p>
	</div>

	<!-- PROFILE -->
	<div class="container" id="about">
		<div class="col-sm-12 mt-2 about">
			<h2 class="pt-3 display-3 text-light text-center font-weight-normal">About Me</h2>
			<p class="text-light lead text-center px-5 py-5">I am Anthony, a student of Bukidnon State University with the course of Bachelor of Science in Information Technology. I'm currently living at Barangay Casisang, Malaybalay City, Bukidnon</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="pimg1"></div>
				<div class="my-2">

					<!-- GALLERY -->
					<div class="" id="gallery">
						<div class="col-sm-12 gallery">
							<h2 class="py-5 display-3 text-light text-center font-weight-normal">Gallery</h2>
						</div>
					</div>
					<div class="box top-box">
						<a href="#">
							<img src="img/pc.jpg" class="img-fluid image">
							<div class="overlay overlay-left">
								<div class="text">PC<br>BUILDING</div>
							</div>
						</a>
					</div>

					<div class="box top-box float-right">
						<a href="#">
							<img src="img/anton.jpg" class="img-fluid image">
							<div class="overlay overlay-left">
								<div class="text">PROJECTS</div>
							</div>
						</a>
					</div>

					<div class="w-100"></div>

					<div class="box bot-box">
						<a href="#">
							<img src="img/art.jpg" class="img-fluid image">
							<div class="overlay overlay-left">
								<div class="text">ART WORKS</div>
							</div>
						</a>
					</div>

					<div class="box float-right">
						<a href="#">
							<img src="img/web.jpg" class="img-fluid image">
							<div class="overlay overlay-left">
								<div class="text">WEB<br>DESIGNS</div>
							</div>
						</a>
					</div>
					<!-- GALLERY END -->

					<div class="about2">
						<h2 class="py-5 px-7 text-light text-center">"Imagination is the beginning of creation.<br> You imagine what you desire, you will what you imagine and at last, you create what you will."</h2>
						<h1 class="display-4 text-light text-right mx-3 py-3">~George Bernard Shaw</h1>
					</div>

			</div>
		</div>
	</div>
</div>

	<div id="contact">
		<div class="px-5">
			<div class="col-md-12 my-5">
				<img src="img/logo.png" class="logo mx-auto d-block">
				<p class="text-center">
					<a href="https://www.facebook.com/anthony.paglas.14" class="pr-2 connect fb"><i class="fab fa-facebook"></i></a>
					<a href="https://www.instagram.com/its_datuibrahim/" class="pl-2 connect ins"><i class="fab fa-instagram"></i></a>
				</p>
				<p class="lead text-center text-light font-weight-normal">
					+63 936 342 3567 <br>

					<a href="#" class="site">antoniesenpai@gmail.com</a>
				</p>

			</div>
			<div class="text-center navbar-dark"><hr class="new">
				<p class="text-light bottom">&copy; Strawhats<br></p>
			</div>
		</div>
	</div>


<script>
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Pozitif</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="top" data-spy="scroll">

	<header id="home">

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>

						</div>
					</div>

					<div class="col-md-6">
						<div class="top-right">
							<p>Lokacija:<span>Višnjička 23, Beograd</span></p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<a href="index.html" class="navbar-brand">Pozitif</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html">Početna</a></li>
							<li><a href="onama.html">O nama</a></li>
							<li><a href="cenovnik.html">Cenovnik</a></li>
							<li><a href="noviProizvod.html">Administracija</a></li>
						</ul>

					</div>

				</div>
			</nav>
		</div>

	</header>
	<div class="container">
		<h1 class="text-center">Cenovnik</h1>
		<div id="kategorije" class="text-center">

		</div>
		<h3>Sortiranje</h3>
		<div class="row">
			<div class="col-md-6">
				<select class="form-control" id="kolona" onchange="popuniProizvode(sessionStorage.getItem('broj'))">
					<option value="naziv" >Naziv</option>
					<option value="cena" >Cena</option>
				</select>
			</div>
			<div class="col-md-6">
				<select class="form-control" id="order" onchange="popuniProizvode(sessionStorage.getItem('broj'))">
					<option value="asc">Rastuće</option>
					<option value="desc">Opadajuće</option>
				</select>
			</div>
		</div>

		<div id="cenovnik">

		</div>


	</div>



	<div id="bottom-footer" class="hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-left">
						&copy; Pozitif

					</div>
				</div>
			</div>
		</div>
	</div>



	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
	<script src="js/script.js"></script>
	<script>
	function popuniKategorije(){
		$.ajax({
			url: "vratiKategorije.php",
			success: function(html){
				$("#kategorije").html(html);
			}
		})
	}

	</script>
	<script>
	function popuniProizvode(id){
		var kolona = $("#kolona").val();
		var order = $("#order").val();
		$.ajax({
			url: "vratiProizvode.php",
			data: "id="+id+"&kolona="+kolona+"&order="+order,
			success: function(html){
				$("#cenovnik").html(html);
			}
		})
	}

	</script>
	<script>
	popuniKategorije();
	popuniProizvode(0);
	sessionStorage.setItem("broj", "0");
	</script>
	

</body>

</html>

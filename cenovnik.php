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
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
				<div class="col-md-6">
					<div class="top-right">
						
							<h5>Naša lokacija</h5>
							<div class="map-wrapper">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.199810797072!2d20.515337015487585!3d44.81749387909865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7a585f1ef9a5%3A0x98b5fa07fae07c!2zVmnFoW5qacSNa2EsIEJlb2dyYWQ!5e0!3m2!1sen!2srs!4v1643882822597!5m2!1sen!2srs" width="700" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						 
					</div>
				</div>
				
			</div>
		</div>
	</div>



	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
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

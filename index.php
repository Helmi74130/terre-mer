<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="image\EARTH & SEA.png">
	<meta name="description" content="Protection de la nature ainsi que de la biodiversité, action contre le réchauffement climatique. Sensibilation des jeunes aux recyclages et à la protection de la faune et de la flore" />
	<title>Earth and Sea - Accueil</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a501fe9880.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Header Start -->
	<?php require_once 'component/header.php'; ?>
  
  <!-- Main Start -->
	<main>
    <!-- Carousel Start -->
		<div id="carouselDark" class="carousel carousel-light slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselDark" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#carouselDark" data-bs-slide-to="1"></li>
				<li data-bs-target="#carouselDark" data-bs-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active"> <img src="https://condorlivemedia.azureedge.net/cache/5/1/2/2/0/3/5122039f153b6544ac73728ad314e074d9860437.jpg" class="d-block w-100 carousel-img" alt="Tortue marine avec un sac plastique dans la bouche">
					<div class="carousel-caption d-none d-sm-block">
						<h5 class="fs-1 fw-bold text-dark">Biodiversité Marine</h5>
						<p class="fs-3 text-light">Comment la biodiversité marine
							<br> sera-t-elle affectée par la pollution?</p>
					</div>
				</div>
				<div class="carousel-item"> <img src="https://www.associazionepiuinforma.org/wp-content/uploads/2021/01/plastic-free-1.jpg" class="d-block w-100 carousel-img" alt="Bouteille en verre dans la mer">
					<div class="carousel-caption d-none d-sm-block">
						<h5 class="fs-1 fw-bold text-warning">Ecosystèmes marins</h5>
						<p class="fs-3 text-light">Quel est l'impact de la pollution terrestre
							<br> sur la santé des écosystèmes marins?</p>
					</div>
				</div>
				<div class="carousel-item"> <img src="https://condorlivemedia.azureedge.net/cache/3/7/e/9/1/0/37e910b59f08dfcb8a8b7f9b9ddd486dace305ed.jpg" class="d-block w-100 carousel-img" alt="Poisson enfermé dans une bouteille en plastique">
					<div class="carousel-caption d-none d-sm-block">
						<h5 class="fs-2 fw-bold text-light">Est-il trop tard pour agir?</h5>
						<p class="fs-3 text-light">Stabiliser le réchauffement climatique
							<br> nécessite d’agir dès maintenant</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselDark" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </a>
			<a class="carousel-control-next" href="#carouselDark" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </a>
		</div>
    <!-- New Section -->
		<h3 class="text-center mt-5 fs-1"><strong><i>Comment préserver la planéte ?</i></strong></h3>
		<section class="container mt-5">
			<div class="row justify-content-center">
				<h3 class="col-10 col-md-6 fs-1 text-center mt-3">TROUVER DES SOLUTIONS</h3>
				<p class="col-10 col-md-6 fs-3 mt-3 mb-4 text-justify  text-secondary lh-lg">Le monde est arrivé à un seuil critique et nous sommes confrontés à un choix difficile : soit nous ne changeons rien et continuons à endommager irrémédiablement notre planète, soit nous devons innover et résoudre des problèmes. Les gens peuvent réaliser de grandes choses. Ces dix prochaines années présentent nos plus grands défis – une décennie d’action pour réparer la Terre.</p>
			</div>
		</section>
    <!-- New Section -->
		<section class=" bg-img mt-5">
			<h4 class="fs-1 text-warning m-5 lh-base">ENSEMBLE, <br> NOUS POUVONS RELEVER <br> LES PLUS GRAND DÉFIS DE <br> NOTRE PLANÈTE</h4> </section>
	</main>
	<!-- Footer Start -->
	<?php require_once 'component/footer.php'; ?>
  
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
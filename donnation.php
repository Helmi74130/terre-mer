<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="image\EARTH & SEA.png">
	<meta name="description" content="Protection de la nature ainsi que de la biodiversité, action contre le réchauffement climatique. Sensibilation des jeunes aux recyclages et à la protection de la faune et de la flore" />
	<title>Earth and Sea - Donnation</title>
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
	<h1 id="donnation" class="text-center mt-5 title-for-cards"><strong><i>Faire un don</i></strong></h1>
	<main class="container-fluid">
		<section class="row justify-content-around ">
			<div class="col-11 col-md-10 col-lg-5 col-xl-3 shadow-lg d-flex flex-column align-items-center mt-5">
				<h6 class="text-center mt-3 fs-2 w-100 rounded-top text-success">Mon don</h6>
				<div class="mt-3 row justify-content-center">
					<button class="btn btn-outline-dark me-5 btn-lg col-4 mt-3">10 <i class="fa-solid fa-euro-sign"></i></button>
					<button class="btn btn-outline-dark btn-lg col-4 mt-3">20 <i class="fa-solid fa-euro-sign"></i></button>
					<button class="btn btn-outline-dark me-5 btn-lg col-4 mt-3">50 <i class="fa-solid fa-euro-sign"></i></button>
					<button class="btn btn-outline-dark btn-lg col-4 mt-3">100 <i class="fa-solid fa-euro-sign"></i></button>
				</div>
				<input class="mt-5 form-control" type="number" name="donnation" id="donnation" placeholder="Montant Libre">
				<div class="text-center mt-5 text-secondary">
					<p>Vous pouvez bénéficier d'une réduction d'impôt sur le revenu correspondant à 75% de votre don, avec un plafond de 1000€. Au-delà, et dans la limite de 20% de vos revenus imposables, la déduction est encore de 66%..</p>
				</div>
			</div>
			<div class="col-11 col-md-10 col-lg-6 col-xl-4 shadow-lg d-flex flex-column align-items-center mt-5 rounded">
				<h6 class="text-center fs-2 w-100 rounded-top mt-3 text-success">Mes coordonnées</h6>
        <!-- Form Start -->
				<form class="row mb-4 mt-3 d-flex justify-content-center ">
					<div class="col-5">
						<div class="d-flex flex-column">
							<label class="form-label me-2" for="name">Nom *</label>
							<input type="text" id="name" class="form-control" placeholder="Votre Nom" /> </div>
					</div>
					<div class="col-5">
						<div class="d-flex flex-column">
							<label class="form-label me-2" for="firstname">Prénom *</label>
							<input type="text" id="firstname" class="form-control" placeholder="Votre Prénom" /> </div>
					</div>
					<!-- Text input -->
					<div class="col-10 mt-4">
						<div class="mb-4 d-flex flex-column">
							<label class="form-label" for="adress">Adresse</label>
							<input type="text" id="adress" class="form-control" placeholder="Votre adresse" /> </div>
					</div>
					<!-- Email input -->
					<div class="col-10">
						<div class="mb-4 d-flex flex-column">
							<label class="form-label me-2" for="mail">E-mail *</label>
							<input type="email" id="mail" class="form-control" placeholder="Votre e-mail" /> </div>
					</div>
					<!-- Phone input -->
					<div class="col-10">
						<div class="mb-4 d-flex flex-column">
							<label class="form-label me-2" for="phone">Téléphone</label>
							<input type="number" id="phone" class="form-control" placeholder="Votre téléphone" /> </div>
					</div>
				</form>
			</div>
			<div class="col-11 col-md-10 col-lg-10 col-xl-4 shadow-lg d-flex flex-column align-items-center mt-5 rounded">
				<h6 class="text-center fs-2 w-100 rounded-top mt-3 text-success">Mon Règlement</h6>
				<form class="row mb-4 mt-3 d-flex justify-content-center">
					<p class="text-center text-secondary"><i class="fas fa-lock fa-2xs"></i> <small>Vous êtes sur un serveur de paiement sécurisé par SSL</small></p>
					<!-- Text input -->
					<div class="col-10">
						<div class="mb-4 d-flex flex-column">
							<label class="form-label" for="cardNumber"><i class="far fa-credit-card"></i> Numéro de carte</label>
							<input type="text" id="cardNumber" class="form-control" placeholder="0000 0000 0000 0000" /> </div>
					</div>
					<div class="col-5">
						<div class="d-flex flex-column">
							<label class="form-label me-2" for="expDate"><i class="fas fa-calendar-alt"></i> Date d'exp.</label>
							<input type="text" id="expDate" class="form-control" placeholder="00/00" /> </div>
					</div>
					<div class="col-5">
						<div class="d-flex flex-column">
							<label class="form-label me-2" for="cvv"><i class="fas fa-clipboard-check"></i> CVV</label>
							<input type="text" id="cvv" class="form-control" placeholder="CVV" /> </div>
					</div>
					<!-- Number card input -->
					<div class="col-10 mt-4">
						<div class="mb-2 d-flex flex-column">
							<label class="form-label me-2" for="nameTitular">Nom du titulaire de la carte</label>
							<input type="text" id="nameTitular" class="form-control" /> </div>
						<button class="btn btn-success" type="submit">Paiement</button>
					</div>
					<div class="d-flex mt-2 text-secondary">
						<input class="m-3" type="checkbox" name="saveCb" id="saveCb">
						<label for="saveCb"><small>Mémoriser votre carte bancaire pour votre prochaine commande.</small></label>
					</div>
				</form>
			</div>
		</section>
		<p class="text-center mt-3 text-warning">Chaque don à Earth & Sea compte et ouvre des possibilités pour un monde meilleur</p>
	</main>
  <!-- Footer Start -->
	<?php require_once 'component/footer.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
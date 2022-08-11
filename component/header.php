

<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
?>


<header>
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top">
			<div class="container-fluid fs-5"> <a class="navbar-brand fs-1 text-success" href="index.php">Earth & Sea</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse show" id="navbarWithDropdown">
					<ul class="navbar-nav">
						<li class="nav-item"> <a class="nav-link g-1 mx-2 ms-5 <?php if ($first_part=="index.php") {echo 'active'; } else  {echo "noactive";}?>" aria-current="page" href="index.php">Accueil</a> </li>
						<li class="nav-item"> <a class="nav-link mx-2 <?php if ($first_part=="about.php") {echo 'active'; } else  {echo "noactive";}?>" href="about.php">Qui sommes nous?</a> </li>
						<li class="nav-item"> <a class="nav-link mx-2 <?php if ($first_part=="actions.php") {echo 'active'; } else  {echo "noactive";}?>" href="actions.php">Nos actions</a> </li>
						<li class="nav-item"> <a class="nav-link mx-2 <?php if ($first_part=="evenement.php") {echo 'active'; } else  {echo "noactive";}?>" href="evenement.php">Evénement</a> </li>
						<li class="nav-item"> <a class="nav-link mx-2 <?php if ($first_part=="contact.php") {echo 'active'; } else  {echo "noactive";}?>" href="contact.php">Contact</a> </li>
					</ul>
				</div>
			</div>
			<a class="p-2" href="donnation.php">
				<button class="btn btn-warning" type="button">Faire un don <i class="fa-solid fa-hand-holding-heart"></i></button>
			</a>
		</nav>
	</header>
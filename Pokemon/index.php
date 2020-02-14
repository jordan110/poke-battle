<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Poke-Battle</title>
</head>

<?php
		require './classes/pokemon.php';
  		
  		//Attributs pokemons
  		$_degats= 10;
		$_vie = 110;
		$_image = "img/Qulbutoke.png";
		$_nom = 'qulbutoké';

		$_degats2 = 100;
		$_vie2 = 170;
		$_image2 = 'img/mime.jpg';
		$_nom2 = 'mr mime';
		

		$qulbutoke = new pokemon($_degats, $_vie, $_image, $_nom);
		$mime = new pokemon($_degats2, $_vie2, $_image2, $_nom2);

?>

<body>

	<!-- div page d'accueil -->
	<div class="container" id="center">
		<div class="row">
			<h1 class="col-12" id="Titre">Poke-Battle</h1>
			<div class="col-12" id="background">
				<img src="img/International_Pokémon_logo.svg.png" class="image">
			</div>
			<div class="col-12" id="btn">
				<button onclick="myPlay()" type="button" class="btn btn-warning" id="game">JOUER !</button>
			</div>
		</div>
	</div>

	<!-- div gerée par Javascript -->
	<div class="container" id="center_2">
		<div class="row">
			<h1 class="col-12" id="Titre">Poke-Battle</h1>
			<div class="col-12" id="background">
				<img src="img/International_Pokémon_logo.svg.png" class="image">
			</div>
			<div class="col-12" id="select">
				<span id="joueur1">
					Joueur 1 choisissez un pokemon
				</span>
				<span id="joueur2">
					Joueur 2 choisissez un pokemon
				</span>
				<span id="fight">
					Fight !
				</span>
			</div>
			<div class="offset-2 col-3">
				<img data-name=
				"<?php echo $mime->getNom();?>
				<?php echo $mime->getVie();?>
				<?php echo $mime->getDegats();?>"
				 class="image_poke" id="mime" src=<?php echo $mime->getImage();?>>
				<div>
					<p> Nom :    <?php echo $mime->getNom();?></br></p>
					<p> Vie :    <?php echo $mime->getVie();?></br></p>
					<p> Degats : <?php echo $mime->getDegats();?></p>
				<div id="result1">
					<p> Tour 1 : <?php echo $qulbutoke->setFrapper($mime);?></p>
					<p> Tour 2 : <?php echo $mime->recevoir_degats($_degats);?></p>
				</div>
				</div>
			</div>
			<div class="offset-2 col-3">
				<img data-name=
				"<?php echo $qulbutoke->getNom();?>
				<?php echo $qulbutoke->getVie();?>
				<?php echo $qulbutoke->getDegats();?>" 
				class="image_poke" id="qulbutoke" src=<?php echo $qulbutoke->getImage();?>>
				<div>
					<p> Nom :    <?php echo $qulbutoke->getNom();?></br></p>
					<p> Vie :    <?php echo $qulbutoke->getVie();?></br></p>
					<p> Degats : <?php echo $qulbutoke->getDegats();?></p>
				<div id="result2">	
					<p> Tour 1 : <?php echo $mime->setFrapper($qulbutoke);?></p>
					<p> Tour 2 : <?php echo $qulbutoke->recevoir_degats($_degats);?></p>
				</div>
				</div>
			</div>	
			<div class="col-12" id="btn">
				<button data-fights="<?php echo $qulbutoke->setFrapper($mime);?>
					<?php echo $mime->setFrapper($qulbutoke);?>
					<?php echo $mime->getNom();?>
					<?php echo $mime->getVie();?>
					<?php echo $mime->getDegats();?>
					<?php echo $qulbutoke->getNom();?>
					<?php echo $qulbutoke->getVie();?>
					<?php echo $qulbutoke->getDegats();?>"
			    	type="button" class="btn btn-warning" id="battle">
			    	BATTLE !
			    </button>
			</div>	
		</div>
	</div>
	</div>

 
	<script type  ="text/javascript" src="javascript/function.js"></script>
</body>
</html>
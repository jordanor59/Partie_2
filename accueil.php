<html>
	<head>
		<title>accueil.php</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>

		label  {width:200px;float:left;	}

		body {background: rgb(30%  ); }

		fieldset {#1F497D; }

		body {text-align: center;}

		fieldset{margin: 30%;}
		   
		body {background-image:url(test.png); width="295" height="178"}

		legend	{font-weight: 900;}

		legend{margin-left: 200px;}

		legend {padding-top :40px; margin-bot : 40px;  }
		fieldset {padding-top :1px; margin-top : 10px;  }
		h3 {padding-top :1px;margin-bot : 10px}

		fieldset legend {
			background: 		#FEC816;
			color: #fff;
			padding: 5px 10px ;
			font-size: 16px;
			border-radius: 5px;
			box-shadow: 0 0 0 5px #ddd;
		margin-left: 20px; }
		 
		 fieldset {
			font-family: sans-serif;
			border: 5px solid 		#FEC816;
			background: #ddd;
			border-radius: 5px;
			padding: 15px;
		}

		label
		{
			display: block; /* La balise devient de type block. */
			width: 200px;
		}

		select  {
		  width:160px;
		}

.bouton1 {
	border-radius:12px 0 12px 0;
	background: #d34836;
	border:none;
	color:#fff;
	font:bold 12px Verdana;
	padding:6px 0 6px 0;
}
		</style>

	</head>

	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Maison des ligues</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:60/PHP/accueil.php">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:60/PHP/PPEinscription.php#">Inscription Participant </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:60/PHP/equipmentier.php">Inscription équipementier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" >Connexion</a>
      </li>
    </ul>
  </div>
</nav>
	
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<img src="mdl.png" alt=""  />
			<?php
				$mysqli = new  mysqli("192.168.44.30","sio","sio", "Escrime");
				if ($mysqli->connect_errno) {
					echo "Echec lors de la connexion à MySQL : ("
					. $mysqli->connect_errno . ") "
					. $mysqli->connect_error;
				}
			?>
		
	</body>
</html>
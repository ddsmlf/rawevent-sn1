<?php 
require_once("connexion.php");
require("addevent.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>RawEvents - newevent </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset/css/templatecss.css">

	<title>template exo</title>
</head>
<body>
	<header>

	</header>

	<main>
		
		<form action="#" method="POST">
		<div class="blockelement">
			<div class="int" >
				<script type="text/javascript" src="raweneventjs.js"></script>
				<h2 class="tables"><span class="spantitre" onclick="myfunctionArtistes()">Artistes</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionLieux()">Lieux</span></h2>
				<h2 class="tables"><span class="spantitre"  onclick="myfunctionParticipant()">Participant</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionRestauration()">Restauration</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionSecurite()">securite</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionSecurite()">Artiste-Lieux</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionSecurite()">Lieux-Participant</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionSecurite()">Lieux-Securite</span></h2>
				<h2 class="tables" ><span class="spantitre"  onclick="myfunctionSecurite()">Participant-Restauration</span></h2>
			</div>
			<div class="grosblock">
				
				<div class="element op1" id="element1">
<!-- Artistes -->
					<div class="elementint">
					<div class="a1"><label>Groupe</label><br><input type="text" name="groupe" id="groupe"></div>
					<div class="a1"><label>style</label><br><input type="text" name="style" id="style"></div></div>
				</div>
			<div class="element op2" id="element2">
				<div class="elementint">
<!-- Lieux -->
				<div class="a1"><label>ville</label><br><input type="text" name="lieux" id="lieux"></div>
				<div class="a1"><label>date</label><br><input type="date" name="date" id="date"></div>
				<div class="a1"><label>nombre de place</label><br><input type="number" name="nb_place" id="nb_place"></div>
				<div class="a1"><label>Longitude</label><br><input type="text" name="longitude" id="longitude"></div>
				<div class="a1"><label>Lattitude</label><br><input type="text" name="lattitude" id="lattitude"></div></div>
			</div>
			<div class="element op3" id="element3">
				<div class="elementint">
<!-- Participant -->
				<div class="a1"><label>nom</label><br><input type="text" name="nomparticipant" id="nomparticipant"></div>
				<div class="a1"><label>Prenom</label><br><input type="text" name="prenomparticipant" id="prenomparticipant"></div>
				<div class="a1"><label>société</label><br><input type="text" name="societe_participant" id="societe_participant"></div>
				<div class="a1"><label>fonction</label><br><input type="text" name="fonction_participant" id="fonction_participant"></div></div>
			</div>
			<div class="element op4" id="element4">
				<div class="elementint">
<!-- Restauration -->
				<div class="a1"><label>Nom Entreprise</label><br><input type="text" name="nom_resto" id="nom_resto"></div>
				<div class="a1"><label>Nom Rue</label><br><input type="text" name="nomrue_resto" id="nomrue_resto"></div>
				<div class="a1"><label>numero rue</label><br><input type="number" name="numrue_resto" id="numrue_resto"></div>
				<div class="a1"><label>ville</label><br><input type="text" name="ville_resto" id="ville_resto"></div>
				<div class="a1"><label>pays</label><br><input type="text" name="pays_resto" id="pays_resto"></div></div>
			</div>
			<div class="element op5" id="element5">
				<div class="elementint">
<!-- Securite -->
				<div class="a1"><label>Societe</label><br><input type="text" name="nom_societe" id="nom_societe"></div></div>
				<!--<div class="a1"><label>Nom Entreprise</label><br><input type="text" name="nom_secu" id="nom_secu"></div>
				<div class="a1"><label>Nom Rue</label><br><input type="text" name="nomrue_secu" id="nomrue_secu"></div>
				<div class="a1"><label>numero rue</label><br><input type="number" name="numrue_secu" id="numrue_secu"></div>
				<div class="a1"><label>ville</label><br><input type="text" name="ville_secu" id="ville_secu"></div>
				<div class="a1"><label>pays</label><br><input type="text" name="pays_secu" id="pays_secu"></div></div>-->
			</div>

			<div class="element op6" id="element6">
<!--artistes-lieux -->
				<div class="elementint">
					<div class="a1"><label>Artistes ID</label><br><input type="number" name="Artistes_ID" id="Artistes_ID"></div>
					<div class="a1"><label>Lieux ID</label><br><input type="number" name="Lieux_ID" id="=Lieux_ID"></div>
					<div class="a1"><label>ordre de passage</label><br><input type="text" name="ordre_de_passage" id="ordre_de_passage"></div>
					<div class="a1"><label>Heure de debut</label><br><input type="date" name="Heure_debut" id="Heure_debut"></div>
					<div class="a1"><label>Heure de fin</label><br><input type="date" name="Heure_fin" id="Heure_fin"></div>
				</div>

			</div>
			<div class="element op7" id="element7">
<!--lieux-participant -->
				<div class="elementint">
					<div class="a1">
						<label>Lieux ID</label><br>
						<input type="number" name="Lieux_id1" id="Lieux_id1">
					</div>
					<div class="a1">
						<label>Participant ID</label><br>
						<input type="number" name="Participant_id1" id="Participant_id1">
					</div>
					<div class="a1">
						<label>Nb-personne</label><br>
						<input type="text" name="Nb_personne" id="Nb_personne">
					</div>
					<div class="a1">
						<label>Date</label><br>
						<input type="date" name="Date_even" id="Date_even">
					</div>
				</div>

			</div>
			<div class="element op8" id="element8">
<!--lieux-securite -->
				<div class="elementint">
					<div class="a1">
						<label>Lieux ID</label><br>
						<input type="date" name="Lieux_id2" id="Lieux_id2">
					</div>
					<div class="a1">
						<label>Securite ID</label><br
						><input type="date" name="securite_id2s" id="securite_id2s">
					</div>
					<div class="a1">
						<label>Date arrivée</label><br>
						<input type="date" name="date_arriver" id="date_arriver">
					</div>
					<div class="a1">
						<label>Date depart</label><br>
						<input type="date" name="date_depart" id="date_depart">
					</div>
				</div>

			</div>
			<div class="element op9" id="element9">
<!--Participant-restauration -->
				<div class="elementint">
				<div class="a1">
						<label>Participant ID</label><br>
						<input type="text" name="participant_id2" id="participant_id2">
					</div>
					<div class="a1">
						<label>Restauration ID</label><br>
						<input type="text" name="restauration_id" id="restauration_id">
					</div>
					<div class="a1">
						<label>Menu</label><br>
						<input type="textarea" name="Menu" id="Menu">
					</div>
				</div>

			</div>


			</div>
			<div class="bt"><button type="submit">Envoyer</button></div>
		</div>
		</form>
		
		


	</main>
	<footer></footer>
</body>
</html>
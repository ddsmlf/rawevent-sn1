<?php 
	
//Artistes
	if (!empty($_POST['groupe']) && !empty($_POST['style'])) {
		
		$artistegroupe = $_POST['groupe'];//variable
		$artistestyle = $_POST['style'];//variable
		
		$artiste = $db->query("INSERT INTO `artistes` (`ID`, `Nom_Groupe`, `Style_Musique`) VALUES 
			(NULL, '$artistegroupe', '$artistestyle');");//code ajout
		while ($data = $artiste->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur1";
		}
//Lieux
	if (!empty($_POST['lieux']) && !empty($_POST['date']) && !empty($_POST['nb_place']) && !empty($_POST['longitude']) && !empty($_POST['lattitude'])) {
		
		$ville = $_POST['lieux'];
		$date = $_POST['date'];
		$nb_place = $_POST['nb_place'];
		$longitude = $_POST['longitude'];
		$lattitude = $_POST['lattitude'];
		
		$Lieux = $db->query("INSERT INTO `lieux` (`ID`, `Ville`, `Date_Location`, `Nb_place`, `Longitude`, `Lattitude`) VALUES (NULL, '$ville', '$date', '$nb_place', '$longitude', '$lattitude');");
		while ($data = $Lieux->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur2";
		}

//Participant
	if (!empty($_POST['nomparticipant']) && !empty($_POST['prenomparticipant']) && !empty($_POST['societe_participant']) && !empty($_POST['fonction_participant'])) {
		
		$Nom = $_POST['nomparticipant'];
		$Prenom = $_POST['prenomparticipant'];
		$Societe = $_POST['societe_participant'];
		$Fonction = $_POST['fonction_participant'];
		
		$Participant = $db->query("INSERT INTO `participant` (`ID`, `Nom`, `Prenom`, `Societe`, `Fonction`) VALUES (NULL, '$Nom', '$Prenom', '$Societe', '$Fonction'); ");
		while ($data = $Participant->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur3";
		}

//Restauration
	if (!empty($_POST['nom_resto']) && !empty($_POST['nomrue_resto']) && !empty($_POST['numrue_resto']) && !empty($_POST['ville_resto']) && !empty($_POST['pays_resto'])) {
		
		$Nom_resto = $_POST['nomparticipant'];
		$Nomrue_resto = $_POST['prenomparticipant'];
		$Numrue_resto = $_POST['societe_participant'];
		$Ville_resto = $_POST['fonction_participant'];
		$Pays_resto = $_POST['pays_resto'];
		
		$Restauration = $db->query("INSERT INTO `restauration` (`id`, `nom_entreprises`, `nom_rue`, `num_rue`, `ville`, `pays`) VALUES (NULL, '$Nom_resto', '$Nomrue_resto', '$Numrue_resto', '$Ville_resto', '$Pays_resto');");
		while ($data = $Restauration->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur4";
		}
 
 //Securite 
		if (!empty($_POST['nom_societe'])) {
			
			$Nom_societe = $_POST['nom_societe'];

			$Securite = $db->query("INSERT INTO `securite` (`id`, `société`) VALUES (NULL, '$Nom_societe');");
			while ($data = $Securite->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur5";
		}

//Artistes-lieux
	if (!empty($_POST['ordre_de_passage']) && !empty($_POST['Heure_debut']) && !empty($_POST['Heure_fin'])  && !empty($_POST['Artistes_ID'])  && !empty($_POST['Lieux_ID'])) {
		
		$Artiste_id = $_POST['Artistes_ID'];
		$Lieux_id = $_POST['Lieux_ID'];
		$Ordre_de_passage = $_POST['ordre_de_passage'];
		$Heure_debut = $_POST['Heure_debut'];
		$Heure_fin = $_POST['Heure_fin'];
		
		$ArtisteLieux = $db->query("INSERT INTO `artistes-lieux` (`artistes_id`, `lieux_id`, `ordre_de_passage`, `heure_debut`, `heure_fin`) VALUES ('$Artiste_id', '$Lieux_id', '$Ordre_de_passage', '$Heure_debut', '$Heure_fin');");
		while ($data = $ArtisteLieux->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur6";
		}
//Lieux-participant
	if (!empty($_POST['Lieux_id1']) && !empty($_POST['Participant_id1']) && !empty($_POST['Nb_personne'])  && !empty($_POST['Date_even'])) {
		
		$Lieux_id1 = $_POST['Lieux_id1'];
		$Participant_id1 = $_POST['Participant_id1'];
		$Nb_personne = $_POST['Nb_personne'];
		$Date_evenement = $_POST['Date_even'];

		$LieuxParticipant = $db->query("INSERT INTO `lieux_participant` (`lieux_id`, `participant_id`, `Nb_personnes`, `Date`) VALUES ('$Lieux_id1', '$Participant_id1', '$Nb_personne', '$Date_evenement');");
		while ($data = $LieuxParticipant->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur7";
		}
//Lieux-securite
	if (!empty($_POST['date_arriver']) && !empty($_POST['date_depart']) && !empty($_POST['Lieux_id2'])  && !empty($_POST['securite_id2s'])) {
		
		$Date_arriver = $_POST['date_arriver'];                               
		$Date_depart = $_POST['date_depart'];
		$Lieux_id2 = $_POST['Lieux_id2'];
		$Securite_id2 = $_POST['securite_id2s'];

		$LieuxSecurite = $db->query("INSERT INTO `lieux_securite` (`lieux_id`, `securite_id`, `date_arrive`, `date_depart`) VALUES ('$Lieux_id2', '$Securite_id2', '$Date_arriver', '$Date_depart');");
		while ($data = $LieuxSecurite->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur8";
		}

//Participant-Restauration
	if (!empty($_POST['participant_id2']) && !empty($_POST['restauration_id']) && !empty($_POST['Menu'])) {
			
		$Participant_id2 = $_POST['participant_id2'];                               
		$Restauration_id = $_POST['restauration_id'];
		$Menu = $_POST['Menu'];

		$ParticipantRestauration = $db->query("INSERT INTO `participant_restauration` (`participant_id`, `restau_id`, `menu`) VALUES ('$$Participant_id2', '$Restauration_id', '$Menu');");
		while ($data = $ParticipantRestauration->fetch()) {
			var_dump($data);
		}
	}else{
			echo "erreur8";
		}


 ?>
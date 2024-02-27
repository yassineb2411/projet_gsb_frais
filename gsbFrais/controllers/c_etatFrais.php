<?php
/** @var PdoGsb $pdo */
include 'views/v_sommaire.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerMois':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste,
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("views/v_listeMois.php");
		break;
	}
	case 'voirEtatFrais':{
		$leMois = $_REQUEST['lstMois'];
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$moisASelectionner = $leMois;
		include("views/v_listeMois.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		
		//Gestion des dates
		@list($annee,$mois,$jour) = explode('-',$dateModif);
		$dateModif = "$jour"."/".$mois."/".$annee;

		//$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("views/v_etatFrais.php");
		break;
	}
	case 'selectionnerMoisCumul':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste,
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		$lesTypesFrais = $pdo->getLesTypesFrais();		
		include("views/v_cumulMois.php");
		break;
	}
	case 'selectionnerMoisCumulB':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste,
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		$lesTypesFrais = $pdo->getLesTypesFrais();
		include("views/v_cumulMoisB.php");
		break;
	}
	case 'selectionnerMoisCumulC':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("views/v_cumulMoisC.php");
		break;
	}
	case 'validerCumul':{
		$lstMois = $_REQUEST['lstMois'];
		$typeFrais = $_REQUEST['typeFrais'];
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$lesTypesFrais=$pdo->getLesTypesFrais();
		$moisASelectionner = $lstMois;
		$lesVisiteursTypeFrais = $pdo->getLesVisiteursTypesFrais($lstMois,$typeFrais);
		include("views/v_cumulMois.php");
		include("views/v_etatFraisCumul.php");
		break;
	}
	case 'validerCumulB':{
		$leVisiteur = $_REQUEST['idVisiteur'];
		$typeFrais = $_REQUEST['typeFrais'];
		$lesTypesFrais=$pdo->getLesTypesFrais();
		$UnVisiteurTypeFrais = $pdo->getUnVisiteurTypeFrais($leVisiteur,$typeFrais);
		include("views/v_cumulMoisB.php");
		include("views/v_etatFraisCumulB.php");
		break;
	}
	// case 'validerCumulC':{
	// 	$listeMois = $_REQUEST['lstMois'];
	// 	$lesFraisDate1 = $pdo->getLesFraisDate1($listeMois);
	// 	$lesFraisDate2 = $pdo->getLesFraisDate2($listeMois);
	// 	$lesFraisDate3 = $pdo->getLesFraisDate3($listeMois);
	// 	$lesFraisDate4 = $pdo->getLesFraisDate4($listeMois);
	// 	include("views/v_cumulMoisC.php");
	// 	include("views/v_etatFraisCumulC.php");
	// 	break;
	// }
}

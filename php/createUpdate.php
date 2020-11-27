<?php
	include 'mesFunctionsSQL.php';
	include 'mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$taille = $_GET["taille"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$adresse = $_GET["adresse"];
		$code_postal = $_GET["code_postal"];
		$ville = $_GET["ville"];
		$email = $_GET["email"];
		$mobile = $_GET["mobile"];

	}


	if ($action == "CREATE") {
		createUser($taille, $nom, $prenom, $adresse, $code_postal, $ville, $email, $mobile);

		echo "user cree <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";

	}

	if ($action == "UPDATE") {
		updateUser($id, $taille, $nom, $prenom, $adresse, $code_postal, $ville, $email, $mobile);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}

?>
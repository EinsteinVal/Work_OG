<?php

	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "root";
			$pdo = new PDO('mysql:host=localhost;dbname=onegeepk', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;

		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from pre_commande';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un user
	function createUser($taille, $nom, $prenom, $adresse, $code_postal, $ville, $email, $mobile) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO pre_commande (taille, nom, prenom, adresse, code_postal, ville, email, mobile)
					VALUES ('$taille', '$nom', '$prenom', '$adresse', '$code_postal', '$ville', '$email', '$mobile')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from pre_commande where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
	}

	//met à jour le user
	function updateUser($id, $taille, $nom, $prenom, $adresse, $code_postal, $ville, $email, $mobile) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE pre_commande set
						taille = '$taille',
						nom = '$nom',
						prenom = '$prenom',
						adresse = '$adresse',
						code_postal = '$code_postal',
						ville = '$ville',
						email = '$email',
						mobile = '$mobile'
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from pre_commande where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['taille'] = "";
		$user['nom'] = "";
		$user['prenom'] = "";
		$user['adresse'] = "";
		$user['code_postal'] = "";
		$user['ville'] = "";
		$user['email'] = "";
		$user['mobile'] = "";
	}
 ?>
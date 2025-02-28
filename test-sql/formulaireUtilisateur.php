<?php
include 'mesFunctionsSQL.php';
include 'mesFunctionsTable.php';

$id = $_GET["id"];
if ($id == 0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$user = readUser($id);
	$action = "UPDATE";
	$libelle = "Mettre a jour";
}
?>

<form action="createUpdate.php" method="get">
	<p>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>" />
		<input type="hidden" name="action" value="<?php echo $action;  ?>" />
		<div>
			<label for="name">Taille :</label>
			<input type="text" id="taille" name="taille" value="<?php echo $user['taille'];  ?>">
		</div>
		<div>
			<label for="name">Nom :</label>
			<input type="text" id="nom" name="nom" value="<?php echo $user['nom'];  ?>">
		</div>
		<div>
			<label for="prenom">Prenom</label>
			<input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom'];  ?>">
		</div>
		<div>
			<label for="adresse">Adresse :</label>
			<textarea id="adresse" name="adresse" placeholder="<?php echo $user['adresse'];  ?>"></textarea>
		</div>
		<div>
			<label for="name">Code Postal :</label>
			<input type="text" id="code_postal" name="code_postal" value="<?php echo $user['code_postal'];  ?>">
		</div>
		<div>
			<label for="name">Ville :</label>
			<input type="text" id="ville" name="ville" value="<?php echo $user['ville'];  ?>">
		</div>
		<div>
			<label for="name">Email :</label>
			<input type="text" id="email" name="email" value="<?php echo $user['email'];  ?>">
		</div>
		<div>
			<label for="name">Mobile :</label>
			<input type="text" id="mobile" name="mobile" value="<?php echo $user['mobile'];  ?>">
		</div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
</form>
<br>

<?php if ($action != "CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE" />
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>" />
		<p>
			<div class="button">
				<button type="submit">Supprimer</button>
			</div>
		</p>
	</form>
<?php } ?>
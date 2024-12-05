<?php
$prenom = "";
$nom="";
?>
<html>
	<head>
		<title>Liste des utilisateurs</title>
	</head>
	<body>
		<h1>Exemple simple de site en PHP</h1>
		<form action="index.php" method="get">
				Nom : <input type="text" name="nom" value="<?php echo $nom; ?>"/>
				Prenom : <input type="text" name="prenom" value="<?php echo $prenom; ?>"/>
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<input type="hidden" name="action" value="save"/>
				<input type="submit"/>
		</form>
	</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars('traitement.php');?>">
        Nom:<input type="text" name="nom" id = "nom" required>
        Date de naissance :<input type="date" name="date_naissance" id="date_naissance" required>
        téléphone : <input type="int" name="telephone" id="telephone" maxlenght="10" required>
        <input type="submit" name="envoyer" value="Envoyer">
    </form>
    
</body>
</html>
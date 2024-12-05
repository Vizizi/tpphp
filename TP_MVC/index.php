<?php
require("M/connexion.php");
require("M/fonctions.php");

if(isset($_GET["action"]) && $_GET["action"]=="save") {
	if(isset($_GET["id"]) &&  $_GET["id"]!=null) {
		$reponse = updateUsers($db, $_GET["nom"],$_GET["prenom"], $_GET["id"]);	
	} else {
		$reponse = insertUsers($db, $_GET["nom"],$_GET["prenom"]);
	}
}
if(isset($_GET["action"]) && ($_GET["action"]=="ajouter" || $_GET["action"]=="modifier")){
	$nom = "";
	$prenom = "";
	$id = "";
	if($_GET["action"]=="modifier") {
		$reponse=selectUser($db,$_GET["id"]);
    	while($user = $reponse->fetch()){
			$nom = $user["nom"];		
			$prenom = $user["prenom"];		
			$id = $user["id"];
		}
	}
	$target="V/edit.php";
	include("V/edit.php");	
} else { 	
	$reponse=selectAllUsers($db);
	$target="V/list.php";
	include("V/edit.php");
	
}

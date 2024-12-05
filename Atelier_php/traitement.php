<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO personne (nom, date_naissance, telephone)
  VALUES (:nom, :date_naissance, :telephone)");
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':date_naissance', $date_naissance);
  $stmt->bindParam(':telephone', $telephone);

  // insert a row
  $nom = $_POST['nom'];
  $date_naissance = $_POST['date_naissance'];
  $telephone = $_POST['telephone'];
  $stmt->execute();


  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
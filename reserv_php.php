<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupération des données du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validation ou traitement supplémentaire si nécessaire

  // Exemple : Affichage des données
  echo "Nom: " . $nom . "<br>";
  echo "Adresse e-mail: " . $email . "<br>";
  echo "Mot de passe: " . $password;
}
?>
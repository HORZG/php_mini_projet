<?php
function check(){
  $con= mysqli_connect("localhost","root","","projet_php");
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $cin = $_POST["cin"];
  $ville = $_POST["ville"];
  $date_res = $_POST["date_res"];
  $sql = "INSERT INTO reserv VALUES ($nom,$prenom,$email,$cin,$ville,$date_res)";
  $con->query($sql);
}
?>
<?php 
require 'config.php';
// reception des données du formulaire
$nom = $_POST['nom'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$adresse= $_POST['adresse'];
$code = $_POST['code'];
$societe = $_POST['societe'];

$msg= $_POST['msg'];
echo $nom.$email.$phone.$adresse.$code.$msg;

 ?>
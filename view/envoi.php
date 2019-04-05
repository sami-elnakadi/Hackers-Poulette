<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['e-mail'];
$pays = $_POST['pays'];
$message = $_POST['message'];
$genre = $_POST['genre'];
$sujet = $_POST['sujet'];  
$bot = $_POST['bot'] ;

$options = array (
    'nom'  => FILTER_SANITIZE_STRING,
    'prenom' => FILTER_SANITIZE_STRING,
    'genre' => FILTER_SANITIZE_STRING,
    'pays' => FILTER_SANITIZE_STRING,
    'e-mail' => FILTER_VALIDATE_EMAIL,
    'message' => FILTER_SANITIZE_STRING,
    'sujet' => FILTER_SANITIZE_STRING);

    $result = filter_input_array(INPUT_POST, $options); 

    if ($result != null AND $result != FALSE) { 

        echo "Le mail a bien été envoyé !";
    
    } else {
    
        echo "Un champ est vide ou n'est pas correct!";
    
    }
    
    foreach($options as $key => $value) 
        {
       $result[$key]=trim($result[$key]);
        } 
  
    $headers = $result['nom']." ".$result['prenom']." <".$result['e-mail'].">"; 
    if($bot ==''){
    mail('sami.elnakadi@gmail.com', $result['sujet'], $result['message'] , $headers);
    }
?>

<!DOCTYPE html>

<a href="https://rasppoulette.000webhostapp.com/index.php?page=Contact">Retour</a>
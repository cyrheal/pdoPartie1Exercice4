<?php
//j instancie de l objet clients; 
//donc $client devient une instance de la classe client
//la méthode magique __construct  est appeler automatiquement grace au mot clé new
$clients= new clients();
//j apelle ma méthode avec $client->getClientListWithCard et je la stock dans la varaible $clientList
$getClientListWithCard= $clients->getClientListWithCard();
?>
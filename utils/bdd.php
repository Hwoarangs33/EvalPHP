<?php
//FICHIER UTILITAIRE POUR SE CONNECTER A LA BDD
//ETAPE 1 : Se connecter à la BDD
    $bdd = new PDO('mysql:host=localhost;dbname=ticket','root','',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
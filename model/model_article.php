<?php
//LE FICHIER MODEL : COMMUNICATION AVEC LA BDD ET ENVOIE DES REQUETES

//Chaque Requête est sous forme de fonction pour les appeller quand je le souhaite

//ENREGISTREMENT D'UN ARTICLE
function addArticle($nom_article,$bdd){
            try{
                //ETAPE 2 : Préparer la requête
                $req=$bdd->prepare('INSERT INTO article (nom_article) VALUES(?)');

                //ETAPE 3 : Binding de Paramètre
                $req->bindParam(1,$nom_article,PDO::PARAM_STR);

                //ETAPE 4 : Exécution de la requête
                $req->execute();

                //ETAPE 5 : J'envoie le message de confirmation au Controler
                return "La catégorie $nom_article, a bien été ajoutée à la BDD.";

            }catch(Exception $error){
                //J'envoie le message d'erreur au Controler
                return $error->getMessage();
            }
}




?>
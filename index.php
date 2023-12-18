<?php

   

    // Import des ressources
    include("./model/model_article.php"); //-> import du model

    $message = "";
    $name = "";


    {
        if(isset($_POST['submitArticle'])){
            //ETAPE 2 : Sécurité - Vérifier si les champs nécessaires sont bien remplie
            if(isset($_POST["nom_article"]) && !empty($_POST["nom_article"])){
    
                //ETAPE 3 : Sécurité - nettoyage des données
                $nom_article = htmlentities(strip_tags(trim($_POST["nom_article"])));
    
                //ETAPE 5 : Sécurité - vérifie le format des données
                //-> Ici pas de vérification car pas de format spécial attendu en dehors des STRING
    
                //ETAPE 6 : Communication à la BDD - Connexion
                try{
                    $bdd = new PDO("mysql:host=localhost;dbname=ticket","root","",
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
                    $message = addArticle($nom_article,$bdd);
    
                }catch(Exception $error){
                    $message = $error->getMessage();
                }
            }else{
                $message = "Remplissez correctement le Formulaire";
            }
    
        }
    }




    include("./view/header.php");
    include("./view/view_article.php");
    include("./view/footer.php");
?>


<?php 
require("connexionbdd.php");
if(isset($_POST["validerabonne"]))
    {        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date_de_naissance']) && !empty($_POST['date_de_debut_d_abonnement']) && !empty($_POST['numero_de_telephone']) && !empty($_POST['email']))
        {
            $nom = $_POST['nom'];
            $prenom =  $_POST['prenom'];
            $date_de_naissance = $_POST['date_de_naissance'];
            $date_de_debut_dabonnement = $_POST['date_de_debut_d_abonnement'];
            $numero_de_telephone = $_POST['numero_de_telephone'];
            $email = $_POST['email'];
            $sql="INSERT INTO  `etudiants` (`nom`,`prenom`,`date_de_naissance`,`date_de_debut_d_abonnement`,`numero_de_telephone`,`email`)
            VALUES('$nom','$prenom','$date_de_naissance','$date_de_debut_dabonnement','$numero_de_telephone','$email')";
            $result= mysqli_query( $bdd,$sql);
            if($result){
            echo"etudiant enregistré";}
            else{echo"etudiant non enregistré";}
        }

    }
    ?>

          
    





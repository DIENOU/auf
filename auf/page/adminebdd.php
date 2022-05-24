<?php 
require("connexionbdd.php");
if(isset($_POST["valideradmine"]))
    {        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['tel']))
        {
            $nom = $_POST['nom'];
            $prenom =  $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $sql="INSERT INTO  `admine` (`nom`,`prenom`,`email`,`tel`)
            VALUES('$nom','$prenom','$email','$tel')";
            $result= mysqli_query( $bdd,$sql);
            if($result){
            echo"admine inscri";}
            else{echo"admine non inscri";}
        }

    }
    ?>
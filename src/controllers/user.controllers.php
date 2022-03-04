<?php
if($_SERVER['REQUEST_METHOD']=="GET"){

    
if(isset($_GET['action'])){
    if($_GET['action'] == "accueil"){
        if(!is_connect()){
            header("location:".WEBROOT);
            exit();
        }
        require_once(PATH_VIEWS."users/acceuil.html.php");
    }
}

}


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){
     if($_REQUEST["action"]=="connexion")
     {
       // echo "dougouneuh beu sseussee";
         $login=$_POST['login'];
         $password=$_POST['password'];
        
         connexion($login,$password);
     }   

}
}

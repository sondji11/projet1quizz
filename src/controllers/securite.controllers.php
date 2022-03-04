<?php
/**
* Traitement des Requetes

*/
require_once PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['action'])){

     if($_POST["action"]=="connexion")
     {
       // echo "dougouneuh beu sseussee";
         $login=$_POST['login'];
         $password=$_POST['password'];
        
         connexion($login,$password);
     }   

}
}
/**
* Traitement des Requetes GET
*/
if($_SERVER['REQUEST_METHOD']=="GET"){

if(isset($_GET['action'])){
    if($_REQUEST['action']=="connexion"){
       // require_once(PATH_VIEWS."securites/connexion.html.php");
        echo"charger la page de connexion";
    }
    else{
       
    }
}else{
    include_once PATH_VIEWS."securites".DIRECTORY_SEPARATOR."connexion.html.php";
}

}


function connexion(string $login,string $password):void {
    $errors=[];
    
    champ_obligatoire("login",$login,$errors);
    
  
    if(!isset($errors['login'])){
       valid_email("login",$login,$errors);
    }
  

    champ_obligatoire("password",$password,$errors);
    if(!isset($errors['password']))
    {

      (valid_password("password",$password,$errors));
    }  
   // valid_password("password",$password,$errors);
    
    if(count($errors)==0){
            $userConnect=find_user_login_password($login,$password);
            if(count($userConnect)!=0){
                $_SESSION['USER_KEY']=$userConnect;
                header("location:".WEBROOT."?controller=user&action=accueil");
                exit();
            }else{
                $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEBROOT."index.php");
            exit();
            }
    }else{
        $_SESSION[KEY_ERRORS]=$errors;
          header("location:".WEBROOT."index.php");
        exit();
    }
   
    }

    function logout():void{
        $_SESSION['user_connect']=array();
        unset($_SESSION['user_connect']);
        session_destroy();
        header("location:".WEBROOT."index.php");
        exit();
    }
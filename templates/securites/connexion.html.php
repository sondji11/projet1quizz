<?php
if(isset($_SESSION[KEY_ERRORS])){

    $errors=$_SESSION[KEY_ERRORS];

    unset($_SESSION[KEY_ERRORS]);


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEBROOT."css".DIRECTORY_SEPARATOR."style.css"?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="entete" >
        <h1>Le plaisir de jouer</h1>
        <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."logo.png"?>"" alt="">
    </div>
    
    <div class="menu">
        <form action="<?= WEBROOT?>" method="post">
        <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion">

            <div class="barr1">
                    <h3>Login Form</h3>
                    <i class="fa fa-close" style="font-size:24px"></i>
            </div>
            <div class="barr2">

                     <div class="login">  
                        <input type="text" name="login" placeholder="login">
                        <img src="<?= WEBROOT."img".DIRECTORY_SEPARATOR."login.png"?>" alt="">
                     </div>  

                     <?php
            if(isset($errors['login'])):?>
            <span style="color: red;"> <?=$errors['login'];?></span>

            <?php endif?>

                     <div class="password">
                         <input type="password" placeholder="password" name="password">
                         <i class="material-icons" style="font-size:28px;color:rgb(190, 190, 190);">lock</i>
                     </div>

                     <?php
            if(isset($errors['password'])):?>
            <span style="color: red;"> <?=$errors['password'];?></span>

            <?php endif?>
                     
            <?php
            if(isset($errors['connexion'])):?>
            <span style="color: red;"> <?=$errors['connexion'];?></span>

            <?php endif?>
            
                   
            </div>
            <div class="barr3">
                <input type="submit" value="connexion" >
                
                <a href="#">s'inscrire pour jouer</a>
            </div>

       
        </form>
    </div>
</body>
</html>
<?php

define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data/db.json");

define("WEBROOT","http://localhost/projet1/quizz_mvc/public/");
/**
* Chemin sur l'action des formulaires
*/
define("WEB_PUBLIC",str_replace("index.php", "",$_SERVER["SCRIPT_NAME"]));
define("KEY_ERRORS","errors");
define("KEY_USER","user_connect");


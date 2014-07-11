<?php
    $activate = TRUE;
    
    $data_base = True;
        $type_db = ""; //MySQL
        define('host', 'localhost');
        define('user', 'root');
        define('pw', 'norman95');
        define('db', 'app');

    $INSTALLED_APPS = [
        "general",
        "alumnos",
        "maestros",
        "admon",
    ];
   if ($data_base) {
     require_once 'db.php';
   }
   login_app($INSTALLED_APPS);
   $objects = [
        "poli" => new poli(),
        "alumnos" => new alumnos(),
        "maestros" => new maestros(),
        "admon" => new admon(),
   ];
      if ($activate) {
        require_once 'url.php';
      }
?>
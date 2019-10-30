<?php

//namespace App;

//use App\NewPHPClass;

//require_once '/App/NewPHPClass.php';

require_once '../vendor/autoload.php';

use App\NewPHPClass;

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Hello!</h1>
        
        <?php
        // put your code here
        
        
        
        $class_obj = new NewPHPClass();
        
        $a = 1;
        $b = 2;
        
        
        echo ''. $class_obj->add($a, $b);
        
        
        ?>
    </body>
</html>

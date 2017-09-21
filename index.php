<?php
    require"vendor/autoload.php";


    $engine=new Mustache_Engine();
    echo $engine->render('hell {{name}}',['name'=>'fuwenbin']);
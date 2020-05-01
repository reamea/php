<?php
spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
        $path ="classes/";
        $extendsion = ".class.php";
        $fullPath = $path.$className.$extendsion;

        if (!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>
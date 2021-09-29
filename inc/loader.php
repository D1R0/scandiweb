<?php 
$dir="inc/Products";
$files = scandir($dir);
foreach($files as $file){
    if(strpos($file, "php")){
        require $dir."/".$file;
    }
    
} 
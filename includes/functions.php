<?php
/**
 * Created by PhpStorm.
 * User: tobymao
 * Date: 08/11/2017
 * Time: 2:28 AM
 */


//require path refiner
function prefix(){
    $path = dirname($_SERVER['PHP_SELF']);

    $pieces = explode("/", $path);

    $cnt = count($pieces);

    $add ="";
    for($i=0;$i<$cnt-2;$i++){
        $add .="../";
    }

    echo $add;

}


//add the title should happen between with header_a and header_b
function addtitle($title){
    $c = "<title>$title</title>";
    echo $c;
}


?>


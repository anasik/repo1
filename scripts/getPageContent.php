<?php
/**
 * Created by PhpStorm.
 * User: anas
 * Date: 1/15/14
 * Time: 9:40 PM
 */
include("parse.php");
function getPageContent($pagename){
    $address = "pages/{$pagename}.html";
    $addressContents = file_get_contents($address);
    substr($address, strpos($address,"page=") +5, strlen($address) -1 )
    if(file_exists($address)){
        return '<div id="board">'.$addressContents.'</div><br>';
    }
        else {
        return "Error 404:<br>The Page: {$pagename}, was not found.<br>";
    };
};

strtoupper();
strtolower()
ucfirst()
ucwords()
?>


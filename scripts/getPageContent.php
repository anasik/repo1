<?php
/**
 * Created by PhpStorm.
 * User: anas
 * Date: 1/15/14
 * Time: 9:40 PM
 */
include("parse.php");
function getPageContent($pagename){
    $address = "../pages/".$pagename;
    echo $address;
    if(file_exists($address)){
        return '<object id="board" type="text/html" data="'.$pagename.'.html"></object>';
    }
    else {
        return "Error 404:<br>The Page: ".$pagename.", was not found.<br>";
    }
}
echo getPageContent(getPageName());
?>
<?php
$ThemeName = "default"; //would be the same as the name of the DIR with the themes files
$ThemeDir = "themes/" . $ThemeName;
$ThemeMarkup = file_get_contents($ThemeDir . "/markup.html");
include("../". $ThemeDir . "/attributes.php");

function GetAttributes($tagName){
    global $ThemeDir, $ThemeAttrs;
    include($ThemeDir . "/attributes.php");
    if(array_key_exists($tagName, $ThemeAttrs)){
        return $ThemeAttrs[$tagName];
    }
    else {
        return "nope";
    }
}
//echo "../". $ThemeDir . "/attributes.php";
//echo $ThemeAttrs["header"];
echo GetAttributes("header");
?>


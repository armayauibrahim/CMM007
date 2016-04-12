<?php
/**
 * Created by PhpStorm.
 * User: 1513072
 * Date: 12/04/2016
 * Time: 09:46
 */
session_start();
$accesslevel = $_COOKIE['access_level_cookie'];
displayAccesslevelInformation($accesslevel);
function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel == "standarduser")
    {
        echo "<p style = \background-color:lightgreen\">You are currently loggedin as a standard user</p>";
    }
    elseif ($accesslevel == "root")
    {
     echo "<p style = \"background-color: red\">You are currently logged in as a root user</p>";
     echo "<p style = \"background-color: red\">You now have access to additional administrative features</p>";
    }
}
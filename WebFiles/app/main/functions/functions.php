<?php 
@session_start();

// Functions

function get($name)
{
    $filter = strip_tags(@$_GET[$name]);
    $filter2 = htmlspecialchars($filter, ENT_QUOTES, "UTF-8");
    $filter3 = addslashes($filter2);
    return $filter3;
}

function post($name)
{
    $filter = strip_tags(@$_POST[$name]);
    $filter2 = html_special_chars($filter, ENT_QUOTES, "UTF-8");
    $filter3 = addslashes($filter2);
    return $filter3;
}

function setSession($value = []) 
{
    foreach ($value as $key => $val) {
        $_SESSION[$key] = $val;  
    }
}

function session($name) 
{
    return $_SESSION[$name];
}

function base()
{
	$base_path = $_SERVER["DOCUMENT_ROOT"];
	return $base_path;
}


?>
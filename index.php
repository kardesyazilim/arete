<?php

/*
 * kardesyazilim.net
 * leo@kardesyazilim
 * 05.Haz.2013-16:03:25 
 * index
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

//route 
$q = isset($_GET ['q']) ? $_GET ['q'] : null;
$q = rtrim($q, '/');
$q = explode('/', $q);

?>

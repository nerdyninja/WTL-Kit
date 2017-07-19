<?php
// Database
require_once $_SERVER['DOCUMENT_ROOT'].'/config/database.php';
// Messages
require_once $_SERVER['DOCUMENT_ROOT'].'/config/messages.php';
// Timezone
date_default_timezone_set('Asia/Kolkata');
// Classes to load
function __autoload($class)
{
	require_once $_SERVER['DOCUMENT_ROOT'].'/controller/'.$class.'.php';
}

// WARNING: Do not delete this file
// Author: Omkar Prabhu (nerdyninja)
?>

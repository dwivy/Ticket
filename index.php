<?php
include('head.php');

switch($action){
	default:
		include('main.php');
		break;
	case 'admin';
		include('enforcelogon.php');
		include('adminmain.php');
		break;
	case 'addEvent';
		include('enforcelogon.php');
		include('addevent.php');
		break;
}


include('foot.php');
?>


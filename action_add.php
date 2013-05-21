<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['add']) {
	case 'manufacturer':
		include 'includes/admin/add_manufacturer.php';
		break;
	case 'carmodel':
		include 'includes/admin/add_carmodel.php';
		break;
	case 'alulister':
		include 'includes/admin/add_alulister.php';
		break;
	case 'loft_bund':
		include 'includes/admin/add_loft_bund.php';
		break;
	case 'beklaedninger':
		include 'includes/admin/add_beklaedninger.php';
		break;
	default:
		break;
}
	// header("Location: main.php");
?>
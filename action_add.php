<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['add']) {
	case 'manufacturer':
		include 'includes/admin/add_manufacturer.php';
		header("Location: main.php?adm=1");
		break;
	case 'carmodel':
		include 'includes/admin/add_carmodel.php';
		header("Location: main.php?adm=2");
		break;
	case 'alulister':
		include 'includes/admin/add_alulister.php';
		header("Location: main.php?adm=3");
		break;
	case 'loft_bund':
		include 'includes/admin/add_loft_bund.php';
		header("Location: main.php?adm=4");
		break;
	case 'beklaedninger':
		include 'includes/admin/add_beklaedninger.php';
		header("Location: main.php?adm=5");
		break;
	case 'user':
		include 'includes/admin/add_user.php';
		header("Location: main.php?adm=21");
		break;
	default:
		break;
}
?>
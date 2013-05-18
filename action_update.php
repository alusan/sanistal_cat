<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['update']) {
	case 'manufacturer':
		include 'includes/admin/update_manufacturer.php';
		break;
	case 'model':
		// include 'includes/add_model.php';
		break;
	case 'car':
		// include 'includes/add_car.php';
		break;
	default:
		break;
}
	header("Location: main.php");
?>
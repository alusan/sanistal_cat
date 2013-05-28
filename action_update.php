<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['update']) {
	case 'manufacturer':
		include 'includes/admin/update_manufacturer.php';
		header("Location: main.php?adm=1");
		break;
	case 'carmodel':
		include 'includes/admin/update_carmodel.php';
		header("Location: main.php?adm=2");
		break;
	case 'alulister':
		include 'includes/admin/update_alulister.php';
		header("Location: main.php?adm=3");
		break;
	case 'loft_bund':
		include 'includes/admin/update_loft_bund.php';
		header("Location: main.php?adm=4");
		break;
	case 'beklaedninger':
		include 'includes/admin/update_beklaedninger.php';
		header("Location: main.php?adm=5");
		break;
	default:
		break;
}
?>
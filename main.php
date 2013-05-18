<?php
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");
include 'includes/user_lock.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da" lang="da">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sanistål Beklædningskatalog</title>
		<link rel="stylesheet" href="desktop.css" type="text/css" media="screen" />
		<script src="lib/jquery-1.7.2.min.js"></script>
		<script src="lib/lightbox.js"></script>
		<link rel="stylesheet" href="css/lightbox.css" />
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="jquery.jstree.js"></script>
    <script type="text/javascript" class="source">
	$(function () {
		$("#navigationmenu").jstree({
			"themes" : {
				"theme" : "apple"
			},
			"plugins" : [ "themes", "html_data" ]
		});
	});
	</script>
    
	</head>
	<body>
		<div id="main">
			<div id="topbanner">
				<a href="main.php"><img src="design/logo.jpg" alt="Sanistål Beklædningskatalog" /></a>
			</div>
			<div id="searchbarMenu">
				<div id="sfield">
					<form method="post" action="main.php">
						<div id="sfieldright">
							<div id="sfieldleft">
								<input class="searchfield" name="search" type="text" value="Søg bilens navn, fabrikant..." />
							</div>
						</div>
					</form>
				</div>
				<div id="logoutfield"><a href="log_out.php"><img class="logud" src="design/logud.jpg" /></a></div>
			</div>
			<div id="content">
				<div id="sidebar">
    				<div id="navigationmenu">
<?php
$results_manu = mysql_query("SELECT * FROM fabrikant ORDER BY fabrikant_navn", $conn); 
echo "<ul>";
while ($row_manu = mysql_fetch_array($results_manu)) {
	echo "<li><a class='navilink'>" . $row_manu['fabrikant_navn'];
	$manufacturer_id = $row_manu['fabrikant_id'];
	echo "</a><ul>";
	
	$results_car = mysql_query("SELECT * FROM biler WHERE fabrikant_id='$manufacturer_id' ORDER BY bil_navn", $conn);
		while ($row_car = mysql_fetch_array($results_car)) {
		echo "<li><a class='navilink' href='main.php?bilid=". $row_car['bil_id'] ."'>" . $row_car['bil_navn'] . "</a></li>";	
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
?>
    				</div>
<?php
if ($rights==1) {
	echo "<br /><h3>Admin</h3>";
	echo "<a class='link' href='main.php?adm=1'>Fabrikanter</a><br />";
	echo "<a class='link' href='main.php?adm=2'>Bilmodeller</a><br />";
	echo "<a class='link' href='main.php?adm=3'>Alulister</a><br />";
	echo "<a class='link' href='main.php?adm=4'>Loft og bunde</a><br />";
	echo "<a class='link' href='main.php?adm=5'>Beklædninger</a><br />";
}
?>
				</div>
				<div id="cat_view">
                    <?php
                    if (isset($_REQUEST['bilid']))
                    {
                      include 'includes/pages/carmodel.php';
                    }
					else
				    {
				    	if (isset($_POST['search']))
                    	{
                      	include 'includes/pages/search.php';
                    	}
                    	else {
							if (isset($_REQUEST['adm']) && $rights==1) {
								switch ($_REQUEST['adm']) {
									case 1:
										include 'includes/admin/list_manufacturer.php';
										break;
									case 2:
										include 'includes/admin/list_carmodel.php';
										break;
									case 3:
										include 'includes/admin/list_alulister.php';
										break;
									case 4:
										include 'includes/admin/list_loft_bund.php';
										break;
									case 5:
										include 'includes/admin/list_beklaedninger.php';
										break;
									case 6:
										include 'includes/admin/form_add_manufacturer.php';
										break;
									case 7:
										include 'includes/admin/form_update_manufacturer.php';
										break;
									case 8:
										include 'includes/admin/form_delete_manufacturer.php';
										break;
									case 9:
										include 'includes/admin/form_add_carmodel.php';
										break;
									case 10:
										include 'includes/admin/form_update_carmodel.php';
										break;
									case 11:
										include 'includes/admin/form_delete_carmodel.php';
										break;
									case 12:
										include 'includes/admin/form_add_alulister.php';
										break;
									case 13:
										include 'includes/admin/form_update_alulister.php';
										break;
									case 14:
										include 'includes/admin/form_delete_alulister.php';
										break;
									case 15:
										include 'includes/admin/form_add_loft_bund.php';
										break;
									case 16:
										include 'includes/admin/form_update_loft_bund.php';
										break;
									case 17:
										include 'includes/admin/form_delete_loft_bund.php';
										break;
									case 18:
										include 'includes/admin/form_add_beklaedninger.php';
										break;
									case 19:
										include 'includes/admin/form_update_beklaedninger.php';
										break;
									case 20:
										include 'includes/admin/form_delete_beklaedninger.php';
										break;
									default:
										echo "FEJL: Der er ingen admin funktion her!!";
										break;
								}

							} else {
								include 'includes/pages/frontpage.php';
							}
						}
				    }
                    ?>
				</div>
				
			</div>
		</div>
	</body>
</html>
<?php
mysql_close($conn);
?>
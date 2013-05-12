<?php
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");
include 'includes/user_lock.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
								<input class="searchfield" name="search" type="text" />
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
	echo "<li><a>" . $row_manu['fabrikant_navn'];
	$manufacturer_id = $row_manu['fabrikant_id'];
	echo "</a><ul>";
	
	$results_car = mysql_query("SELECT * FROM biler WHERE fabrikant_id='$manufacturer_id' ORDER BY bil_navn", $conn);
		while ($row_car = mysql_fetch_array($results_car)) {
		echo "<li><a href='main.php?bilid=". $row_car['bil_id'] ."'>" . $row_car['bil_navn'] . "</a></li>";	
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
?>
    				</div>
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
							if (isset($_REQUEST['page']) && $lock_row['rights']==1) {
								echo "Du er kommet til admin med værdien = " . $_REQUEST['page'] . " og " . $lock_row['rights'];
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
<?php
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sanistål Beklædningskatalog</title>
		<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="desktop.css" type="text/css" media="screen" />
		<script type="text/javascript" src="lib/jquery.js"></script>
		<script type="text/javascript" src="jquery.tree.js"></script>

    <script type="text/javascript">
	$(function () {
		$("#navigationmenu").tree({
			ui : {
			theme_name : "classic"
			}
		});
	});
		
    </script>
    
	</head>
	<body>
		<div id="main">
			<div id="topbanner">
				<a href="index.php"><img src="design/logo.jpg" alt="Sanistål Beklædningskatalog" /></a>
			</div>
			<div id="searchbarMenu"></div>
			<div id="content">
				<div id="sidebar">
    				<div id="navigationmenu">
<?php
$results_manu = mysql_query("SELECT * FROM fabrikant ORDER BY fabrikant_navn", $conn); 
echo "<ul>";
while ($row_manu = mysql_fetch_array($results_manu)) {
	echo "<li>" . $row_manu['fabrikant_navn'];
	$manufacturer_id = $row_manu['fabrikant_id'];
	echo "<ul>";
	
	$results_mod = mysql_query("SELECT * FROM bilmodel WHERE fabrikant_id='$manufacturer_id' ORDER BY bilmodel_navn", $conn); 
	while ($row_mod = mysql_fetch_array($results_mod)) {
		echo "<li>";
		echo $row_mod['bilmodel_navn'];
		$model_id = $row_mod['bilmodel_id'];
		echo "<ul>";		
		
		$results_car = mysql_query("SELECT * FROM biler WHERE bilmodel_id='$model_id' ORDER BY bil_navn", $conn); 
		while ($row_car = mysql_fetch_array($results_car)) {
			echo "<li>" . $row_car['bil_navn'] . "</li>";
			
			
		}
		echo "</ul>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
?>
    				</div>
				</div>
				<div id="cat_view">
					<h1>Tilføj</h1>
					<h2>Fabrikant</h2>
					<form method="post" action="action_add.php">
						<table>
							<tr>
								<td><p>Fabrikantnavn:</p></td>
								<td><input type="text" name="manufacturer_name" /></td>
							</tr>
						</table>
						<input type="hidden" name="add" value="manufacturer" />
						<input type="submit" name="submit" value="Tilføj Fabrikant" />
					</form>
				</div>		
			</div>
		</div>
	</body>
</html>
<?php
mysql_close($conn);
?>

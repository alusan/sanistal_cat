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
	
	$results_car = mysql_query("SELECT * FROM biler WHERE fabrikant_id='$manufacturer_id' ORDER BY bil_navn", $conn);
		while ($row_car = mysql_fetch_array($results_car)) {
		echo "<li>" . $row_car['bil_navn'] . "</li>";	
	}
	echo "</ul>";
	echo "</li>";
}
echo "</ul>";
?> 					
    				</div>
				</div>
				<div id="cat_view">
					<div id="left_view">
						<h1>Ford</h1>
						<h2>TRANSIT CONNECT L1</h2>
												
						<table class="alu">
							<tr class="aluFirstRow">
								<td class="alu"><p>Aluminiums-lister</p></td>
								<td class="alu"><p>Længde i cm.</p></td>
							</tr>
							<tr>
								<td class="alu"><p>L1 Vognbund</p></td>
								<td class="alu"><p>1x100 + 1x154</p></td>
							</tr>
						</table>
						<a href="pdf/1433317.pdf"><img class="extraTopMargin" src="design/button_download_pdf.jpg" alt="Download PDF" /></a>
					</div>
					<div id="right_view">
						<a href="index.php"><img src="images_cars/ford_transit.jpg" alt="Ford Transit" /></a>
					</div>
					<div id="bottom_view">
					</div>
						<table class="confitting">
							<tr>
								<td width="50%"><img src="images_fittings/3169158_loft.jpg" alt="loft" title="Sani nr. 3169158" /></td>
								<td width="50%"><img src="images_fittings/3169166_vognbund.jpg" alt="vognbund" title="Sani nr. 3169166" /></td>
							</tr>
							<tr>
								<td><p>LOFT - Sani nr.: 3169158</p></td>
								<td><p>VOGNBUND - Sani nr.: 3169166</p></td>
							</tr>
						</table>
							<h3>BEKLÆDNINGER - Sani nr. 3169141</h3>
						<table class="confitting">
							<tr>
								<td><img src="images_fittings/3169141_1-3.jpg" alt="Beklædning 1-3" title="Sani nr. 3169141" /></td>
								<td><img src="images_fittings/3169141_2-3.jpg" alt="Beklædning 2-3" title="Sani nr. 3169141" /></td>
								<td><img src="images_fittings/3169141_3-3.jpg" alt="Beklædning 3-3" title="Sani nr. 3169141" /></td>
							</tr>
							<tr>
								<td><p>VENSTRE SIDE (1/3)</p></td>
								<td><p>HØJRE SIDE (2/3)</p></td>
								<td><p>SKYDEDØR (3/3)</p></td>
							</tr>
						</table>
				</div>
				
			</div>
		</div>
	</body>
</html>
<?php
mysql_close($conn);
?>
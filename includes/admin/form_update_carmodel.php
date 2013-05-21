<script language="Javascript">
function SelectMoveRows(SS1,SS2)
{ // javascript created by John Bartlett from Cold Fusion Tips-N-Tricks
    var SelID='';
    var SelText='';
    // Move rows from SS1 to SS2 from bottom to top
    for (i=SS1.options.length - 1; i>=0; i--)
    {
        if (SS1.options[i].selected == true)
        {
            SelID=SS1.options[i].value;
            SelText=SS1.options[i].text;
            var newRow = new Option(SelText,SelID);
            SS2.options[SS2.length]=newRow;
            SS1.options[i]=null;
        }
    }
    SelectSort(SS2);
}
function SelectSort(SelList)
{
    var ID='';
    var Text='';
    for (x=0; x < SelList.length - 1; x++)
    {
        for (y=x + 1; y < SelList.length; y++)
        {
            if (SelList[x].text > SelList[y].text)
            {
                // Swap rows
                ID=SelList[x].value;
                Text=SelList[x].text;
                SelList[x].value=SelList[y].value;
                SelList[x].text=SelList[y].text;
                SelList[y].value=ID;
                SelList[y].text=Text;
            }
        }
    }
}

function allSelect()
{
  List = document.forms[1].bru_lister;
  for (i=0;i<List.length;i++)
  {
     List.options[i].selected = true;
  }
  
  List2 = document.forms[1].bru_loftbunde;
  for (i=0;i<List2.length;i++)
  {
     List2.options[i].selected = true;
  }
}
</script>
<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM biler WHERE bil_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Opdater</h1>
<h2>Bilmodel</h2>
<form name="updatecar" onSubmit="allSelect()" method="post" action="action_update.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Fabrikant:</p></td>
			<td>
				<select name="fabrikantid">
<?php
$re_fabrikant = mysql_query("SELECT * FROM fabrikant ORDER BY fabrikant_navn", $conn); 
while ($ro_fabrikant = mysql_fetch_array($re_fabrikant)) {
	echo "<option ";
	if ($fab['fabrikant_id'] == $ro_fabrikant['fabrikant_id']) {
		echo "selected='selected' ";
	}
	echo "value='". $ro_fabrikant['fabrikant_id'] ."'>". $ro_fabrikant['fabrikant_navn'] ."</option>";
}
?>
				</select>
			</td>
		</tr>
		<tr>
			<td><p>Bilnavn:</p></td>
			<td><input type="text" name="bilnavn" value="<?php echo $fab['bil_navn']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Billede (jpg, gif el. png / maks. 5 mb):</p></td>
			<td>
				<input type="file" name="image"><!-- upload af billede her -->
			</td>
		</tr>
		<tr>
			<td><p>PDF Upload (maks. 5 mb):</p></td>
			<td>
				<input type="file" name="pdf"><!-- upload af billede her -->
			</td>
		</tr>
				<tr>
			<td><p>Beklædningssortiment:</p></td>
			<td>
				<select name="beklaedninger">
<?php
$re_bekl = mysql_query("SELECT distinct sani_nr FROM bekladninger ORDER BY sani_nr", $conn); 
while ($ro_bekl = mysql_fetch_array($re_bekl)) {
	echo "<option ";
	if ($fab['be_sani_nr'] == $ro_bekl['sani_nr']) {
		echo "selected='selected' ";
	}
	echo "value='". $ro_bekl['sani_nr'] ."'>Sani nr.: ". $ro_bekl['sani_nr'] ."</option>";
}
?>
				</select>
			</td>
		</tr>
	</table>
	<br />
	<table border="0" cellpadding="3" cellspacing="0">
    <tr>
        <td>
            <select name="bru_lister[]" class="multiboxes" id="bru_lister" MULTIPLE>
<?php
$lister_arr = array();
$re_lister = mysql_query("SELECT * FROM alulister_connect, alulister WHERE alulister_connect.alu_id = alulister.alu_id AND bil_id = '$fab_id' 
								ORDER BY loft_bund", $conn); 
while ($ro_lister = mysql_fetch_array($re_lister)) {
	echo "<option value='". $ro_lister['alu_id'] ."'>". $ro_lister['loft_bund'] ." - ". $ro_lister['length_cm'] ."</option>";
	$lister_arr[] = $ro_lister['alu_id'];
}
?>
            </select>
        </td>
        <td align="center" valign="middle">
            <input type="Button" value="<< Tilføj" style="width:100px" onClick="SelectMoveRows(document.updatecar.ubru_lister,document.updatecar.bru_lister)">
            <br>
            <input type="Button" value="Fjern >>" style="width:100px" onClick="SelectMoveRows(document.updatecar.bru_lister,document.updatecar.ubru_lister)"><br>
        </td>
        <td>
            <select name="ubru_lister" class="multiboxes" MULTIPLE>
<?php
$re_lister2 = mysql_query("SELECT * FROM alulister ORDER BY loft_bund", $conn); 
while ($ro_lister2 = mysql_fetch_array($re_lister2)) {
	$id1 = $ro_lister2['alu_id'];
	if (!in_array($id1, $lister_arr)) {
		echo "<option value='". $ro_lister2['alu_id'] ."'>". $ro_lister2['loft_bund'] ." - ". $ro_lister2['length_cm'] ."</option>";
	}
}
?>
            </select>
        </td>
    </tr>
	</table>
	<br />
		<table border="0" cellpadding="3" cellspacing="0">
    <tr>
        <td>
            <select name="bru_loftbunde[]" class="multiboxes" id="bru_loftbunde" MULTIPLE>
<?php
$loftbund_arr = array();
$re_loftbund = mysql_query("SELECT * FROM loft_bund_connect, loft_bund WHERE loft_bund_connect.sani_nr = loft_bund.sani_nr AND bil_id = '$fab_id' 
								ORDER BY bund_loft, loft_bund.sani_nr", $conn); 
while ($ro_loftbund = mysql_fetch_array($re_loftbund)) {
	echo "<option value='". $ro_loftbund['sani_nr'] ."'>". $ro_loftbund['bund_loft'] ." - ". $ro_loftbund['sani_nr'] ."</option>";
	$loftbund_arr[] = $ro_loftbund['lb_id'];
}
?>
            </select>
        </td>
        <td align="center" valign="middle">
            <input type="Button" value="<< Tilføj" style="width:100px" onClick="SelectMoveRows(document.updatecar.ubru_loftbunde,document.updatecar.bru_loftbunde)">
            <br>
            <input type="Button" value="Fjern >>" style="width:100px" onClick="SelectMoveRows(document.updatecar.bru_loftbunde,document.updatecar.ubru_loftbunde)"><br>
        </td>
        <td>
            <select name="ubru_loftbunde" class="multiboxes" MULTIPLE>
<?php
$re_loftbund2 = mysql_query("SELECT * FROM loft_bund ORDER BY bund_loft, sani_nr", $conn); 
while ($ro_loftbund2 = mysql_fetch_array($re_loftbund2)) {
	$id2 = $ro_loftbund2['lb_id'];
	if (!in_array($id2, $loftbund_arr)) {
		echo "<option value='". $ro_loftbund2['sani_nr'] ."'>". $ro_loftbund2['bund_loft'] ." - ". $ro_loftbund2['sani_nr'] ."</option>";
	}
}
?>
            </select>
        </td>
    </tr>
	</table>
	<br />
	
	
	
	<input type="hidden" name="bil_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="imgname" value="<?php echo $fab['billedenavn']; ?>" />
	<input type="hidden" name="pdfname" value="<?php echo $fab['pdf_filnavn']; ?>" />
	<input type="hidden" name="update" value="carmodel" />
	<input type="submit" name="submit" value="Opdater Bilmodel" />
</form>
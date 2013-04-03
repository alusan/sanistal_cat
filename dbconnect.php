<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn) {
    die('Cannot connect to DB: ' . mysql_error());
}
?>
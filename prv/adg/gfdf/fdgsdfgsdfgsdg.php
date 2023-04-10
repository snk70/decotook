<?php
//This is for Contact
error_reporting(0);
if($_POST["sina"]=="yahossein")
{
	include("../../config_apps.php");
mysql_select_db("tbl_contact",$link);

mysql_query("SET NAMES 'utf8'", $link);
mysql_query("SET CHARACTER SET 'utf8'", $link);
mysql_query("SET character_set_connection = 'utf8'", $link);


$ms_Query="INSERT INTO `tbl_contact` (`r`, `Name`, `Email`, `comment`, `date`, `time`, `ip`) VALUES (NULL, '".$_POST["name"]."', '".$_POST["mail"]."', '".$_POST["cmt"]."', '".$_POST["date"]."', '".$_POST["time"]."', '".$_POST["ip"]."')";


$Query_Result=mysql_query($ms_Query,$link);

echo($Query_Result);

}else
{
header('location:/Error.html');	
}



?>
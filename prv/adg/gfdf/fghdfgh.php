<?php
//This is for comments in posts
error_reporting(0);
if($_POST["yamahmi"]=="agelalazohorek")
{
	include('../../cnfg_DSFg/fsdgsdfgsd.php');
mysql_select_db("tbl_comments",$link);

mysql_query("SET NAMES 'utf8'", $link);
mysql_query("SET CHARACTER SET 'utf8'", $link);
mysql_query("SET character_set_connection = 'utf8'", $link);


$ms_Query="INSERT INTO `tbl_comments` (`Row`, `flag`, `tbl_cmt`, `Name`, `Email`, `Date`, `Time`, `comment`, `ip`) VALUES (NULL, '0', '".$_POST["tb_cmt"]."', '".$_POST["name"]."', '".$_POST["mail"]."', '".$_POST["date"]."', '".$_POST["time"]."', '".$_POST["cmt"]."', '".$_POST["ip"]."')";


$Query_Result=mysql_query($ms_Query,$link);

echo($Query_Result);

}else
{
header('location:/Error.html');	
}



?>
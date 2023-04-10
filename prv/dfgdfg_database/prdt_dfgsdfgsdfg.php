<?php

error_reporting(0);
if(isset($_POST["sgsjkdgjsdfg"]) && $_POST["sgsjkdgjsdfg"]=="sdgsdfgsirdgenrgernger")
{

					include('../cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					

mysql_query("INSERT INTO `tbl_products` (`r`, `cate_title`, `title`, `date`, `time`, `comment_code`, `paper_cmt`, `paper_link`, `img`, `visit_number`) VALUES (".$_POST["r"].", '".$_POST["cate_title"]."', '".$_POST["title"]."', '".$_POST["date"]."', '".$_POST["time"]."', '".$_POST["comment_code"]."', '".$_POST["paper_cmt"]."', '".$_POST["paper_link"]."', '".$_POST["img"]."', '');");
echo("ok");
}
elseif(isset($_POST["sgsjkdgjsdfg"]) && $_POST["sgsjkdgjsdfg"]=="del" && isset($_POST["del_r"]))
{
include('../cnfg_DSFg/fsdgsdfgsd.php');
mysql_query("Delete From tbl_products Where(r='".$_POST["del_r"]."')");
echo("ok");
}
else
{
header('location:/Error.html');	
}

?>
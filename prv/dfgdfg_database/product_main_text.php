<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ویرایش محصولات</title>

<style>

td{border:solid 1px;padding:5px;}
input{float:right;}

</style>

</head>

<body>


<?php




if(isset($_GET["opr"]) && $_GET["opr"]=="edi")
{
	
	echo('<br><br><br><br><br>');
	
	include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);


	$r=mysql_query("SELECT * FROM `tbl_products` WHERE(r='".$_GET["r"]."')");
	
	
	
	$rw=mysql_fetch_array($r);
	
	echo('<form name="frm1" action="" method="get">');
	
	echo('<input type="text" style="display:none;" name="r" value="'.$rw[0].'">');
	
	echo('<input type="text" name="re" value="'.$rw[0].'">');
	
	echo('<input type="text" name="cate_title" value="'.$rw[1].'">');
	echo('<input type="text" name="title" value="'.$rw[2].'">');
	echo('<input type="text" name="date" value="'.$rw[3].'">');
	echo('<input type="text" name="time" value="'.$rw[4].'">');
	echo('<input type="text" name="paper_cmt" value="'.$rw[6].'">');
	echo('<input type="text" name="paper_link" value="'.$rw[7].'">');
	echo('<input type="text" name="img" value="'.$rw[8].'">');
	echo('<input type="text" name="visit_number" value="'.$rw[9].'">');
	echo('<input type="text" style="display:none;" name="opr" value="edi2">');
	
	echo('<input style="width:50px;height:25px;padding:5px;float:right;" type="submit" value="تأیید">');
	
	echo('</form>');
	
	echo('<br><br><br><br><br>');
	
	
}elseif(isset($_GET["opr"]) && $_GET["opr"]=="edi2")
{
include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);


	mysql_query("UPDATE `tbl_products` SET `r`='".$_GET["re"]."' , `cate_title` = '".$_GET["cate_title"]."', `title` = '".$_GET["title"]."', `date` = '".$_GET["date"]."', `time` = '".$_GET["time"]."', `comment_code` = NULL, `paper_cmt` = '".$_GET["paper_cmt"]."', `paper_link` = '".$_GET["paper_link"]."', `img` = '".$_GET["img"]."' WHERE `tbl_products`.`r` = ".$_GET["r"]);
	
	
	
}elseif(isset($_GET["opr"]) && $_GET["opr"]=="del")
{
	
include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);


	$r=mysql_query("SELECT * FROM `tbl_products` WHERE(r='".$_GET["r"]."')");
	$rw=mysql_fetch_assoc($r);

if($rw["paper_link"]!="")
{
$FileName ="../../products/".$rw["paper_link"] ;
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fclose($FileHandle);
unlink($FileName);

}


mysql_query("DELETE FROM `tbl_products` WHERE `tbl_products`.`r` = ".$rw["r"]);

header('location:product_main_text.php');
	
	
	
	
}


?>


<table style="border:solid 1px;float:right;direction:rtl;">


<tr>

<td>سطر</td>

<td>تایتل دسته بندی</td>

<td>تایتل محصول</td>

<td>تاریخ</td>

<td>زمان</td>

<td>کامنت محصول</td>

<td>لینک محصول</td>

<td>آدرس عکس</td>

<td>تعداد بازدید</td>

<td>ویرایش مشخصات</td>

<td>حذف محصول</td>

</tr>

<?php

include('../cnfg_DSFg/fsdgsdfgsd.php');

mysql_query("SET NAMES 'utf8'", $link);
mysql_query("SET CHARACTER SET 'utf8'", $link);
mysql_query("SET character_set_connection = 'utf8'", $link);


$r=mysql_query("SELECT * FROM `tbl_products`");


while($rw=mysql_fetch_array($r))
{
	echo('</tr>');
	
	
	echo('<td>'.$rw[0].'</td>');
	echo('<td>'.$rw[1].'</td>');
	echo('<td>'.$rw[2].'</td>');
	echo('<td>'.$rw[3].'</td>');
	echo('<td>'.$rw[4].'</td>');
	echo('<td>'.$rw[6].'</td>');
	echo('<td>'.$rw[7].'</td>');
	echo('<td>'.$rw[8].'</td>');
	echo('<td>'.$rw[9].'</td>');
	echo('<td><a href="?opr=edi&r='.$rw[0].'">ویرایش</a></td>');
	echo('<td><a href="?opr=del&r='.$rw[0].'">حذف</a></td>');
	
	echo('</tr>');
}


?>




</table>


</body>
</html>
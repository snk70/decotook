<?php

if(isset($_GET["mode"]))
{
	include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);
	
	
if($_GET["mode"]=="mok")
{
mysql_query("UPDATE `tbl_comments` SET `flag` = '1' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}elseif($_GET["mode"]=="mreject")
{
mysql_query("UPDATE `tbl_comments` SET `flag` = '0' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}elseif($_GET["mode"]=="mdel")
{
mysql_query("UPDATE `tbl_comments` SET `flag` = '2' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}elseif($_GET["mode"]=="cdel")
{
mysql_query("UPDATE `tbl_contacts` SET `flag` = '2' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}elseif($_GET["mode"]=="creject")
{
mysql_query("UPDATE `tbl_contacts` SET `flag` = '0' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}elseif($_GET["mode"]=="cok")
{
mysql_query("UPDATE `tbl_contacts` SET `flag` = '1' WHERE `tbl_comments`.`Row` = ".$_GET["r"]);
}

header(currentPageUrl());


}




function currentPageUrl()
{
    $result = 'http';
    if (isset($_SERVER["HTTPS"]) and $_SERVER["HTTPS"] == "on") {
        $result .= "s";
    }
    $result .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $result .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $result .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $result;
}

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
td
{
border:solid 2px;padding:10px;	
}

p
{
font-size:16px;	
}
.rf
{
float:right;	
}

</style>
</head>

<body>
<p>&ensp;</p>
<a href="../../prv/adg/gfdf/mng_fdajbsfjwf_pnl_kjfdgkjsdf_wbs/Default.aspx"><button>کنترل پنل سایت</button></a>
<p>&ensp;</p><p>&ensp;</p>
<p>&ensp;</p><p>&ensp;</p><p class="rf">جدول نظرات</p><p>&ensp;</p><p>&ensp;</p>
<table style="border:solid 2px;direction:rtl;float:right;">

<td>ردیف</td>

<td>نام کاربر</td>

<td>ایمیل</td>

<td>نظر</td>

<td>وضعیت</td>

<td>کد پست</td>


<td>تاریخ</td>

<td>زمان</td>


<td>آیپی</td>

<td>تأیید نظر</td>

<td>رد نظر</td>

<td>غیر فعال کردن</td>

<?php 

include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);
	
	$rows=	mysql_query("SELECT * FROM `tbl_comments`");
while($r=mysql_fetch_assoc($rows))
{
	
	echo("<tr><td>".$r["Row"]."</td><td>".$r["Name"]."/td><td>".$r["Email"]."</td><td>".$r["comment"]."</td><td>".$r["flag"]."</td><td>".$r["tbl_cmt"]."</td><td>".$r["Date"]."</td><td>".$r["Time"]."</td><td>".$r["ip"]."</td><td><a href=\"?mode=mok&r=".$r["Row"]."\">تأیید</a></td><td><a href=\"?mode=mreject&r=".$r["Row"]."\">رد کردن</a></td><td><a href=\"?mode=mdel&r=".$r["Row"]."\">حذف</a></td></td></tr>");
		
}

?>


</table>
<p>&ensp;</p><p>&ensp;</p><p>&ensp;</p><p>&ensp;</p><p>&ensp;</p><p class="rf">جدول تماس با ما</p><p>&ensp;</p><p>&ensp;</p>

<table style="border:solid 2px;direction:rtl;float:right;">

<td>ردیف</td>

<td>نام کاربر</td>

<td>ایمیل</td>

<td>نظر</td>

<td>وضعیت</td>

<td>کد پست</td>


<td>تاریخ</td>

<td>زمان</td>


<td>آیپی</td>

<td>تأیید نظر</td>

<td>رد نظر</td>

<td>غیر فعال کردن</td>

<?php 

include('../cnfg_DSFg/fsdgsdfgsd.php');

	mysql_query("SET NAMES 'utf8'", $link);
	mysql_query("SET CHARACTER SET 'utf8'", $link);
	mysql_query("SET character_set_connection = 'utf8'", $link);
	
	$rows=	mysql_query("SELECT * FROM `tbl_contacts`");
while($r=mysql_fetch_assoc($rows))
{
	
	echo("<tr><td>".$r["Row"]."</td><td>".$r["Name"]."/td><td>".$r["Email"]."</td><td>".$r["comment"]."</td><td>".$r["flag"]."</td><td>".$r["tbl_cmt"]."</td><td>".$r["Date"]."</td><td>".$r["Time"]."</td><td>".$r["ip"]."</td><td><a href=\"?mode=cok&r=".$r["Row"]."\">تأیید</a></td><td><a href=\"?mode=creject&r=".$r["Row"]."\">رد کردن</a></td><td><a href=\"?mode=cdel&r=".$r["Row"]."\">حذف</a></td></td></tr>");
		
}

?>


</table>

</body>
</html>
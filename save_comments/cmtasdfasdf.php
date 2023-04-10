<!doctype html>
<html>
<head>
	<link href="../css/style.css" rel="stylesheet">
<meta charset="utf-8">
<title>ثبت پیام</title>
</head>

<body>



<?php


date_default_timezone_set("Asia/Tehran");

if(isset($_POST["deco"]))
{
					include('../prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					mysql_query('INSERT INTO `tbl_contacts` (`Row`, `Name`, `Email`, `Time`, `comment`, `ip`) VALUES (NULL, \''.$_POST["name"].'\', \''.$_POST["email"].'\', \''.date("Y/n/d").'|'.date("g:i:s a").'\', \''.$_POST["message"].'\', \''.$_SERVER['REMOTE_ADDR'].'\')');


echo('<br><br><br><br><br><br><br><br><br><br><br><br><br><h3 class="cntr">با تشکر از شما ، پیام شما ثبت گردید و در اسرع وقت به آن رسیدگی میشود </h3><br><br>');
echo('<a class="cntr" href="http://decotook.com"><p class="cntr">برای انتقال به صفحه اصلی کلیک کنید </p></a>');

}
else
{
header('location:/Error.html');	
}

?>

</body>
</html>
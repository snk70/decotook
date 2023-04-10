
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>دسته بندی مطالب</title>



<style>


.fl_r
{
float:right;	
}

input
{
padding:10px;	
}



</style>

</head>

<body>
<br>

<p class="fl_r">ویرایش دسته های مطالب</p><br><br><br>
<a href="cat_prd_dfgsdfgsdfgsdg.php" class="fl_r"><button class="fl_r">رفتن به صفحه دسته محصولات</button></a>

<br><br><br>
<?php


if(isset($_GET["opr"]))
{
	
	include('fsdgsdfgsd.php');
	
	if($_GET["opr"]=="del")
	{
		
		mysql_query('DELETE FROM `tbl_categories` WHERE `r` = '.$_GET["r"]);
			
	}elseif($_GET["opr"]=="ed")
	{
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					$rows2 = mysql_query('SELECT * FROM `tbl_categories` WHERE (r=\''.$_GET["r"].'\')');
					$r2=mysql_fetch_assoc($rows2);
					
					
					
					echo('<form method="get" action="#" dir="rtl">');
					
					
					echo('<input type="text" name="r"  value="'.$r2["r"].'">');
					
					echo('<input type="text" name="text"  value="'.$r2["text"].'">');
					
					echo('<input type="text" name="search_value"  value="'.$r2["search_value"].'">');
					
					echo('<input type="text" name="sub_cat"  value="'.$r2["sub_cat"].'">');
					
					echo('<input type="text" name="r0"  style="display:none;" value="'.$_GET["r"].'">');
					
					echo('<input type="text" name="opr"  style="display:none;" value="up">');
					
					echo('<input type="submit" value="اعمال تغییرات">');
					
					echo('</form>');
					
	}elseif($_GET["opr"]=="up")
	{
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					
					mysql_query("UPDATE `tbl_categories` SET `r` = '".$_GET["r"]."', `text` = '".$_GET["text"]."', `search_value` = '".$_GET["search_value"]."', `sub_cat` = '".$_GET["sub_cat"]."' WHERE (`r` = ".$_GET["r0"].")");
					
					
	}elseif($_GET["opr"]=="add")
	{
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);	
					
					mysql_query("INSERT INTO `tbl_categories` (`r`, `text`, `search_value`, `sub_cat`) VALUES (NULL, '".$_GET["text"]."', '".$_GET["search_value"]."', '".$_GET["sub_cat"]."')");
					
	}
	
}


					
	if(isset($_GET["opr"])==false)
	{
					echo('<form method="get" action="#" dir="rtl">');
					
					
					echo('<input placeholder="متن ظاهری" type="text" name="text"  value="">');
					
					echo('<input placeholder="کلمه کلیدی" type="text" name="search_value"  value="">');
					
					echo('<input placeholder="دسته یا زیر دسته" type="text" name="sub_cat"  value="">');
					
					
					echo('<input type="text" name="opr"  style="display:none;" value="add">');
					
					echo('<input type="submit" value="اضافه کردن">');
					
					echo('</form>');	
	}


?>


<br><br><br><br><br>
<?php

if(isset($_GET["opr"]))
{
	if($_GET["opr"]=="add" || $_GET["opr"]=="del" || $_GET["opr"]=="up" || $_GET["opr"]=="ed")
	{
		echo('<a href="?" class="fl_r"><button>اضافه کردن دسته</button></a>
<br><br>');
	}
}

?>

<table border="1" dir="rtl" cellpadding="5" class="fl_r">

<tr>

<td>ویرایش</td>

<td>سطر</td>

<td>متن ظاهری</td>

<td>کلمه کلیدی</td>

<td>زیر دسته</td>

<td>حذف</td>

</tr>

<?php

					include('fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					$rows = mysql_query('SELECT * FROM `tbl_categories`');
					
					
					
					
					while($r=mysql_fetch_assoc($rows))
					{
						
						echo('<tr>');
						
						echo('<td>');
							echo('<a href="?opr=ed&r='.$r["r"].'">ویرایش</a>');
						echo('</td>');
						
						
						echo('<td>');
							echo($r["r"]);
						echo('</td>');
						
						
						echo('<td>');
							echo($r["text"]);
						echo('</td>');
						
						echo('<td>');
							echo($r["search_value"]);
						echo('</td>');
						
						
						echo('<td>');
							echo($r["sub_cat"]);
						echo('</td>');
						
						
						echo('<td>');
							echo('<a href="?opr=del&r='.$r["r"].'">حذف</a>');
						echo('</td>');
						
						echo('</tr>');
						
						
					
						
					}


?>



</table>

</body>
</html>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>محصولات و خدمات</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="fa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META NAME="Description" CONTENT="محصولات و خدمات دکوتوک , صاحبان حرفه , اهالی فن">
<META NAME="Keywords" CONTENT="دکوتوک , محصولات , خدمات">

    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    
	<link href="css/style.css" rel="stylesheet">
    <link href="css/size.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- =======================================================
        Theme Name: OnePage
        Theme URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
  <body class="bg_Kerem">


	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
					<div class="site-logo">
						<a href="index.php" class="brand"><img src=""></a>
					</div>

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							  <li><a href="index.php">صفحه اصلی</a></li>
                              <li><a href="index.php#portfolio">مطالب</a></li>
              
              
      <li><a href="index.php#features">محصولات و خدمات</a></li>
            
            
            <li><a href="paper.php?search_v=ترفند">ترفند</a></li>


            
            
            

              
              
          </ul>
            
            
            
            
            
					</div>
					<!-- /.Navbar-collapse -->		 
			</div>
		</div>		
	</nav>
    
   
	<!--/#about-->
   
	<!--/#portfolio-item-->
	
	
		<div class="container" style="width:100%;">
        <p class="p_br_1">&ensp;</p>
        
		
     
    
        <div class="prp_content">
        
           <?php
		
		if(isset($_GET["search_v"]))
		{
			echo('<a href="index.php" class="fl_r pt3">صفحه اصلی&ensp;</a><a class="fl_r pt3">/&ensp;</a><a class="pt3 fl_r">'.$_GET["search_v"].'</a><br>');
		}
		?>
        
  <p class="pt1 mrg_top_20">مطالب</p>
  <h1 class="pt3 fs16">برای یافتن مطالب مورد نظر در حوزه دکوراسیون داخلی ، میتوانید ادسته مورد نظر را از منوی کناری انتخاب نمایید</h1>
        <hr class="h_height2">
        
        <?php
		
		
		
			
			
					include('prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					mysql_query('SELECT * FROM `tbl_products`');
					
					
					
	if(isset($_GET["search_v"]) || isset($_GET["sort_v"]))
	{
			if(isset($_GET["search_v"]) && isset($_GET["sort_v"])==False)
			{
				
				
				$rows2=mysql_query('SELECT * FROM `tbl_products` WHERE (cate_title LIKE \''.$_GET["search_v"].'%\' OR cate_title LIKE \'%'.$_GET["search_v"].'\')');
	
				
			}
		
			if(isset($_GET["sort_v"]) && isset($_GET["search_v"])==False)
			{
				
				$sort_cat_1=($_GET["sort_v"]-1)*10;
				$sort_cat_2=$_GET["sort_v"]*10;
				
		$rows2=	mysql_query('SELECT * FROM `tbl_products` WHERE(r>'.$sort_cat_1.' AND r<='.$sort_cat_2.')');
				
				
			}
			
			if(isset($_GET["sort_v"]) && isset($_GET["search_v"]))
			{
				
				
		$rows2=	mysql_query('SELECT * FROM `tbl_products` WHERE (cate_title LIKE \''.$_GET["search_v"].'%\' OR cate_title LIKE \'%'.$_GET["search_v"].'\' )');
		
	
		
			}
				
	}else
	{
		
		$rows2=	mysql_query('SELECT * FROM `tbl_products` WHERE(r>0 AND r<=10)');
		
	}
		
			
			while($r2=mysql_fetch_assoc($rows2))
			{
				echo('<a href="papers/'.$r2["paper_link"].'"><div class="prp_div">');
				echo('<img src="'."papers/files/pictures/".$r2["img"].'" class="img_1">');
				echo('<h2 class="cl_gray pt2">'.$r2["title"].'</h2>');
				echo('<h3 class="cl_gray pt3">'.$r2["paper_cmt"].'</h3></div></a>');
				
				
			}
			
			
		?>
        
      
        
            <div class="dv_pages">
        
      
        
        
        <?php
		
		
		
		if(isset($_GET["search_v"]))
		{
			
		}else
		{
		$row3=mysql_query('SELECT (r) FROM `tbl_products`');
		
		$row_num=mysql_num_rows($row3);
		
	
		
		if($row_num>10)
		{
			
		for($i=1;$i<ceil($row_num/10)+1;$i++)
		{
			
			echo('<a class="cntr" href="?sort_v='.$i.'">'.$i.'</a>&ensp;');
			
		}
			
		}
		}
		
		
		
		?>
        
        </div>
        
        </div>
        
        
        
        
        
       <div class="side_menu">
       	
        
        <?php
		
		include('prv/cnfg_DSFg/fsdgsdfgsd.php');
		mysql_query("SET NAMES 'utf8'", $link);
		mysql_query("SET CHARACTER SET 'utf8'", $link);
		mysql_query("SET character_set_connection = 'utf8'", $link);
		$rows=mysql_query('SELECT search_value,text,sub_cat FROM `tbl_cat_prd`');
		
		
		while($r=mysql_fetch_assoc($rows))
		{
			if($r["sub_cat"]=="0")
			{
				echo('<h3 class="fs16">'.$r["text"].'</h3>');
				
			}else
			{
				echo('<ul><li><a href="?search_v='.$r["search_value"].'" class="cl_gray fs14">'.$r["text"].'</a></li></ul>');
			}
		}
		
		?>
        
        
        
        
              
       </div>
        
        
        
        
      
        
        
        
        
		</div>		

	
	
		
<footer id="footer" class="midnight-blue" style="padding:50px;height:500px;margin-top:5px;">

   
   
<div class="aaa_footer dv_footer">

<p><a href="" class="footer_1 fs16">درباره ما</a></p>
<hr class="hr_footer aaa_hr_footer">
<p><a href="contact.html" class="footer_1 fs16">تماس با ما</a></p>
<p><a href="cooperation.html" class="footer_1 fs16">همکاری با دکوتوک</a></p>
<br>
<p><a href="" class="footer_1 fs16">دکوتوک در شبکه های اجتماعی</a></p>
<hr class="aaa_hr_footer hr_footer">
<a href="https://t.me/joinchat/AAAAAECxDoBp_6S1Jm7dBw" title="کانال تلگرام دکوتوک" target="_blank"><img src="images/telegram.png" alt="کانال تلگرام دکوتوک"></a>
<a href="https://www.instagram.com/decotook/" title="پیج اینستاگرام دکوتوک" target="_blank"><img src="images/instagram.png" alt="پیج اینستاگرام دکوتوک"></a>
<a href="https://www.facebook.com/decotook/" title="صفحه فیسبوک دکوتوک" target="_blank"><img src="images/facebook.png" alt="صفحه فیسبوک دکوتوک"></a>
<a href="https://www.linkedin.com/company/decotook" title="صفحه لینکدین دکوتوک" target="_blank"><img src="images/linkedin.png" alt="صفحه لینکدین دکوتوک"></a>
<a href="http://www.aparat.com/decotook" title="کانال آپارات دکوتوک" target="_blank"><img src="images/aparat.png" alt="کانال آپارات دکوتوک"></a>



</div>



<div class="aaa_dv_footer dv_footer">


</div>

<div class="aaa_dv_footer dv_footer">

<a href="" class="footer_1 fs16"></a>
</div>
   
   
    </footer><!--/#footer-->




























	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="../js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <title>ایده های ناب برای دکوراسیون داخلی منزل، اداره، فضای داخلی و فضای بیرونی</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="fa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="مطالب مهم و مفید در طراحی دکوراسیون داخلی و خرید محصولات و لوازم ساختمانی راهکارهای کسب لذت و آرامش در خانه و اداره">
<meta name="keywords" content="راهنمای دکوراسیون داخلی, ترفندهای تغییر دکوراسیون,  رنگ های مناسب در دکوراسیون داخلی, راهنمای چیدمان وسایل خانه, چیدمان اثاث, نکات مهم در خرید محصولات ساختمانی, نکات مهم در بازسازی و تغییر دکوراسیون">

    <!-- Bootstrap -->
    <link href="css/min.css" rel="stylesheet">
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
						<a href="index.php" class="brand">
                        
                        <img src="images/logo.png" alt="دکوتوک ، مرجع تخصصی دکوراسیون داخلی">
                        
                        </a>
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
             <p onClick="rs_content()" class="fl_l op_close_menu" id="op_close_menu">+</p>
            
		</div>		
	</nav>
    
   
	<!--/#about-->
   
	<!--/#portfolio-item-->
	            
	
		<div class="container wdt_100">
        
       
        
        <p class="p_br_1">&ensp;</p>
        
		
     
    
    

    <p class="p_br_1">&ensp;</p>
    

        <div class="prp_content" id="prp_content">
        
           <?php
		   error_reporting(0);
		   
		
		if(isset($_GET["search_v"]))
		{
			
					include('prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					$row=mysql_query('SELECT * FROM `tbl_categories` WHERE (search_value=\''.$_GET["search_v"].'\')',$link);
					$r=mysql_fetch_assoc($row);
			
			echo('<a href="index.php" class="fl_r pt3">صفحه اصلی&ensp;</a><a class="fl_r pt3">/&ensp;</a><a href="paper.php" class="fl_r pt3">مطالب</a><a class="fl_r pt3">/&ensp;</a><a class="pt3 fl_r">'.$r["text"].'&ensp;</a><br>');
		}else
		{
			echo('<a href="index.php" class="fl_r pt3">صفحه اصلی&ensp;</a><a class="fl_r pt3">/&ensp;</a><a href="paper.php" class="fl_r pt3">مطالب</a><br>');
		}
		?>
        
  <p class="pt1 mrg_top_20">مطالب</p>
  <h1 class="pt3 fs16">برای یافتن مطالب مورد نظر در حوزه دکوراسیون داخلی ، میتوانید دسته مورد نظر را از منوی کناری انتخاب نمایید</h1>
        <hr class="h_height2">
        
        <?php
					include('prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					
					
					
	if(isset($_GET["search_v"]) || isset($_GET["sort_v"]))
	{
			if(isset($_GET["search_v"]) && isset($_GET["sort_v"])==False)
			{
				
				
				$rows2=mysql_query('SELECT * FROM `tbl_papers` WHERE (cate_title LIKE \'%\' \''.$_GET['search_v'].'\' \'%\') ORDER BY `r` DESC',$link);
				$lvl=0;
				while($r2=mysql_fetch_assoc($rows2))
				{
					if($lvl<10)
					{
				echo('<a class="dc_none" href="papers/'.$r2["paper_link"].'">');
				echo('<div class="portfolio-item decor_dis fl_r">');
				echo('<div class="recent-work-wrap">');
				echo('<img src="images/portfolio/'.$r2["img"].'" class="img-responsive">');
				echo('<div class="prt_comment">');
				echo('<p class="prt_comment_font2">'.$r2["title"].'</p>');
				echo('</div></div>');
				
				echo('<h2 class="cl_gray pt2 just_class">'.$r2["paper_cmt"].'</h2>');
				
				echo('</a></div>');
				$lvl++;
					}
				}
	
				
			}
		
			if(isset($_GET["sort_v"]) && isset($_GET["search_v"])==False)
			{
				$rows2=mysql_query('SELECT * FROM `tbl_papers` ORDER BY `r` DESC',$link);
				$lvl=0;
				while($r2=mysql_fetch_assoc($rows2))
				{
					$lvl++;
					if($lvl<=$_GET["sort_v"]*10 && $lvl>($_GET["sort_v"]-1)*10)
					{
				echo('<a class="dc_none" href="papers/'.$r2["paper_link"].'">');
				echo('<div class="portfolio-item decor_dis fl_r">');
				echo('<div class="recent-work-wrap">');
				echo('<img src="images/portfolio/'.$r2["img"].'" class="img-responsive">');
				echo('<div class="prt_comment">');
				echo('<p class="prt_comment_font2">'.$r2["title"].'</p>');
				echo('</div></div>');
				
				echo('<h2 class="cl_gray pt2 just_class">'.$r2["paper_cmt"].'</h2>');
				
				echo('</a></div>');
					}
				}
				
			}
			
			if(isset($_GET["sort_v"]) && isset($_GET["search_v"]))
			{
				
				
				$rows2=	mysql_query('SELECT * FROM `tbl_papers` WHERE (cate_title LIKE \''.$_GET["search_v"].'%\' OR cate_title LIKE \'%'.$_GET["search_v"].'\' ) ORDER BY `r` DESC');
		
				$lvl=0;
				while($r2=mysql_fetch_assoc($rows2))
				{
					$lvl++;
					if($lvl<=$_GET["sort_v"]*10 && $lvl>($_GET["sort_v"]-1)*10)
					{
				echo('<a class="dc_none" href="papers/'.$r2["paper_link"].'">');
				echo('<div class="portfolio-item decor_dis fl_r">');
				echo('<div class="recent-work-wrap">');
				echo('<img src="images/portfolio/'.$r2["img"].'" class="img-responsive">');
				echo('<div class="prt_comment">');
				echo('<p class="prt_comment_font2">'.$r2["title"].'</p>');
				echo('</div></div>');
				
				echo('<h2 class="cl_gray pt2 just_class">'.$r2["paper_cmt"].'</h2>');
				
				echo('</a></div>');
					}
				}
		
			}
				
	}else
	{
				$rows2=mysql_query('SELECT * FROM `tbl_papers` ORDER BY `r` DESC',$link);
				$lvl=0;
				while($r2=mysql_fetch_assoc($rows2))
				{
					$lvl++;
					if($lvl<=10 && $lvl>0)
					{
						
				echo('<a class="dc_none" href="papers/'.$r2["paper_link"].'">');
				echo('<div class="portfolio-item decor_dis fl_r">');
				echo('<div class="recent-work-wrap">');
				echo('<img src="images/portfolio/'.$r2["img"].'" class="img-responsive">');
				echo('<div class="prt_comment">');
				echo('<p class="prt_comment_font2">'.$r2["title"].'</p>');
				echo('</div></div>');
				
				echo('<h2 class="cl_gray pt2 just_class">'.$r2["paper_cmt"].'</h2>');
				
				echo('</a></div>');

					}
				}
	}
		
			
			
		?>
        

        
        <div class="dv_pages">
        
      
        
        
        <?php
		
		include('prv/cnfg_DSFg/fsdgsdfgsd.php');
		
		if(isset($_GET["search_v"]))
		{
			$row=mysql_query('SELECT COUNT(r) FROM `tbl_papers` WHERE (cate_title LIKE \'%\' \''.$_GET["search_v"].'\' \'%\')',$link);
		}else
		{
		$row=mysql_query('SELECT COUNT(r) FROM `tbl_papers`',$link);
		}
		$rn=mysql_fetch_assoc($row);
		
		if($rn["COUNT(r)"]>10)
		{
			
			for($i=1;$i<ceil($rn["COUNT(r)"]/10)+1;$i++)
			{
				echo('<a class="cntr" href="?sort_v='.$i.'">'.$i.'</a>&ensp;');
			}
			
		}
		
		?>
        
        </div>
        
        </div>
        
        
        
        
        
       <div class="side_menu" id="side_menu">
       	
        
        <?php
		
		include('prv/cnfg_DSFg/fsdgsdfgsd.php');
		mysql_query("SET NAMES 'utf8'", $link);
		mysql_query("SET CHARACTER SET 'utf8'", $link);
		mysql_query("SET character_set_connection = 'utf8'", $link);
		$rows=mysql_query('SELECT search_value,text,sub_cat FROM `tbl_categories`');
		
		
		while($r=mysql_fetch_assoc($rows))
		{
			if($r["sub_cat"]=="0")
			{
				echo('<h3 class="fs14">'.$r["text"].'</h3>');
				
			}elseif($r["sub_cat"]=="1")
			{
				echo('<ul><li><a href="?search_v='.$r["search_value"].'" class="cl_gray fs12">'.$r["text"].'</a></li></ul>');
			}
		}
		
		?>
        
        
        
        
              
       </div>
        
        
        
        
      
        
        
        
        
		</div>		

	
	
	<footer id="footer" class="midnight-blue">
        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
					</div>
                   <p class="font_sina">کلیه حقوق ، محتوا و مطالب این سایت متعلق به دکوتوک می باشد .</p>
                   <p class="font_sina">استفاده از مطالب <a href="#" target="_blank">سایت دکوتوک</a> با ذکر منبع و لینک مربوطه بلا مانع است .</p>
                   <br>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=OnePage
                        -->
                        
                    </div>
                </div>
				
                <div class="top-bar">			
					<div class="col-lg-12">
					   <div class="social">
							<ul class="social-share">
                            <a href="index.php#contact"><p class="fs16 font_sina">تماس با ما</p></a><br>
								<p class="font_sina">دکوتوک در شبکه های اجتماعی</p>
<hr class="aaa_hr_footer hr_footer">
<a href="https://t.me/joinchat/AAAAAECxDoBp_6S1Jm7dBw" title="کانال تلگرام دکوتوک" target="_blank"><img src="images/telegram.png" alt="کانال تلگرام دکوتوک"></a>
<a href="https://www.instagram.com/decotook/" title="پیج اینستاگرام دکوتوک" target="_blank"><img src="images/instagram.png" alt="پیج اینستاگرام دکوتوک"></a>
<a href="https://www.facebook.com/decotook/" title="صفحه فیسبوک دکوتوک" target="_blank"><img src="images/facebook.png" alt="صفحه فیسبوک دکوتوک"></a>
<a href="https://www.linkedin.com/company/decotook" title="صفحه لینکدین دکوتوک" target="_blank"><img src="images/linkedin.png" alt="صفحه لینکدین دکوتوک"></a>
<a href="http://www.aparat.com/decotook" title="کانال آپارات دکوتوک" target="_blank"><img src="images/aparat.png" alt="کانال آپارات دکوتوک"></a>
							</ul>
					   </div>
					</div>
				</div>
			</div>
		</div>
    </footer><!--/#footer-->



























    <script type="text/javascript">
    
    function rs_content()
	{
	if(document.getElementById("prp_content").style.display=="none")
	{
		document.getElementById('prp_content').style.display="block";
		document.getElementById('side_menu').style.display="none";
		document.getElementById('op_close_menu').innerHTML='+';
		
	}else
	{
		document.getElementById('prp_content').style.display="none";
		document.getElementById('side_menu').style.display="block";
		document.getElementById('op_close_menu').innerHTML='x';
	}

	}
	
    </script>
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>

	<script src="js/wow.min.js"></script>

</body>
</html>
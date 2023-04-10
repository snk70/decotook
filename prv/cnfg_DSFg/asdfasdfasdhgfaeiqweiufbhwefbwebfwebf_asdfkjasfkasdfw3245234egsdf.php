<?php
$tbl_cmt="cmt_code_deco";

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>title_paper_sina</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="fa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="descryption_paper_sina">
<meta name="keywords" content="keywords_paper_sina">


    <!-- Bootstrap -->
    <link href="../../css/min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../favicon.ico">
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
						<a href="../../index.php" class="brand">
                        
                        	<img src="../../images/logo.png" alt="دکوتوک ، مرجع تخصصی دکوراسیون داخلی">
                        
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
							  <li><a href="../../index.php">صفحه اصلی</a></li>
                              <li><a href="../../index.php#portfolio">مطالب</a></li>
              
              
      <li><a href="../../index.php#features">محصولات و خدمات</a></li>
            
            
            <li><a href="../../paper.php?search_v=ترفند">ترفند</a></li>


            
            
            

              
              
          </ul>
            
            
            
            
            
					</div>
					<!-- /.Navbar-collapse -->		 
			</div>
		</div>		
	</nav>
   
	<!--/#about-->
   
	<!--/#portfolio-item-->
	
	
		<div class="container wdt_100">
<p class="p_br_1">&ensp;</p>
		
        
    
        <div class="prp_content bg_white">
        <p>&ensp;</p><p>&ensp;</p>
 paper_product_path_link
        <p>&ensp;</p><p>&ensp;</p>
        <div class="title_dv">
        <p class="title_dv_text">title_paper_sina</p>
        </div>
        
        
        
        
        
        
        <p>&ensp;</p>
        

        text_body_sina_sdfgkjbkln_1379


<p>&ensp;</p>
                   <?php			
			
					include('../../prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
					
					$rows2= mysql_query("select count(*) from tbl_comments where(flag=1 and tbl_cmt='".$tbl_cmt."')",$link);
					
					
					
					$r2=mysql_fetch_assoc($rows2);
				
						
						echo('<p class="cl_organization_1">'.$r2["count(*)"].' دیدگاه ثبت شده است</p>');


?>
<a class="btn btn-default" href="../../index.php">بازگشت به صفحه اصلی</a>  
               
               
           <p class="p_br_1">&ensp;</p>                  
<a href="https://telegram.me/share/url?url=_share_link_paper" target="_blank"><img src="../images/telegram.png"></a>
<a href="http://www.facebook.com/sharer.php?u=_share_link_paper" target="_blank"><img src="../images/facebook.png"></a><p class="p_br_1">&ensp;</p><p>دیدگاه خود را ارسال نمایید</p>
               
              <form action="../../save_comments/Default.aspx" method="post" role="form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="نام" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="mail" placeholder="پست الکترونیکی" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="7" name="cmt" data-rule="required" data-msg="Please write something for us" placeholder="دیدگاه"></textarea>
                                <div class="validation"></div>
                            </div>
                            <input name="tb" class="tb_hide" value="cmt_code_deco">
                            
                            <input type="submit" class="btn btn-default" value="ارسال دیدگاه">
                        </form>		       
        </div>

        
          <div class="side_propagation">
       
               
          </div>
            
            
		<div class="prp_content">
        	
            
            <?php
			
			
					include('../../prv/cnfg_DSFg/fsdgsdfgsd.php');
					mysql_query("SET NAMES 'utf8'", $link);
					mysql_query("SET CHARACTER SET 'utf8'", $link);
					mysql_query("SET character_set_connection = 'utf8'", $link);
			
			
				$rows=mysql_query('SELECT `Name`,`comment`,`Date`,`Time` FROM `tbl_comments` WHERE(flag=\'1\' AND tbl_cmt=\''.$tbl_cmt.'\')');
					
					
					while($r=mysql_fetch_assoc($rows))
					{
						
						echo('<a class="cl_gray">'.$r["Name"].'&ensp;&ensp;&ensp;&ensp;'.$r["Date"].'&ensp;-&ensp;'.$r["Time"].'</a><div class="ds"></div>');
						
						echo('<pre class="cmt">'.$r["comment"].'</pre>');
						
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
                            <a href="../index.php#contact"><p class="fs16 font_sina">تماس با ما</p></a><br>
								<p class="font_sina">دکوتوک در شبکه های اجتماعی</p>
<hr class="aaa_hr_footer hr_footer">
<a href="https://t.me/joinchat/AAAAAECxDoBp_6S1Jm7dBw" title="کانال تلگرام دکوتوک" target="_blank"><img src="../images/telegram.png" alt="کانال تلگرام دکوتوک"></a>
<a href="https://www.instagram.com/decotook/" title="پیج اینستاگرام دکوتوک" target="_blank"><img src="../images/instagram.png" alt="پیج اینستاگرام دکوتوک"></a>
<a href="https://www.facebook.com/decotook/" title="صفحه فیسبوک دکوتوک" target="_blank"><img src="../images/facebook.png" alt="صفحه فیسبوک دکوتوک"></a>
<a href="https://www.linkedin.com/company/decotook" title="صفحه لینکدین دکوتوک" target="_blank"><img src="../images/linkedin.png" alt="صفحه لینکدین دکوتوک"></a>
<a href="http://www.aparat.com/decotook" title="کانال آپارات دکوتوک" target="_blank"><img src="../images/aparat.png" alt="کانال آپارات دکوتوک"></a>
							</ul>
					   </div>
					</div>
				</div>
			</div>
		</div>
    </footer><!--/#footer-->
			<script src="../js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>

	<script src="../js/wow.min.js"></script>
 
</body>
</html>
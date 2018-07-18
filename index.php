<?php
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED);
require_once "routes.php";
?>
<!DOCTYPE html>
<html>   
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />   
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
      <title><?php echo $seo['title']; ?></title>
      <meta name="title" content="<?php echo $seo['title']; ?>" />
      <meta name="description" content="<?php echo $seo['meta_description']; ?>" />
      <meta name="keywords" content="<?php echo $seo['meta_keyword']; ?>" />
      <base href="<?php echo SITE_URL; ?>" />
      <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
      <style type="text/css">         
         body { font-family: 'Open Sans', sans-serif; margin: 0; margin-top: 50px !important; background: #F1F1F1 !important; line-height:1.7em; }
         a { color: #3d3d3d; text-decoration: none; }
         .sidebar { display: none; }
         .header-mobile { position: fixed; width: 100%; height: 50px; left: 0; top:0; background: #10151D; z-index: 200 !important; box-shadow: 0 0px 5px #373737; text-align: center; }
         .header-mobile img { height: 40px; margin: 5px 10px; }
         .header-mobile button.show-sidebar-left{ position: absolute; left: 10px; top: 10px; height: 30px; line-height: 30px; width: 40px; background: #282828; font-size: 20px; color: #FFF; border-radius: 3px; border: 0px; box-shadow: 0 1px 2px rgba(0,0,0,.5); text-align: center; }
         .breadcrumb-wrapper { display: none; }
         h1.title, h2.title, h3.title, h4.title { padding: 10px 10px 10px 10px; display: inline-block; margin-bottom: 0; margin-top: 0; font-family: 'Oswald', sans-serif; font-weight: 600; line-height: 1.1; }
         .order-link { float: right; padding: 10px 10px 5px 10px; }
         h1.title { font-size: 24px; }
         h3, .h3 { font-size: 23px; }
         .btn { border: 1px solid transparent; padding: 6px 12px; }
         .btn-group { position: relative; display: inline-block; vertical-align: middle; }
         .caret, .dropdown-menu { display: none; }
         .not-found-movie { margin-top: 25px !important; margin-bottom: 25px !important; color: #F00; }
         .sidebar {background-color: <?php echo $setting[2]; ?> !important;}
         .header-links ul li a{color:<?php echo $setting[3]; ?> !important;}
         footer {background-color: <?php echo $setting[4]; ?> !important}
         .copyright {margin: 5px; color:<?php echo $setting[5]; ?> !important;}
         @media screen and (max-width: 480px) { video#player{width: 100% !important}}
         @media screen and (max-width: 768px) { video#player{width: 80% !important}}
      </style>
   </head>
   <body>
      <div class="main">
         <?php include "blocks/header.php"; ?>
         <div class="header-mobile">
            <button type="button" class="show-sidebar-left"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
            <a href="<?php echo SITE_URL; ?>" title="<?php echo SITE_NAME; ?>">
               <?php if(is_file('logo.png')){ ?>
               <img src="logo.png" alt="<?php echo SITE_NAME; ?>" />
               <?php }else{ ?>
               <h1 style="color:#FFF;margin-top:10px;margin-right:20px"><?php echo SITE_NAME; ?></h1>
               <?php } ?>
            </a>
         </div>
         <div class="main-page">            
            <?php if($mod == "home")include "blocks/slider.php"; ?>  
            <div class="container">
               <?php 
               if($mod=="home"){
                  include "blocks/newest.php";
               }else{
                  include "page/".$mod.".php";   
               }
               ?>
               
            </div>            
            <?php include "blocks/footer.php"; ?>
         </div>
         <div class="overlay"></div>
      </div>
      <link rel="stylesheet" type="text/css" href="statics/assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="statics/assets/css/bootstrap-theme.min.css" />
      <link rel="stylesheet" type="text/css" href="statics/assets/css/style.min0c89.css?_=20160405" />
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:300" />
      <script type='text/javascript' src="statics/assets/js/jquery.min.js"></script>
      <!--[if lt IE 9]>
      <script type="text/javascript" src="statics/assets/js/respond.min.js"></script>
      <![endif]-->
      <script type='text/javascript' src="statics/assets/js/ejs.min.js"></script>
      <script type='text/javascript' src="statics/assets/js/jquery.cookie.js"></script>		
      <script type="text/javascript" src="statics/assets/js/jquery.caroufredsel-6.2.1.min.js"></script>
      <script type="text/javascript" src="statics/assets/js/jquery.touchSwipe.min.js"></script>
      <script type="text/javascript" src="statics/assets/js/slider.js"></script>
      <script type="text/javascript" src="statics/assets/js/lazy.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
         $('.show-sidebar-left').click(function(){
            $('.main').toggleClass('slide-showing');
         });
         $('img.lazy').lazyload();
      });
      </script>
   </body>  
</html>

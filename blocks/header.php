<header class="sidebar">
   <div class="container" style="padding-left:10px;">
      <div class="logo header-item">
         <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" title="http://<?php echo $_SERVER['SERVER_NAME']; ?>">
            <?php if(is_file('logo.png')){ ?>
            <img src="logo.png" alt="<?php echo SITE_NAME; ?>" />
            <?php }else{ ?>
            <h1 style="color:#FFF;margin-top:10px;margin-right:20px"><?php echo SITE_NAME; ?></h1>
            <?php } ?>
         </a>
      </div>
     
      <div class="header-links header-item">
         <ul>
            <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" 
               title="<?php echo $_SERVER['SERVER_NAME']; ?>" <?php if($mod =="home") { ?>class="active" <?php } ?>>
               <i class="glyphicon glyphicon-home"></i><span>Home</span></a></li>                                    
                
            <?php foreach ($cateArr as $value) { ?>         
            <li>
               <a <?php if(isset($cate_id) && $cate_id == $value['id'] && $mod != "home") echo "class='active'"; ?> href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"  >
                  <i class="glyphicon glyphicon-star"></i><span><?php echo $value['name']; ?></span>
               </a>
            </li>
            <?php } ?>           
         </ul>
      </div>
   </div>
</header>
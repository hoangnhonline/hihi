
<section id="slider">
   <div id="head-carousel">
      <div class="is-carousel" style="z-index: 1;" id="metro-carousel" data-notauto=0 data-auto_timeout=5000 data-auto_duration=600>
         <div class="carousel-content">            
            <div class="video-item">
               <div class="item-thumbnail">
                  <a href="<?php echo $arr1[0]['slug']; ?>-<?php echo $arr1[0]['id'];?>.html" title="<?php echo $arr1[0]['title']; ?>" >
                     <img src="<?php echo $arr1[0]['thumbnailUrl']; ?>" width="748" height="421" alt="<?php echo $arr1[0]['title']; ?>">
                     <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                  </a>
                  <div class="item-head">
                     <h3><a href="<?php echo $arr1[0]['slug']; ?>-<?php echo $arr1[0]['id'];?>.html"  title="<?php echo $arr1[0]['title']; ?>"><?php echo $arr1[0]['title']; ?></a></h3>
                     <span>
                     </span>
                  </div>
               </div>
            </div>
            <div class="video-item">
               <?php foreach ($arr2 as $key => $value) {?>
               <div class="video-item">
                  <div class="item-thumbnail">
                     <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title']; ?>" >
                        <img src="<?php echo $value['thumbnailUrl']; ?>" width="356" height="200" alt="<?php echo $value['title']; ?>">
                        <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                     </a>
                     <div class="item-head">
                        <h3>
                           <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html">
                           <?php echo $value['title']; ?>
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="video-item">
               <?php foreach ($arr3 as $key => $value) {?>
               <div class="video-item">
                  <div class="item-thumbnail">
                     <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title']; ?>" >
                        <img src="<?php echo $value['thumbnailUrl']; ?>" width="356" height="200" alt="<?php echo $value['title']; ?>">
                        <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                     </a>
                     <div class="item-head">
                        <h3>
                           <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html">
                           <?php echo $value['title']; ?>
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="video-item">
               <div class="item-thumbnail">
                  <a href="<?php echo $arr4[0]['slug']; ?>-<?php echo $arr4[0]['id'];?>.html" title="<?php echo $arr4[0]['title']; ?>" >
                     <img src="<?php echo $arr4[0]['thumbnailUrl']; ?>" width="748" height="421" alt="<?php echo $arr4[0]['title']; ?>">
                     <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                  </a>
                  <div class="item-head">
                     <h3><a href="<?php echo $arr4[0]['slug']; ?>-<?php echo $arr4[0]['id'];?>.html"  title="<?php echo $arr4[0]['title']; ?>"><?php echo $arr4[0]['title']; ?></a></h3>
                     <span>
                     </span>
                  </div>
               </div>
            </div>
            <div class="video-item">
               <?php foreach ($arr5 as $key => $value) {?>
               <div class="video-item">
                  <div class="item-thumbnail">
                     <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title']; ?>" >
                        <img src="<?php echo $value['thumbnailUrl']; ?>" width="356" height="200" alt="<?php echo $value['title']; ?>">
                        <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                     </a>
                     <div class="item-head">
                        <h3>
                           <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html">
                           <?php echo $value['title']; ?>
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="video-item">
               <?php foreach ($arr6 as $key => $value) {?>
               <div class="video-item">
                  <div class="item-thumbnail">
                     <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title']; ?>" >
                        <img src="<?php echo $value['thumbnailUrl']; ?>" width="356" height="200" alt="<?php echo $value['title']; ?>">
                        <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                     </a>
                     <div class="item-head">
                        <h3>
                           <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html">
                           <?php echo $value['title']; ?>
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>            
         </div>
         <!--/carousel-content-->
         <div class="carousel-button">
            <a href="#" class="prev maincolor1 bordercolor1 bgcolor1hover"><i class="glyphicon glyphicon-menu-left"></i></a>
            <a href="#" class="next maincolor1 bordercolor1 bgcolor1hover"><i class="glyphicon glyphicon-menu-right"></i></a>
         </div>
         <!--/carousel-button-->
      </div>
      <!--/is-carousel-->
   </div>
   <!--head-carousel-->
</section>
<!--/slider-->   
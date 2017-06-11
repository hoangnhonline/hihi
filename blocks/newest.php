<div class="box">
   <div class="clearfix"></div>
   <h3 class="title">Newest Movies <a href="movie.html" title="View more newest movies"><i class="glyphicon glyphicon-chevron-right"></i></a></h3>
   <div class="movie-list">
      <?php foreach ($homeVideoArr['data'] as $key => $value) { ?>
      <div class="col-md-4 col-sm-6">         
         <div class="video-item">
            <div class="item-thumbnail">
               <a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title'];?>" >
                  <img class="lazy" data-original="<?php echo $value['thumbnailUrl']; ?>" alt="<?php echo $value['title'];?>">
                  <div class="link-overlay glyphicon glyphicon-play-circle"></div>
               </a>
               <span class="duration"><?php echo $value['duration']; ?></span>
               <span class="quality">HD</span>
            </div>
            <div class="item-detail">
               <h4><a href="<?php echo $value['slug']; ?>-<?php echo $value['id'];?>.html" title="<?php echo $value['title'];?>"><?php echo $value['title'];?></a></h4>
               <p>
                  <span><?php echo date('Y-m-d', $value['created_at']); ?></span>
               </p>
            </div>
         </div>
      </div>
      <?php } ?>      
   </div>
   <div class="clearfix"></div>
</div>
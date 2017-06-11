<section class=" visible-md-block visible-lg-block" >
	<div class="container" >
		<ol class="breadcrumb">
		<li><a href="<?php echo SITE_URL; ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		<li><a href="<?php echo $detailCateArr['slug']; ?>"><?php echo $detailCateArr['name']; ?></a></li>							  																							  				
		<li class="active"><?php echo $detailArr['title']; ?></li>
							</ol>
	</div>
</section>

<div class="container" style="padding:10px">				
<div class="player-wrapper">
	<center>
		<div class="player-size">
		  	<video id="player" class="video-js vjs-default-skin" 
		  	controls preload="none" width="70%" height="100%" poster="<?php echo $detailArr['thumbnailUrl']?>" data-episode-id="2913" data-video-id="1330">
		  		<source src="<?php echo $urlVideo; ?>" type="video/mp4" data-res="720p" />					    							    						    					    						    							    							  				 

			</video>
		</div>
	</center>  	
</div>
</div>
<div class="container">
<div class="box" style="margin-top: 0 !important;">
	<h3 class="title" style="font-weight: both">Suggested videos</h3>
    <div class="movie-list">
    	<?php 
    	if(!empty($suggVideo)){
    		foreach ($suggVideo as $key => $value) {    			
    	?>
       	<div class="col-md-4 col-sm-6">
            <div class="video-item">
                <div class="item-thumbnail">
                    <a href="<?php echo $value['slug'];?>-<?php echo $value['id']; ?>.html" title="<?php echo $value['title']; ?>" >
                        <img class="lazy" data-original="<?php echo $value['thumbnailUrl']; ?>" alt="<?php echo $value['title']; ?>" />
                        <div class="link-overlay glyphicon glyphicon-play-circle"></div>
                    </a>
                    <span class="duration"><?php echo $value['duration'];?></span>
                    <span class="quality">HD</span>
                </div>
                <div class="item-detail">
                	<h4><a href="<?php echo $value['slug'];?>-<?php echo $value['id']; ?>.html" title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a></h4>
                    <p>
                    	
                    	<span><?php echo date('Y-m-d', $value['created_at']);?></span>
                    </p>
                </div>
            </div>
        </div>
        <?php } } ?>	       
	</div>
    <div class="clearfix"></div>
</div>
</div>


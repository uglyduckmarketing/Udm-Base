<style type="text/css">

@media (min-width: 768px) {

 /* show 3 items */
    #carousel-scode .carousel-inner .active,
    #carousel-scode .carousel-inner .active + .carousel-item,
    #carousel-scode .carousel-inner .active + .carousel-item + .carousel-item,
    #carousel-scode .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
        display: block;
    }
	
	#carousel-scode .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    #carousel-scode .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
    #carousel-scode .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
   #carousel-scode  .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    
    #carousel-scode .carousel-inner .carousel-item-next,
   #carousel-scode  .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }
    
   #carousel-scode  .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* left or forward direction */
    #carousel-scode .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    #carousel-scode .carousel-item-next.carousel-item-left + .carousel-item,
    #carousel-scode .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
    #carousel-scode .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
    #carousel-scode .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    
    /* farthest right hidden item must be abso position for animations */
    #carousel-scode .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    
    /* right or prev direction */
    #carousel-scode .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    #carousel-scode .carousel-item-prev.carousel-item-right + .carousel-item,
    #carousel-scode .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
    #carousel-scode .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
    #carousel-scode .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

}

</style>
		
<div id="carousel-scode" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <?php 
					$temp3="0";	
					foreach( $gallery as $image ):
					$attachment = get_post($image['ID']);
					
					$alt=get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
					$caption=$attachment->post_excerpt;
					$description=$attachment->post_content;
					$href=get_permalink($attachment->ID);
					$src=$attachment->guid;
					$title=$attachment->post_title;

				?>
				<div class="carousel-item col-md-3<?php if($temp3=="0"){ ?> active<?php } ?>">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="<?php echo $src; ?>" class="thumb" href="<?php echo $src; ?>" title="<?php echo $title; ?>" data-desc="<?php echo $description; ?>">
                      <img class="img-fluid mx-auto d-block" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                    </a>
                  </div>
                </div>
            </div>
		<?php $temp3++; endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carousel-scode" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carousel-scode" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
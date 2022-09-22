
<div class="container" style="padding-left: 0px;" >
<div class="post mb-5" style="font-family: Consolas;">
	<div class="media">
		<img class="mr-3 img-fluid post-thumb d-none d-md-flex" style="height: 300px; width: 300px;"  src="<?php the_post_thumbnail_url('thumbnail'); ?> "alt="image"></a>
					    <div class="media-body">
							<h3 class="title mb-1"><?php the_title();?></h3>
							<div class ="meta mb-1"><span class = "date" style="color: white;"><?php the_date(); ?></span>
						    <div class="intro" style ="color: white;">
								<?php
								the_excerpt();
								?>
                            </div>
							<a class="more-link" >Zobacz -> <?php the_title();?></a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div>
</div>


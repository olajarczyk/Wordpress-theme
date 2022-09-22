<?php
get_header();
?>
    <div class="container">
		<article class="content px-3 py-5 p-md-5" style="font-family: Consolas;">
            <?php
	    if( have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }

        ?>
	    </article>
    </div>
    <?php
    get_footer();
    ?>
    
    

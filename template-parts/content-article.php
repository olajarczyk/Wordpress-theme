<div class="container" style="font-family: Consolas;">
    <header class="content-header">
    <h3 class="title mb-1"><?php the_title();?></h3>
    <div class="meta mb-3">
        <span class="date"><?php the_date(); ?></span>
    </header>

    <?php
    the_content();
    ?>

</div>
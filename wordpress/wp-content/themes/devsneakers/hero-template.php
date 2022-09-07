<?php if(!is_page("Product") && !is_page("Contact Us")) : ?> <!-- HARDCODED PAGE PRODUCT -->

    <?php get_template_part("thumbnail-template"); ?>

    <?php if(!is_front_page()) : ?>
        <div class="hero-title">
            <h2>
            <?php the_title();?>
            </h2>
        </div>
    <?php endif ; ?>
    
<?php endif ;?>
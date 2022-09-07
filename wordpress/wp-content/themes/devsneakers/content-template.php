<div class="content-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php if(is_page("Product") || is_page("Contact Us")) : ?> <!-- HARDCODED-->
            <h2>
                <?php the_title(); ?>
            </h2>
            <?php get_template_part("thumbnail-template"); ?>
            
        <?php endif; ?>

        <div class="content">
            <?php the_content(); ?>
        </div>

        <?php get_template_part("news-template"); ?>

    <?php endwhile;
    endif; ?>
</div>
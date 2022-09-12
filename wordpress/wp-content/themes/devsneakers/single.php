
<?php get_header(); ?>

<div class="single-page-container">
    <div class="single-page-content">
        <h2>
            <?php the_title();?>
        </h2>

        <div class="single-page-image-container">
            <?php the_post_thumbnail();?>
        </div>
        
        <h5>
            <?php the_time(get_option('date_format'));?>
        </h5>

        <?php the_content();?>

        <a class="blue-link" href="http://localhost/devsneakers/wordpress/news/">< Back to news</a>
    </div>
</div>

<?php get_footer(); ?>
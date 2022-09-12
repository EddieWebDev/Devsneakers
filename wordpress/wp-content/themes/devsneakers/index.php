
<?php

$id = get_option( 'page_for_posts' );
$my_page = get_post($id);
$content = $my_page->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);

?>


<?php get_header(); ?>

<div class="content-container">
    <div class="all-post-container">

        <h2><?php echo $title ;?></h2>
        <?php echo $content;?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <div class="single-post-container">
            <div class="single-post-inner-left-container">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            </div>
            <div class="single-post-inner-right-container">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <h4><?php the_time(get_option('date_format')); ?></h4>
                    <?php the_excerpt(); ?>
            </div>
        </div>
        
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
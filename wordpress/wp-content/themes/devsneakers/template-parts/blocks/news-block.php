<?php
$number_of_news = get_field("number_of_news");
?>
<div class="news-container">
    <h2 class="news-title">News</h2>
    <div class="news">
        <ul>
            <?php $the_query = new WP_Query('posts_per_page='.$number_of_news); ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li>
                    <div><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
                    <div>
                        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <?php the_excerpt(__('(more…)')); ?>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
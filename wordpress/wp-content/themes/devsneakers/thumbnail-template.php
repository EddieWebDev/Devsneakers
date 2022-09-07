<?php if(is_page("Product")) : ?> <!-- HARDCODED PAGE PRODUCT -->
    
    <?php the_post_thumbnail("full", array("class" => "product-thumbnail")); ?>

<?php elseif(is_page("Contact Us")) : ?>

<?php else : ?>

    <?php the_post_thumbnail("full", array("class" => "header-thumbnail")); ?>
    
<?php endif ;?>
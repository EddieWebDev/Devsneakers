<?php

$hero = get_field("thumbnail");
$title = get_field("title");

?>
<div class="hero-container">
    <div class="hero-image-container">
        <?php echo wp_get_attachment_image( $hero["id"], 'full' ); ?>
    </div>

    <div class="hero-title">
        <h2>
            <?php echo $title;?>
        </h2>
    </div>
</div>

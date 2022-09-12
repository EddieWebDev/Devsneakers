<?php

$image = get_field("product-image");

?>

<div class="product-container">

    <div class="product-image-container">
        <?php echo wp_get_attachment_image( $image["id"], 'full' ); ?>
    </div>

</div>
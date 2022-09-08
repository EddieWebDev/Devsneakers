<?php

$content_text_title = get_field("content-text-title");
$content_text = get_field("content-text");

?>

<div class="content-text-container">
    <div class="content-text-title">
        <h2>
            <?php echo $content_text_title;?>
        </h2>
    </div>

    <div class="content-text">
        <?php echo $content_text;?>
    </div>
</div>
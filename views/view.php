<?php
$img_url = getImageData($atts['slide_image']);
$css_class = $atts['css_class'];
//fw_print($atts)
?>

<div class="base-element-wrapper<?php if(!empty($css_class)){echo " ".$css_class;} ?>">
    <div class="base-element-container">
        <div class="base-element__thumbnail">
            <img src="<?php echo $img_url; ?>" alt="element-thumb"/>
        </div>
        <div class="base-element__content">
            <h3 class="base-element__content__title"><?php echo $atts['title']; ?></h3>
            <div class="base-element__content__body">
                <?php echo do_shortcode($atts['content']); ?>
            </div>
        </div>
    </div>
</div>
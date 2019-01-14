<?php
$img_url = getImageData($atts['_img_slide_image']);
$css_class = $atts['css_class'];
$data_attributes =  $atts['data_attr'];
$data_attr_str = ' ';

/**
 *
 */
foreach ($data_attributes as $data_attribute){
    $data_attr_str .= $data_attribute['attribute'];
    $data_attr_str .= "='".$data_attribute['attribute']."' ";
}
//fw_print($data_attr_str)
?>

<div class="base-element-wrapper<?php if(!empty($css_class)){echo " ".$css_class;} ?>" <?php echo $data_attr_str; ?>>
    <div class="base-element-container">
        <div class="base-element__thumbnail">
            <img src="<?php echo $img_url; ?>" alt="element-thumb"/>
        </div>
        <div class="base-element__content">
            <h3 class="base-element__content__title"><?php echo $atts['_txt_title']; ?></h3>
            <div class="base-element__content__body">
                <?php echo do_shortcode($atts['_sc_content']); ?>
            </div>
        </div>
    </div>
</div>
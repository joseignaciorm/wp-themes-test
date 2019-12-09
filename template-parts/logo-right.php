<?php 
$logo_right_normal = si2_option('logo-right','normal');
$logo_right_title = si2_option('logo-right','title');
$logo_right_url = si2_option('logo-right','url');
$logo_right_target = si2_option('logo-right','target');

?>
<a class="logo logo-right" href="<?php echo $logo_right_url; ?>" title="<?php echo $logo_right_title; ?>" target="<?php echo ($logo_right_target) ? $logo_right_target : '_self'; ?>">
  <?php
    $image_url_1x = (!empty($logo_right_normal['1x'][0])) ? wp_get_attachment_url( $logo_right_normal['1x'][0] ) : NULL;
    $image_url_2x = (!empty($logo_right_normal['2x'][0])) ? wp_get_attachment_url( $logo_right_normal['2x'][0] ) : NULL;
    $image_alt = (!empty($logo_right_normal['1x'][0])) ? get_post_meta($logo_right_normal['1x'][0],'_wp_attachment_image_alt',true) : __('Imagen sin descripción','si2-theme');
    if($image_url_1x){
      echo "<img src=\"{$image_url_1x}\" srcset=\"{$image_url_1x} 1x, {$image_url_2x} 2x\" alt=\"{$image_alt}\" />";
    }
  ?>
</a>

<?php 
$logo_left_normal = si2_option('logo-left','normal'); 
$sitename = get_bloginfo('name');
$sitedescription = get_bloginfo('description');
$siteurl = esc_url( home_url() );
?>
<a class="logo logo-left" href="<?php echo $siteurl; ?>" rel="home" title="<?php echo "{$sitename} - {$sitedescription}"; ?>">
  <?php
    $image_url_1x = (!empty($logo_left_normal['1x'][0])) ? wp_get_attachment_url( $logo_left_normal['1x'][0] ) : NULL;
    $image_url_2x = (!empty($logo_left_normal['2x'][0])) ? wp_get_attachment_url( $logo_left_normal['2x'][0] ) : NULL;
    if($image_url_1x){
      echo "<img src=\"{$image_url_1x}\" srcset=\"{$image_url_1x} 1x, {$image_url_2x} 2x\" alt=\"{$sitename}\" />";
    }else{
      echo $sitename;
    }
  ?>						
</a>
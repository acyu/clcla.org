<?php /*if(!empty($image)): ?>
<?php //drupal_add_js(drupal_get_path('module','featured_carousel') . '/carousel.init.js'); ?>

<div class="flexslider">
<ul class="slides">
<?php 
$countindex = 0;
foreach($images as $image):
$class = array();
if(++$countindex === count($images)): $class[] = 'last'; endif;
?>
<li <?php if(!empty($class)): echo 'class="' . implode(' ', $class) . '"'; endif; ?>>
  <?php echo theme('image_style',array(
  'style_name' => 'front_carousel',
  'path' => $image->uri,
  'width' => '',
  'height' => '',
  'alt' => '',
  'title' => '',
  )); ?>
</li>
<?php endforeach; ?>
</ul>
</div>

<?php endif; */ ?>
<div class="flexslider">
  <?php echo theme('image_style',array(
  'style_name' => 'front_carousel',
  'path' => $image->uri,
  'width' => '',
  'height' => '',
  'alt' => '',
  'title' => '',
  )); ?>
</div>
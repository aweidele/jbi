<?php
  $content = get_fields();
  get_header();

  $owl = [
    "loop" => true,
    "items" => 1,
    "nav" => true
  ];
?>
<section class="hp-slideshow">
  <div class="owl-carousel" data-options='<?php echo json_encode($owl); ?>'>
    <?php foreach($content['slideshow'] as $slide) { ?>
      <div><img src="<?php echo $slide['sizes']['proj-hero']; ?>"></div>
    <?php } ?>
  </div>
</section>
<pre><?php print_r($content); ?></pre>
<?php get_footer();

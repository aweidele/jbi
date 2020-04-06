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
<nav class="hp-navigation">
  <ul>
    <?php foreach($content['navigation'] as $nav) { ?>
      <li>
        <a href="<?php echo $nav['link']['title']; ?>">
          <span><?php echo $nav['link']['title']; ?></span>
          <img src="<?php echo $nav['image']['sizes']['proj-hero']; ?>">
        </a>
      </li>
    <?php } ?>
  </ul>
</nav>
<?php get_footer();

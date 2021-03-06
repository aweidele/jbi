<?php
  $content = get_fields();
  get_header();

  $owl = [
    "loop" => true,
    "items" => 1,
    "nav" => true
  ];

  if( $content['slideshow_autoplay'] ) {
    $owl["autoplay"] = true;
    $owl["autoplayTimeout"] = $content['slideshow_autoplay_timeout'];
    // $owl["autoplayTimeout"] = 1000;
  }
?>
<section class="hp-slideshow">
  <div class="owl-carousel js-carousel" data-options='<?php echo json_encode($owl); ?>'>
    <?php foreach($content['slideshow'] as $slide) { ?>
      <div><img src="<?php echo $slide['sizes']['proj-hero']; ?>"></div>
    <?php } ?>
  </div>
</section>
<div class="scroll-down">
  <div>
    <a href="#hp-navigation">Scroll Down</a>
  </div>
</div>
<nav class="hp-navigation" id="hp-navigation">
  <ul>
    <?php foreach($content['navigation'] as $nav) { ?>
      <li>
        <div></div>
        <a href="<?php echo $nav['link']['url']; ?>">
          <span><?php echo $nav['link']['title']; ?></span>
          <img src="<?php echo $nav['image']['sizes']['proj-hero']; ?>">
        </a>
      </li>
    <?php } ?>
  </ul>
</nav>
<?php get_footer();

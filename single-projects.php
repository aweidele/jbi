<?php
  $content = get_fields();
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
?>
  <header class="project-hero">
    <picture>
      <img src="<?php echo $content['hero_image']['sizes']['proj-hero']?>" alt="<?php echo $content['hero_image']['alt']; ?>">
    </picture>
    <div class="project-title">
      <div>
        <h2><?php the_title(); ?></h2>
        <small><?php echo $content['location']; ?></small>
      </div>
    </div>
  </header>
  <article class="project-main">
    <div>
      <div class="project-main-inner">
        <div class="col-1">
          <?php the_content(); ?>
          <?php if ( $content['photo_credit'] ) { ?>
          <p>PHOTO CREDIT: <?php echo $content['photo_credit']; ?></p>
          <?php } ?>
        </div>
        <?php
          foreach( $content['images'] as $image ) {
            $w = get_field('grid_width', $image['ID']);
        ?>
        <div class="<?php echo $w; ?>">
          <img src="<?php echo $image['sizes']['proj-hero']?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php } ?>
      </div>
    </div>
  </article>
<pre><?php print_r($content); ?></pre>
<?php
  endwhile;
  endif;
  get_footer();

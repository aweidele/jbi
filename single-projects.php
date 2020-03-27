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
<pre><?php print_r($content); ?></pre>
<?php
  endwhile;
  endif;
  get_footer();

<?php
  $content = get_fields();
  $grid = $content['grid'];
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
        <?php include 'inc/grid.php'; ?>
    </div>
  </article>
  <?php if ( sizeof( $content['related_projects'] ) ) { ?>
  <div class="project-grid archive related-projects">
    <div>
      <h3>Related Projects</h3>
      <div class="project-grid-inner">
        <?php
          foreach( $content['related_projects'] as $project ) {
            $thumb = get_field('thumbnail',$project->ID);
            $location = get_field('location',$project->ID);
        ?>
        <article id="<?php echo $project->post_name; ?>">
          <a href="<?php echo get_permalink($project->ID); ?>">
            <picture>
              <img src="<?php echo $thumb['sizes']['proj-thumb']; ?>" alt="<?php echo $thumb['alt']; ?>">
            </picture>
            <div class="project-title">
              <h4 class="h3"><?php echo $project->post_title; ?></h4>
              <small><?php echo $location; ?></small>
            </div>
          </a>
        </article>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php } ?>
<?php
  endwhile;
  endif;
  get_footer();

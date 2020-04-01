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
        <?php
          foreach( $content['grid'] as $item ) {
            $layout = $item['acf_fc_layout'];
            switch( $layout ) {
              case 'text_block':
        ?>
        <div class="<?php echo $item['width']; ?>">
          <?php echo $item['text']; ?>
        </div>
        <?php
                break;
              case 'image':
        ?>
        <div class="<?php echo $item['width']; ?>">
          <picture>
            <img src="<?php echo $item['image']['sizes']['proj-'.$item['width']]?>" alt="<?php echo $item['image']['alt']; ?>">
          </picture>
        </div>
        <?php
                break;
            }
          }
        ?>
        <?php /*
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
          <img src="<?php echo $image['sizes']['proj-'.$w]?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <?php } ?>
        */ ?>
      </div>
    </div>
  </article>
  <?php if ( sizeof( $content['related_projects'] ) ) { ?>
  <div class="project-grid archive related-projects">
    <div>
      <h3 class="h2">Related Projects</h3>
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
              <h4 class="h2"><?php echo $project->post_title; ?></h4>
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

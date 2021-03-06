<?php
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
    $content = get_fields();
    $grid = $content['grid'];
    if( $grid[0]['acf_fc_layout'] == 'text_block' ) {
      $text = "<h2>\n";
      $text .= "<span>".get_the_title()."</span>\n";
      $text .= "<small>".$content['location']."</small>\n";
      $text .= "</h2>\n";
      $text .= $grid[0]['text'];
      if(
        $content['photo_credit'] ||
        $content['size'] ||
        $content['scope']
      ) {
        $text .= '<dl class="project-stats">';
        if( $content['size'] ) {
          $text.= '<dt>Size</dt><dd>'.$content['size'].'</dd>';
        }
        if( $content['scope'] ) {
          $text .= '<dt>Scope</dt><dd>'.$content['scope'].'</dd>';
        }
        if( $content['photo_credit'] ) {
          $text .= '<dt>Photographer</dt><dd>'.$content['photo_credit'].'</dd>';
        }
        $text .= '</dl>';

        $grid[0]['text'] = $text;
      }
    }
?>
  <header class="project-hero">
    <picture>
      <img src="<?php echo $content['hero_image']['sizes']['proj-hero']?>" alt="<?php echo $content['hero_image']['alt']; ?>">
    </picture>
    <?php /*
    <div class="project-title">
      <div>
        <h2>
          <span><?php the_title(); ?></span>
          <small><?php echo $content['location']; ?></small>
        </h2>
      </div>
    </div>
    */ ?>
  </header>
  <article class="project-main">
    <div>
        <?php include 'inc/grid.php'; ?>
    </div>
  </article>
  <!-- <pre><?php print_r($content['related_projects']); ?></pre> -->
  <?php if ( $content['related_projects'] ) { ?>
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
            <div class="grid-title">
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

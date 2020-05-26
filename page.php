<?php
  $content = get_fields();
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
    foreach($content['content'] as $c) {
?>
  <section class="s-<?php echo $c['acf_fc_layout']; ?> bg-<?php echo $c['background']; ?>">
    <div>
    <?php
      switch($c['acf_fc_layout']) {
        case 'grid':
          $grid = $c['grid'];
          include 'inc/grid.php';
          break;
        case 'people':
          include 'inc/people.php';
          break;
        case 'section':
          include 'inc/section.php';
          break;
        case 'news':
          include 'inc/news.php';
          break;
      } ?>
    </div>
  </section>
<?php
    }
    endwhile;
    endif;
    get_footer();

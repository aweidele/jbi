<?php
  $content = get_fields();
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
    foreach($content['content'] as $c) {
?>
  <section class="s-<?php echo $c['acf_fc_layout']; ?>">
    <div>
    <?php
      switch($c['acf_fc_layout']) {
        case 'grid':
          $grid = $c['grid'];
          include 'inc/grid.php';
          break;
      } ?>
    </div>
  </section>
<?php
    }
    endwhile;
    endif;
    get_footer();

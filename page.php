<?php
  $content = get_fields();
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
    foreach($content['content'] as $c) {
?>
  <section>
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
<pre><?php print_r($content); ?></pre>
<?php
    }
    endwhile;
    endif;
    get_footer();

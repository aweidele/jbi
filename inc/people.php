<?php
  $args = [
    'post_type'=>'people',
    'posts_per_page'=>'-1'
  ];
  $people = new WP_Query($args);
?>
<div class="people-grid">
  <div>
    <div class="people-grid-inner">
      <?php
      if( $people->have_posts() ) : while( $people->have_posts() ) : $people->the_post();
        $content = get_fields();
      ?>
      <article id="<?php echo $post->post_name; ?>">
        <a href="<?php echo get_permalink(); ?>">
          <picture>
            <img src="<?php echo $content['photo']['sizes']['proj-thumb']; ?>" alt="<?php echo $content['thumbnail']['alt']; ?>">
          </picture>
          <div class="grid-title">
            <h4><?php the_title(); ?></h4>
            <small><?php echo $content['title']; ?></small>
          </div>
        </a>
        <div class="people-bio">
          <div>
            <button>Close</button>
            <div class="bio-title">
              <p><?php the_title(); ?>, <?php echo $content['credentials']; ?></p>
              <p><?php echo $content['title']; ?></p>
            </div>
            <?php the_content(); ?>
          </div>
        </div>
        <!-- <pre><?php print_r($content); ?></pre> -->
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

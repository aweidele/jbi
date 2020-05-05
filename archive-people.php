<?php get_header(); ?>
<div class="people-grid">
  <div>
    <div class="people-grid-inner">
      <?php
      if( have_posts() ) : while( have_posts() ) : the_post();
        $content = get_fields();
      ?>
      <article id="<?php echo $post->post_name; ?>">
        <picture>
          <img src="<?php echo $content['photo']['sizes']['proj-thumb']; ?>" alt="<?php echo $content['thumbnail']['alt']; ?>">
        </picture>
        <div class="grid-title">
          <h4 class="h2"><?php the_title(); ?></h4>
          <small><?php echo $content['title']; ?></small>
        </div>
        <div class="people-bio">
          <div>
            <button>Close</button>
            <?php the_content(); ?>
          </div>
        </div>
        <!-- <pre><?php print_r($content); ?></pre> -->
      </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

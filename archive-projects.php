<?php get_header(); ?>
<div class="project-grid archive related-projects">
  <div>
    <div class="project-grid-inner">
      <?php
        if( have_posts() ) : while( have_posts() ) : the_post();
          $content = get_fields();
      ?>
        <article id="<?php echo $post->post_name; ?>">
          <a href="<?php echo get_permalink(); ?>">
            <picture>
              <img src="<?php echo $content['thumbnail']['sizes']['proj-thumb']; ?>" alt="<?php echo $content['thumbnail']['alt']; ?>">
            </picture>
            <div class="project-title">
              <h4 class="h2"><?php the_title(); ?></h4>
              <small><?php echo $content['location']; ?></small>
            </div>
          </a>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

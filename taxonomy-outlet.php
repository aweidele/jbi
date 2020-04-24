<?php
  get_header();
  $terms = get_terms( array(
    'taxonomy' => 'outlet',
    'hide_empty' => false,
  ) );
?>
<div class="press-listing">
  <div>
    <div class="outlet-grid">
      <nav>
        <ul>
        <?php
          foreach($terms as $term) {
            $logo = get_field('logo', $term);
        ?>
          <li>
            <a href="<?php echo get_term_link($term); ?>">
              <img src="<?php echo $logo['sizes']['media-logo']; ?>">
              <span><?php echo $term->name; ?></span>
            </a>
          </li>
        <?php } ?>
        </ul>
      </nav>
    </div>
    <div class="articles">
      <div class="articles-container">
      <?php
        if( have_posts() ) : while( have_posts() ) : the_post();
          $fields = get_fields();
          if($fields['file']) {
            $link = $fields['file']['url'];
          } else {
            $link = $fields['article_link']['url'];
          }
      ?>
        <article id="<?php echo $post->post_name; ?>">
          <a href="<?php echo $link; ?>" target="_blank">
            <span><?php echo $fields['date']; ?></span>
            <span><?php the_title(); ?></span>
          </a>
        </article>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>

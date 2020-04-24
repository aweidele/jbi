<?php
  get_header();
  $terms = get_terms( array(
    'taxonomy' => 'outlet',
    'hide_empty' => false,
  ) );
?>
<div class="press-listing">
  <div>
    <ul class="outlet-grid">
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
    <div class="articles">
      Hiii.
    </div>
  </div>
</div>
<?php get_footer(); ?>

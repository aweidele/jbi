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
      <p>Phasellus consectetuer vestibulum elit. Praesent ut ligula non mi varius sagittis. In consectetuer turpis ut velit. Aliquam lobortis. In hac habitasse platea dictumst.</p>

<p>Phasellus tempus. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Curabitur ullamcorper ultricies nisi. Nunc nec neque. Curabitur a felis in nunc fringilla tristique.</p>

<p>Praesent nec nisl a purus blandit viverra. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna.</p>

<p>Etiam feugiat lorem non metus. Nunc nonummy metus. Fusce commodo aliquam arcu. Nunc sed turpis. Aenean imperdiet.</p>

<p>Curabitur at lacus ac velit ornare lobortis. Morbi mollis tellus ac sapien. Curabitur vestibulum aliquam leo. Nam pretium turpis et arcu. Cras non dolor.</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>

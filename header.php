<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
  <title><?php
  if (is_front_page()) {
    echo get_bloginfo('name');
    if (get_bloginfo('description')!="") { echo " | ".get_bloginfo('description'); }
  } else {
    wp_title ( ' | ', true,'right' );
    echo get_bloginfo('name');
} ?></title>
<?php
  wp_head();

  // Adding body classes
  $body_classes = [get_post_type()];
  if( is_front_page() ) {
    $body_classes[] = "front-page";
  }
  $body_classes[] = $post->post_name;
  if( is_user_logged_in() ) {
    $body_classes[] = "loggedin";
  }
  // Project Archive
  if ( is_post_type_archive('projects') || is_tax('industry') ) {
    $body_classes[] = "project-archive";
  }
  // Single project
  if ( is_singular('projects') ) {
    $body_classes[] = 'project-detail';
  }
?>
</head>
<body class="<?=implode($body_classes, " ")?>">
  <header class="main-header">
    <div>
      <h1><a href="<?php echo get_home_url(); ?>"><strong>Jeffrey Beers</strong> International</a></h1>
      <button>Menu</button>
      <nav class="nav-primary">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary-menu'
            )
          ); ?>
      </nav>
    </div>
  </header>
  <main>

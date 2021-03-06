<?php
  $args = [
    'post_type'=>'press',
    'posts_per_page'=>$c['number_of_articles']
  ];
  if($c['show_only_featured']) {
    $args['meta_query'] = [
      [
        'key'   => 'featured',
        'value' => '1',
      ]
    ];
  }
  $news = new WP_Query($args);
  $owl_options = [
    "items"=>3,
    "loop"=>true,
    "autoplay"=>true,
    "autoplayTimeout"=>4000,
    "responsive"=>[
      "0"=>[
        "items"=>1.5,
        "margin"=>10
      ],
      "500"=>[
        "items"=>2
      ],
      "768"=>[
        "items"=>3,
        "margin"=>20
      ]
    ]
  ];
  $owl = json_encode($owl_options);
?>
<div class="news-carousel">
  <div class="owl-carousel js-carousel" data-options='<?php echo $owl ?>'>
  <?php
    if( $news->have_posts() ) : while( $news->have_posts() ) : $news->the_post();
      $content = get_fields();
      if($content['file']) {
        $link = $content['file']['url'];
      } else {
        $link = $content['article_link']['url'];
      }
  ?>
    <article>
      <a href="<?php echo $link; ?>" target="_blank">
        <div class="date"><?php echo $content['date']; ?></div>
        <h5><?php the_title(); ?></h5>
      </a>
    </article>
  <?php endwhile; endif; ?>
  </div>
</div>

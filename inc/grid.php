<div class="content-grid">
<?php
  foreach( $grid as $item ) {
    $layout = $item['acf_fc_layout'];
    switch( $layout ) {
      case 'text_block':
?>
  <div class="<?php echo $item['width']; ?>">
    <?php echo $item['text']; ?>
  </div>
<?php
        break;
      case 'image':
?>
  <div class="<?php echo $item['width']; ?>">
    <picture>
      <img src="<?php echo $item['image']['sizes']['proj-'.$item['width']]?>" alt="<?php echo $item['image']['alt']; ?>">
    </picture>
  </div>
<?php
        break;
      case 'map':
?>
  <div class="<?php echo $item['width']; ?>">
    <h5>Map</h5>
      <?php include('map.php'); ?>
  </div>
<?php
        break;
    }
  }
?>
</div>

  </main>
<?php
  $contact = get_field('contact', 'option');
  $social = get_field('social', 'option');
?>
  <footer class="main-footer">
    <div>
      <div class="contact">
        <div>
          <p><strong><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></strong></p>
          <p>
            <?php if($contact['address_1']) { ?><span><?php echo $contact['address_1']; ?><br></span><?php } ?>
            <?php if($contact['address_2']) { ?><span><?php echo $contact['address_2']; ?><br></span><?php } ?>
            <?php if($contact['city']) { ?><span><?php echo $contact['city']; ?></span><?php } ?>
            <?php if($contact['state']) { ?><span><?php echo $contact['state']; ?></span><?php } ?>
            <?php if($contact['zip']) { ?><span><?php echo $contact['zip']; ?></span><?php } ?>
          </p>
          <p>
            <?php echo $contact['phone']; ?>
          </p>
          <p>
            <?php echo $contact['email']; ?>
          </p>
        </div>
      </div>
      <div class="social">
        <?php foreach($social['social_links'] as $link) { ?>
          <a href="<?php echo $link['url']['url']; ?>" class="$link['network']" target="_blank">
            <?php
              switch ($link['network']) {
                case 'linkedin':
                ?>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22.94"><title>linkedin</title><path d="M5.45,7.77V23.25H.3V7.77ZM5.78,3a2.67,2.67,0,0,1-2.9,2.68h0A2.66,2.66,0,0,1,0,3,2.69,2.69,0,0,1,2.91.31,2.66,2.66,0,0,1,5.78,3ZM24,14.38v8.87H18.86V15c0-2.08-.75-3.5-2.61-3.5a2.81,2.81,0,0,0-2.64,1.87,3.79,3.79,0,0,0-.17,1.27v8.64H8.3c.06-14,0-15.48,0-15.48h5.14V10h0a5.08,5.08,0,0,1,4.67-2.61c3.39,0,5.92,2.22,5.92,7Z"/></svg>
                  <span>LinkedIn</span>
                  <?php
                  break;
                case 'instagram':
                  ?>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>instagram</title><path d="M16,12a4,4,0,1,0-4,4A4,4,0,0,0,16,12Zm2.16,0A6.16,6.16,0,1,1,12,5.84,6.15,6.15,0,0,1,18.16,12Zm1.68-6.41a1.44,1.44,0,1,1-1.43-1.43A1.43,1.43,0,0,1,19.84,5.59ZM12,2.16c-1.75,0-5.5-.14-7.08.48a3.78,3.78,0,0,0-1.37.91,3.7,3.7,0,0,0-.91,1.37C2,6.5,2.16,10.25,2.16,12s-.14,5.5.48,7.08a3.78,3.78,0,0,0,.91,1.37,3.91,3.91,0,0,0,1.37.91c1.58.62,5.33.48,7.08.48s5.5.14,7.08-.48a3.91,3.91,0,0,0,1.37-.91,3.78,3.78,0,0,0,.91-1.37c.62-1.58.48-5.33.48-7.08s.14-5.5-.48-7.08a3.7,3.7,0,0,0-.91-1.37,3.78,3.78,0,0,0-1.37-.91C17.5,2,13.75,2.16,12,2.16ZM24,12c0,1.66,0,3.3-.08,4.95A7.11,7.11,0,0,1,22,22a7.12,7.12,0,0,1-5,1.94C15.3,24,13.66,24,12,24s-3.3,0-4.95-.08A7.09,7.09,0,0,1,2,22,7.08,7.08,0,0,1,.08,17C0,15.3,0,13.66,0,12S0,8.7.08,7.05A7.08,7.08,0,0,1,2,2a7.09,7.09,0,0,1,5-1.94C8.7,0,10.35,0,12,0S15.3,0,17,.08A7.12,7.12,0,0,1,22,2a7.11,7.11,0,0,1,1.93,5C24,8.7,24,10.34,24,12Z" transform="translate(0 0)"/></svg>
                  <span>Instagram</span>
                  <?php
                  break;
              }
            ?>
            <span class="sr-only"><?php echo $link['url']['title']; ?></span>
          </a>
        <?php } ?>
      </div>
    </div>
  </footer>
  <?php /*
  <!-- pre><?php print_r($social); ?></pre -->
  <div class="feedback"></div>
  */ ?>
<?php wp_footer(); ?>
</body>
</html>

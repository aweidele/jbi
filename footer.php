  </main>
<?php
  $contact = get_field('contact', 'option');
  $social = get_field('social', 'option');
?>
  <footer class="main-footer">
    <div>
      <div class="contact">
        <a href="<?php echo get_home_url(); ?>" class="footer-logo">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.25 218.8"><path class="cls-1" d="M105.84,98.39q1.89,2.37,1.89,13.56v16.24q0,10.55-2.11,13.24t-9.8,3V95.7q8.12.31,10,2.69m-2.47-67.57q1.95.86,3.16,4.14t1.2,11.46q0,15.49-1.46,18.77c-1,2.19-3.26,3.29-6.82,3.29-.87,0-2.08,0-3.63.1V29.85q5.61.11,7.55,1M59.47,174.25h42.05q21.93,0,29-3.13t10.32-11.62q3.24-8.5,3.24-26.17V117.19q0-17-4.49-25.25T122.5,80.15q11.31-3.23,15.16-9.25t3.84-21.29q0-22.57-5.44-32.74T121.77,3.38Q112.92,0,95.73,0H59.47ZM14.84,0V153.41q0,12.54-.37,16.89a13.23,13.23,0,0,1-2.78,7.36,8,8,0,0,1-6.59,3,51,51,0,0,1-5.1-.41L16.8,218.8h2.76q13,0,19.42-2.93T49.2,205.31a42.92,42.92,0,0,0,4.23-17.09q.47-9.47.47-42.57V0Zm172.41,0h-4.86q-12.49,0-18.7,2.31a19,19,0,0,0-9.84,8.34,29.16,29.16,0,0,0-4.08,13.5q-.45,7.49-.45,33.63V174.29h37.62V0"/></svg>
          <span class="sr-only">JBI Home</span>
        </a>
        <div>
          <p>
            <span><?php echo $contact['address_1']; ?></span>
            <span><?php echo $contact['address_2']; ?></span>
            <span><?php echo $contact['city']; ?></span>
            <span><?php echo $contact['state']; ?></span>
            <span><?php echo $contact['zip']; ?></span>
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
          <a href="<?php echo $link['url']['url']; ?>" target="_blank">
            <?php
              switch ($link['network']) {
                case 'linkedin':
                  echo "test";
                  break;
                case 'instagram':
                  echo "testogulp
                  ";
                  break;
              }
            ?>
            <span class="sr-only"><?php echo $link['url']['title']; ?></span>
          </a>
        <?php } ?>
      </div>
    </div>
  </footer>
  <!-- pre><?php print_r($social); ?></pre -->
<?php wp_footer(); ?>
</body>
</html>

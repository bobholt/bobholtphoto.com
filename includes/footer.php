  <footer>
    <p>Copyright &copy; 2012 Robert B. Holt.<br />All Rights Reserved.</p>
  </footer>

  <!-- JavaScript at the bottom for fast page loading: http://developer.yahoo.com/performance/rules.html#js_bottom -->
  <script src="/js/vendor/jquery-1.7.2.min.js"></script>

  <!-- scripts concatenated and minified via build script -->
  <script src="/js/plugins.js"></script>
  <script src="/js/main.js"></script>
  <!-- end scripts -->


  <?php if ($_SERVER["REQUEST_URI"] == "/") { ?>
  <script>
    var page = "<?php echo $_SERVER["REQUEST_URI"]; ?>";
    var bhBgIndex = 0;
    var bhBackgrounds = BHPHOTO.shuffleArray([
      <?php
        $output = '';
        foreach( scandir($_SERVER['DOCUMENT_ROOT'].'/portfolio') as $file) {
          if (is_dir($_SERVER['DOCUMENT_ROOT'].'/portfolio/'.$file) && $file != '.' && $file != '..') {
            foreach(glob($_SERVER['DOCUMENT_ROOT'].'/portfolio/'.$file.'/*.large.jpg') as $image) {
              $output .= "'" . str_replace('.large.jpg', '.jpg?r', str_replace('C:/development/bobholtphoto', '', $image)) . "'" . ',';
            }
          }
        }

        echo rtrim ($output, ',');
      ?>
    ]);

    $(bhBackgrounds).each(function(){
      $('<img/>').attr('src', this);
    });

    $.backstretch(bhBackgrounds[bhBgIndex], {speed: 1000});

    setInterval(function(){
      bhBgIndex = bhBgIndex >= (bhBackgrounds.length - 1) ? 0 : bhBgIndex + 1;
      $.backstretch(bhBackgrounds[bhBgIndex]);
    }, 10000);

  </script>
  <?php } ?>

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>

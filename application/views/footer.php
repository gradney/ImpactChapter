
  <div id="push"></div>
  <!--/*Page Footer*/-->
  <div id="footer">
    <div id="footer-info">
      While using this site, you agree to have read and accepted our 
      <a href="http://impactmovement.org/terms-of-use/" target="_blank">Terms of Use</a> 
      and 
      <a href="http://impactmovement.org/privacy-policy/" target="_blank">Privacy Policy</a>. 
      <br/>
      <em>Copyright &copy; 2015-<?php echo date("Y");?> 
        by <a href="http://impactmovement.org" target="_blank">The Impact Movement</a>
        . All Rights Reserved.
      </em>
    </div>
  </div>

  </div><!--end wrapper-->

  <!--JavaScripts are at end of webpages to increase loading performance.-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <?php echo '<script src="'.base_url().'js/script.js"/>'; // more secure script imports. ?>
  <?php echo '<script src="'.base_url().'js/student.js"/>'; // more secure script imports. ?>
  <?php /*echo '<script src="'.base_url().'js/script2.js"/>'; // more secure script imports, works with Sign Up form.*/ ?>
  <?php /*echo '<script src="'.base_url().'js/script3.js"/>'; // more secure script imports, works with Register form. */ ?>
  <script>
  $(function() {
    $('.carousel').carousel();
    var caption = $('div.item:nth-child(1) .carousel-caption');
    $('#caption-for-slides').html(caption.html());
    caption.css('display','none');
    $(".carousel").on('slide.bs.carousel', function(evt) {
      var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index()+1) + ') .carousel-caption');
      $('#caption-for-slides').html(caption.html());
      caption.css('display','none');
    });
  });
  </script>
  </body>
</html>

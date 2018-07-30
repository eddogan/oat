<footer>
	<section id="footer-quote-request" style="background: #eee">
		<div class="container-fluid">
			<div class="row">
				Total Control, your way.
			</div>
		</div>
	</section>
	
	<section id="footer-widgets" style="background: #eee">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">Main Menu + Social</div>
				<div class="col-md-3">Utility Menu + Privacy</div>
				<div class="col-md-3">Location Info + Copyright</div>
				<div class="col-md-3">Location Map</div>
			</div>
		</div>
	</section>
	
</footer>

<script>
// ADDING CLASS "IN-VIEW" TO THE ITEMS WITH THE CLASS NAME "ANIMATED" WHEN THEY ARE VISIBLE	
// init controller
var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 0, triggerHook: .8, reverse: false}});

// loop through all elements
$('.animated').each(function() {
	
  // build a scene
  var scene = new ScrollMagic.Scene({
    triggerElement: this
  })
  .setClassToggle(this, "in-view")
  .addTo(controller);
  
});
</script>

<script>
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top + (-116)
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>

		<!--
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->
		<?php wp_footer(); ?>
</body>
</html>
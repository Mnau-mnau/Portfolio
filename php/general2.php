		<!-- scripts -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="js/lightbox.js"> lightbox.option({'resizeDuration': 200,'wrapAround': true})</script>
  		<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
			<script src="../js/jquery-ui.js" type="text/javascript" charset="utf-8"></script>
  		
		  <!--Include in separate file!-->
		  <script type="text/javascript">
    	$(document).on('ready', function() {
		$('.variable-width').slick({dots: true,infinite: true,speed: 1000,slidesToShow: 3,centerMode: true,variableWidth: true,slidesToScroll: 3,});
		$('.single-item').slick({speed: 1000,dots:true,});
    	});
  		</script>

		  <script>
		  $(function(){
				$('#tabs').tabs({
					fx: [{
						opacity: 'toggle',
					},{opacity: 'toggle', duration: 'normal'}]
				});
			});
		  </script>

		  <script type="text/javascript">
			$('a[href*="#"]:not([href="#"])').click(function() {if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    	var target = $(this.hash);target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    	if (target.length) {$('html, body').animate({scrollTop: target.offset().top}, 1000);return false;}}});
			</script>
	</body>
</html>
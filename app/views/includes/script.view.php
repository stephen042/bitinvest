<!-- JAVASCRIPT  FILES ========================================= --> 
<script src="<?=ROOT?>/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="<?=ROOT?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="<?=ROOT?>/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="<?=ROOT?>/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script   src="<?=ROOT?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="<?=ROOT?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="<?=ROOT?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="<?=ROOT?>/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="<?=ROOT?>/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script   src="<?=ROOT?>/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script   src="<?=ROOT?>/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="<?=ROOT?>/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="<?=ROOT?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="<?=ROOT?>/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="<?=ROOT?>/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<script  src="<?=ROOT?>/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script  src="<?=ROOT?>/js/tickerNews.min.js"></script><!-- MARQUEE SCROLL -->
<!-- MARQUEE FUNCTiON -->
<script type="text/javascript">
	$(function(){
		var timer = !1;
		_Ticker = $("#T1").newsTicker();
		_Ticker.on("mouseenter",function(){
			var __self = this;
			timer = setTimeout(function(){
				__self.pauseTicker();
			},200);
		});
		_Ticker.on("mouseleave",function(){
			clearTimeout(timer);
			if(!timer) return !1;
			this.startTicker();
		});
	});
</script>
<!-- REVOLUTION JS FILES -->

<script  src="<?=ROOT?>/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="<?=ROOT?>/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="<?=ROOT?>/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script type="text/javascript"  src="<?=ROOT?>/js/rev-script-4.js"></script>
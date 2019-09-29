

		
<script src="{{asset('public/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>		<script src="{{asset('public/admin/vendor/jquery-cookie/jquery-cookie.js')}}"></script>		
<script src="{{asset('public/admin/master/style-switcher/style.switcher.js')}}"></script>		
<script src="{{asset('public/admin/vendor/popper/umd/popper.min.js')}}"></script>		
<script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.js')}}"></script>		
<script src="{{asset('public/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>		<script src="{{asset('public/admin/vendor/common/common.js')}}"></script>		
<script src="{{asset('public/admin/vendor/nanoscroller/nanoscroller.js')}}"></script>		
<script src="{{asset('public/admin/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>


        <!-- Specific Page Vendor -->	
<script src="{{asset('public/admin/vendor/ckeditor/ckeditor.js')}}"></script>	
<script src="{{asset('public/admin/vendor/jquery-ui/jquery-ui.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js')}}"></script>		<script src="{{asset('public/admin/vendor/jquery-appear/jquery-appear.js')}}"></script>		
<script src="{{asset('public/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>		<script src="{{asset('public/admin/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>		<script src="{{asset('public/admin/vendor/flot/jquery.flot.js')}}"></script>		
<script src="{{asset('public/admin/vendor/flot.tooltip/flot.tooltip.js')}}"></script>		
<script src="{{asset('public/admin/vendor/flot/jquery.flot.pie.js')}}"></script>		
<script src="{{asset('public/admin/vendor/flot/jquery.flot.categories.js')}}"></script>		
<script src="{{asset('public/admin/vendor/flot/jquery.flot.resize.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jquery-sparkline/jquery-sparkline.js')}}"></script>		
<script src="{{asset('public/admin/vendor/raphael/raphael.js')}}"></script>		
<script src="{{asset('public/admin/vendor/morris/morris.js')}}"></script>		
<script src="{{asset('public/admin/vendor/gauge/gauge.js')}}"></script>		
<script src="{{asset('public/admin/vendor/snap.svg/snap.svg.js')}}"></script>		
<script src="{{asset('public/admin/vendor/liquid-meter/liquid.meter.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jqvmap/jquery.vmap.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>		
<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>		<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>		<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>		<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>		<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>	<script src="{{asset('public/admin/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
<script src="{{asset('public/admin/js/theme.js')}}"></script>
		
        <!-- Theme Custom -->
<script src="{{asset('public/admin/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
<script src="{{asset('public/admin/js/theme.init.js')}}"></script>

<script src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>

<script type="text/javascript" src="{{asset('public/script.js')}}"></script>


</body>
</html>
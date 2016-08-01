<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>7ready.com</title>
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="index.html">
						<h6>Portal Berita Nasional</h6>
							<h1>7Ready<span>.com</span></h1>
						</a>
					</div>
				</div>
				<div class="social-icons">
					

				</div>
				<div class="clearfix"></div>
				<div class="header-right">
					
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>           
					<li><a href="index.html">Home</a></li>
					<li><a href="sports.html">sports</a></li>
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			
			
			@yield('content')
			
			<div class="footer text-center">
				
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
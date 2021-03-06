<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>{{ $title }}</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{ $title }}" />
<meta name="description" content="@if(isset($data['konten'])){{str_limit( strip_tags($data['konten']), $limit = 200, $end = '...')}}@else{{'Portal Berita Dunia'}}@endif">
<meta property="og:title" content="{{ $title }}"/>
<meta property="og:url" content="{{Request::fullUrl()}}"/>
<meta property="og:type" content="article" />
<meta property="og:site_name" content="7 Ready"/>
<meta property="og:image" content="@if(isset($data['img'])){{$data['img']}}@else{{''}}@endif" />
<meta property="og:description" content="@if(isset($data['konten'])){{str_limit( strip_tags($data['konten']), $limit = 200, $end = '...')}}@else{{'Portal Berita Dunia'}}@endif"/>
<!--webfont-->
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo" style="float: left;">
						<a href="/">
						<h6>Portal Berita Dunia</h6>
							<h1>7Ready<span>.com</span></h1>
						</a>
					</div>
				</div>
				<div class="social-icons">

				</div>
				<div class="clearfix"></div>
				<div class="header-right">
					
					<div class="search">
						<form action="/terbaru" methode="GET">
							<input name="q" type="text" value="@if(isset($q)){{$q}}@else{{Request::old('q')}}@endif" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
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
					<li><a href="/">Beranda</a></li>
					<li><a href="/berita/kategori">Kabar</a></li>
					<li><a href="/internasional/kategori">Dunia</a></li>
					<li><a href="/Ekonomi/kategori">Ekonomi</a></li>
					<li><a href="/olahraga/kategori">Olah raga</a></li>
					<li><a href="/Nasional/kategori">Nasional</a></li>
					<li><a href="/politik/kategori">Politik</a></li>
					<li><a href="/Gaya Hidup/kategori">Gaya Hidup</a></li>
					<li><a href="/teknologi/kategori">Teknologi</a></li>
					<li><a href="/Hiburan/kategori">Hiburan</a></li>
					<li><a href="/lainnya/kategori">Lainnya</a></li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
			
			
			@yield('content')
			
			<div class="footer text-center">
				
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
			</div>
			
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		<script src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
		@if(isset($isHome))
                    <!-- Custom Theme files -->
			
		
		<script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function() {
                    $("#conference-slider").responsiveSlides({
                        auto: true,
                        manualControls: '#slider3-pager',
                    });
                });
            </script>
			<script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 3,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: {
                                        portrait: {
                                            changePoint: 480,
                                            visibleItems: 2
                                        },
                                        landscape: {
                                            changePoint: 640,
                                            visibleItems: 2
                                        },
                                        tablet: {
                                            changePoint: 768,
                                            visibleItems: 3
                                        }
                                    }
                                });

                            });
                        </script>
                        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                     <script type="text/javascript">
                        $(window).load(function() {
                            $("#flexiselDemo").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 2
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                @endif
		
                    <!--<script type="text/javascript" src="js/jquery.flexisel.js"></script>-->
					
		</div>
	</div>
</body>
<script>
    window.onload = function () {
        $.get("/api/updateview", function(data, status){

        });
    };
</script>
</html>
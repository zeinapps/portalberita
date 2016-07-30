@extends('portal.master')
@section('content')
			<div class="main-content">		
				<div class="col-md-9 total-news">
					<div class="slider">
						<script src="js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  $("#conference-slider").responsiveSlides({
								auto: true,
								manualControls: '#slider3-pager',
							  });
							});
						</script>
						 <div class="conference-slider">
							<!-- Slideshow 3 -->
							<ul class="conference-rslide" id="conference-slider">
							  <li><img src="images/c22.jpg" alt=""></li>
							  <li><img src="images/c1.jpg" alt=""></li>
							  <li><img src="images/c33.jpg" alt=""></li>
							  <li><img src="images/c44.jpg" alt=""></li>
							</ul>
							<!-- Slideshow 3 Pager -->
							<ul id="slider3-pager">
							  <li><a href="#"><img src="images/c22.jpg" alt=""></a></li>
							  <li><a href="#"><img src="images/c1.jpg" alt=""></a></li>
							  <li><a href="#"><img src="images/c33.jpg" alt=""></a></li>
							  <li><a href="#"><img src="images/c44.jpg" alt=""></a></li>
							</ul>
							<div class="breaking-news-title">
								<p>Lorem ipsum dolor sit amet, consectetur Nulla quis lorem neque, mattis venenatis lectus. </p>
							</div>
						</div> 
						<h5 class="breaking">Breaking news</h5>
					</div>	
				<div class="posts">
					<div class="left-posts">
						<div class="world-news">
							<div class="main-title-head">
								<h3>from   around   the   world</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grid">
									<img src="images/n1.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<img src="images/n2.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<img src="images/n3.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="latest-articles">
							<div class="main-title-head">
								<h3>latest    articles</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
								<div class="world-news-grid">
									<img src="images/a1.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<img src="images/a2.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="world-news-grid">
									<img src="images/a3.jpg" alt="" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="gallery">
							<div class="main-title-head">
								<h3>gallery</h3>
								<a href="#">More  +</a>
								<div class="clearfix"></div>
							</div>
							<div class="gallery-images">
								<div class="course_demo1">
								  <ul id="flexiselDemo1">	
									 <li>
										<a href="single.html"><img src="images/g1.jpg" alt="" /></a>						
									 </li>
									 <li>
									   <a href="single.html"><img src="images/g2.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="images/g3.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="images/g4.jpg" alt="" /></a>
									 </li>	
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						 </div>
						 <div class="course_demo1">
								  <ul id="flexiselDemo">	
									 <li>
										<a href="single.html"><img src="images/g4.jpg" alt="" /></a>							
									 </li>
									 <li>
										<a href="single.html"><img src="images/g5.jpg" alt="" /></a>
									  </li>	
									 <li>
										<a href="single.html"><img src="images/g6.jpg" alt="" /></a>
									 </li>	
									 <li>
										<a href="single.html"><img src="images/g1.jpg" alt="" /></a>
									 </li>	
								 </ul>
							 </div>
							 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>

							</div>
						<div class="tech-news">
							<div class="main-title-head">
								<h3>tech     news</h3>
								<a href="singlepage.html">More  +</a>
								<div class="clearfix"></div>
							</div>	
							<div class="tech-news-grids">
								<div class="left-tech-news">
									<div class="tech-news-grid span_66">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="right-tech-news">
									<div class="tech-news-grid span_66">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
									<div class="tech-news-grid">
										<a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
										<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
										<p>by<a href="#">John Doe </a>  |  29 comments</p>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="right-posts">
						<div class="desk-grid">
							<h3>FROM   THE   desk</h3>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<div class="desk">
								<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
								<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
								<p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
							</div>
							<a class="more" href="singlepage.html">More  +</a>
						</div>
						<div class="editorial">
							<h3>editorial</h3>
							<div class="editor">
								<a href="single.html"><img src="images/e1.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e2.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e1.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
							<div class="editor">
								<a href="single.html"><img src="images/e3.jpg" alt="" /></a>
								<a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>	
				</div>
				</div>	
				@include('portal.sidebar')
			</div>
@endsection
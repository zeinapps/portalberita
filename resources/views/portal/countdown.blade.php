@extends('portal.master')
@section('content')
<style>
.col-lg-3 a {
	color: #cf0000;
	font-weight: bold;
	font-size: 0.875em;
	text-transform: uppercase;
	text-decoration: none;
}
a.title {
    color: #202021;
    font-size: 1em;
    font-weight: bold;
    margin-top: 10px;
    text-transform: lowercase;
    display: block;
    text-decoration: none;
	
</style>
			<div class="main-content">		
				<div class="col-md-9 total-news">
					
				<div class="posts">
					<div class="left-posts" style="width:100%;">
						<div class="world-news">
							<div class="main-title-head">
								<h3>from   around   the   world</h3>
								<div class="clearfix"></div>
							</div>
							<div class="raw">

            <div id="countdown" class="alert alert-info count-down" style="text-align:center;">
                <div id="link_keluar" class="download-buttons" style="display:none;">
                    <a  class="btn btn-danger" href="#">Klik Disini</a>
                </div>

            </div>

        </div>
        <script>
            window.onload = function () {
                var countdownElement = document.getElementById('countdown'),
                        downloadButton = document.getElementById('link_keluar'),
                        seconds = 10,
                        second = 0,
                        interval;

                downloadButton.style.display = 'none';

                interval = setInterval(function () {
                    countdownElement.firstChild.data = 'Link sumber akan muncul setelah ' + (seconds - second) + ' detik';
                    if (second >= seconds) {
                        downloadButton.style.display = 'block';

                        clearInterval(interval);
                    }

                    second++;
                }, 1000);
            }
        </script>
							<div class="row world-news-grids">
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="images/n1.jpg" alt="" style="width:100%;" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="images/n1.jpg" alt="" style="width:100%;" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="images/n1.jpg" alt="" style="width:100%;" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="images/n1.jpg" alt="" style="width:100%;" />
									<a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
									<p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
									<a href="singlepage.html">Read More</a>
								</div>
								
								
								<div class="clearfix"></div>
							</div>
						</div>
							
					</div>
					
					<div class="clearfix"></div>	
				</div>
				</div>	
				@include('portal.sidebar')
			</div>
@endsection
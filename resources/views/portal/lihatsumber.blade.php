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
								<h3>Link Sumber</h3>
								<div class="clearfix"></div>
							</div>
		<div class="raw">

            <div id="countdown" class="alert alert-danger count-down" style="text-align:center;">
                <div id="link_keluar" class="download-buttons" style="display:none;">
                    <a target="_blank"  class="btn btn-danger" href="{{ $data->url }}" style="color: #fff;background-color: #d9534f;">Klik Disini</a>
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
        </script><h2>Berita Terkait:</h2><br>
							<div class="row world-news-grids">
								
								@foreach($terkait as $item)
								
								
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="{{ $item['img_tumb'] }}" alt="{{ $item['title'] }}" style="width:100%;" />
									<a href="/{{ $item['time'] }}/detil/{{ $item['title'] }}" class="title">{{ $item['title'] }}</a>
									<p>{{  str_limit( strip_tags($item['konten']), $limit = 100, $end = '...') }}</p>
									<a href="/{{ $item['time'] }}/detil/{{ $item['title'] }}">Read More</a>
								</div>
								
								@endforeach
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
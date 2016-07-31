			
				<div class="col-md-3 side-bar">
				<div class="might">
					<a href=""><img src="images/iklan.jpg" class="img-responsive" alt=""> </a>
				</div>
				
				<div class="popular mpopular">
					<div class="main-title-head">
						<h5>populer</h5>
						<div class="clearfix"></div>
					</div>		
					<div class="popular-news">
					@foreach ($sidebar->views as $item) 
						<div class="popular-grid">
							<i>{{ date('d/m/Y H:i', $item->time+(7*3600) ) }}</i>
							<p>{{  str_limit( strip_tags($item->konten), $limit = 100, $end = '...') }}<a href="/{{ $item->time }}/detil/{{ $item->title }}"> Read More</a></p>
						</div>
					@endforeach
						<a class="more" href="#"> More  +</a>
					</div>
				</div>
					

				</div>	
				<div class="clearfix"></div>
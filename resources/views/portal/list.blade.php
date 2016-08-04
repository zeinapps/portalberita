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
    display: block;
    text-decoration: none;
	
</style>
			<div class="main-content">		
				<div class="col-md-9 total-news">
					
				<div class="posts">
					<div class="left-posts" style="width:100%;">
						<div class="world-news">
							<div class="main-title-head">
								<h3>{{ $title }}</h3>
								<div class="clearfix"></div>
							</div>
							<div class="world-news-grids">
							<?php $i = 0;?>
								@foreach($data as $item)
								@if($i == 0 || $i == 4)
									<div class="row" >
								@endif
								<div class="col-lg-3" style="margin-bottom:20px;">
									<img src="{{ $item['img_tumb'] }}" alt="{{ $item['title'] }}" style="width:90%; height:90px;" />
									<a href="/{{ $item['time'] }}/detil/{{ $item['title'] }}" class="title">{{ $item['title'] }}</a>
									<p>{{  str_limit( strip_tags($item['konten']), $limit = 100, $end = '...') }}</p>
									<a href="/{{ $item['time'] }}/detil/{{ $item['title'] }}">Read More</a>
								</div>
								@if($i == 3 || $i == 7)
									</div>
								@endif
								<?php $i++ ?>
								@endforeach
								<div class="clearfix"></div>
							</div>
							{!! $pagination->render() !!}
						</div>
							
					</div>
					
					<div class="clearfix"></div>	
				</div>
				</div>	
				@include('portal.sidebar')
			</div>
@endsection
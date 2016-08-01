@extends('portal.master')
@section('content')
			<div class="movie-main-content">		
				<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="msingle-grid box">
			<div class="grid-header">
				<h3>{{ $data->title }}</h3>
				<ul>
				<li><span>Post oleh {{ $data->penulis }} pada {{ $data->waktu }}</span></li>
				</ul>
			</div>
			<div class="singlepage">
							<a href="#"><img src="{{ $data->img }}" /></a>
							{!! $data->konten !!}
							<br>
							sumber: {{ $data->sumber }}
							<br>
							link: <a href="{{ $data->url }}" >klik disini</a>
							<div class="clearfix"> </div>
						</div>
						
							
		</div>
	
			<div class="clearfix"> </div>
	</div>
	
			</div>	
		@include('portal.sidebar')
			</div>
@endsection
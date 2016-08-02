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
							<a href="{{ $data->img }}"><img class="fix100" src="{{ $data->img }}" /></a>
						
							{!! $data->konten !!}
							
							sumber: {{ $data->sumber }}
							<br>
							link: <a href="{{ $data->url }}" target="_blank">klik disini</a>
							<div class="clearfix"> </div>
						</div>
						
							
		</div>
	
			<div class="clearfix"> </div>
	</div>
	
			</div>	
		@include('portal.sidebar')
			</div>
@endsection
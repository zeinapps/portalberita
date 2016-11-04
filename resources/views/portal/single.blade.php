@extends('portal.master')
@section('content')
<div class="movie-main-content">		
    <div class="col-md-9 total-news">

        <div class="grids">
            <div class="msingle-grid box">
                <div class="grid-header">
                    <ul class="bredcrumb">
                        <li><a href="/">Beranda /</a></li>
                        <li><a href="/{{ $data->kategori }}/kategori"> {{ $data->kategori }} / </a></li>
                        <li> {{ $data->title }}</li>
                    </ul>
                    <h1>{{ $data->title }}</h1>
                    <!-- AddThis Button BEGIN -->

                    <!-- AddThis Button END -->
                    <ul>
                        <li><span>Post oleh {{ $data->penulis }} pada {{ $data->waktu }}</span></li>
                    </ul>

                </div>

                <div class="singlepage">
                    <a href="{{ $data->img }}"><img class="fix100" src="{{ $data->img }}" /></a>
                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                        <a class="addthis_button_preferred_1"></a>
                        <a class="addthis_button_preferred_2"></a>
                        <a class="addthis_button_preferred_3"></a>
                        <a class="addthis_button_preferred_4"></a>
                        <a class="addthis_button_compact"></a>
                    </div>
                    {!! $data->konten !!}

                    <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=siap"></script>


                    sumber: {{ $data->sumber }}
                    <br>
                    link: <a href="/{{ $data->id }}/lihatsumber/{{ $data->kategori }}" >klik disini</a>
                    <div class="clearfix"> </div>
                </div><br><h2>Berita Terkait</h2>
                <div class="row">
                    @foreach($terkait as $item)

                    <div class="col-lg-3" style="margin-bottom:20px;">
                        <img src="{{ $item['img_tumb'] }}" alt="{{ $item['title'] }}" width="100%" />
                        <a href="/{{ $item['time'] }}/detil/{{ $item['title'] }}" class="title">{{ $item['title'] }}</a>

                    </div>

                    @endforeach
                </div>

            </div>

            <div class="clearfix"> </div>
        </div>

    </div>	
    <br>
    @include('portal.sidebar')
</div>
@endsection
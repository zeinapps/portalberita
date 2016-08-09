@extends('portal.master')
@section('content')
<div class="main-content">		
    <div class="col-md-9 total-news">
        <div class="slider">
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
            <style>
			
.slider{position:relative;background:#202021;padding:1em;margin-bottom:2em;}
h5.breaking{color:#fff;background:#cf0000;padding:6px 0;font-size:0.95em;font-weight:normal;width:14%;text-align:center;margin:0px 0 -14px -14px;}
.conference-rslide{position:relative;list-style:none;overflow:hidden;width:80%;padding:0;margin:0;}
.conference-slider{position:relative;}
.breaking-news-title{position:absolute;background:rgba(36, 34, 36, 0.68);bottom:3px;z-index:999;width:100%;left:4px;padding:0.5em 5em;}
.breaking-news-title a{color:#fff;font-size:1em;font-weight:normal;line-height:1.7em;}
.conference-rslide li{-webkit-backface-visibility:hidden;position:absolute;display:none;width:100%;left:0;top:0;}
.conference-rslide li:first-child{position:relative;display:block;float:left;}
.conference-rslide img{display:block;float:left;width:780px;height:380px;border:4px solid #000;}
.rslides_tabs{width:17%;position:absolute;bottom:2%;z-index:999;right:1%;}
.rslides_tabs li{display:block;}
.rslides_tabs a{border:3px solid #202021;}
.rslides_tabs li:first-child{margin-left:0;}
.rslides_tabs .rslides_here a{color:#fff;font-weight:bold;}
#slider3-pager a{display:inline-block;width:100%;}
#slider3-pager img{float:left;display:block;width:100%;}
#slider3-pager .rslides_here a{background:transparent;border:3px solid #ff0000;}
#slider3-pager a{}
@media (max-width:768px){#slider3-pager a{width:100%;}
.rslides_tabs{bottom:10px;}
}
@media (max-width:640px){#slider3-pager a{width:100%;}
.rslides_tabs{bottom:15px;}
}
@media (max-width:480px){#slider3-pager a{width:100%;}
.rslides_tabs{bottom:20px;}
}
@media (max-width:320px){#slider3-pager a{width:100%;}
.rslides_tabs{bottom:25px;}
}
			</style>
            <div class="conference-slider">
                <!-- Slideshow 3 -->
                <ul class="conference-rslide" id="conference-slider">
                    @foreach ($berita_pilihan as $item)                                                                    
                    <li><img src="{{ $item->img }}" alt="" >
                        <div class="breaking-news-title">
                            <a href="/{{ $item->time }}/detil/{{ $item->title }}">{{ $item->title }}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <!-- Slideshow 3 Pager -->
                <ul id="slider3-pager">
                    @foreach ($berita_pilihan as $item)                                                                    
                        <li><a href="#"><img src="{{ $item->img_tumb }}" alt="" style="height:80px"></a></li>
                    @endforeach
                    
                </ul>
                
            </div> 
            <h5 class="breaking">Breaking news</h5>
        </div>	
        <div class="posts">
            <div class="left-posts">
                <div class="world-news">
                    <div class="main-title-head">
                        <h3>Berita Terbaru</h3>
                        <a class="more" href="/terbaru">Selengkapnya  +</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="world-news-grids">
                        @foreach ($berita_terbaru as $item)   
                            <div class="world-news-grid">
                                <img src="{{ $item->img_tumb }}" alt="{{ $item->title }}" style="height:112px;width:180px;"/>
                                <a href="/{{ $item->time }}/detil/{{ $item->title }}" class="title">{{ $item->title }}</a>
                                <p>{{  str_limit( strip_tags($item->konten), $limit = 100, $end = '...') }} </p>
                                <a href="/{{ $item->time }}/detil/{{ $item->title }}">Read More</a>
                            </div>
                        @endforeach
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="latest-articles">
                    <div class="main-title-head">
                        <h3>Teknologi</h3>
                        <a class="more" href="/Teknologi/kategori">Selengkapnya  +</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="world-news-grids">
                        @foreach ($berita as $item)   
                        <div class="world-news-grid">
                            <img src="{{ $item->img_tumb }}" alt="{{ $item->title }}" style="height:112px;width:180px;" />
                            <a href="/{{ $item->time }}/detil/{{ $item->title }}" class="title">{{ $item->title }}</a>
                            <p>{{  str_limit( strip_tags($item->konten), $limit = 100, $end = '...') }} </p>
                            <a href="/{{ $item->time }}/detil/{{ $item->title }}">Read More</a>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <div class="tech-news">
                    <div class="main-title-head">
                        <h3>internasional</h3>
                        <a class="more" href="/internasional/kategori">Selengkapnya  +</a>
                        <div class="clearfix"></div>
                    </div>	 
                    <div class="tech-news-grids">
                        @foreach ($internasional as $item) 
                            <div class="tech-news-grid span_66">
                                <a href="{{ $item->time.'/detil/'.$item->title }}">{{ $item->title }}</a>
                                <p>{{  str_limit( strip_tags($item->konten), $limit = 100, $end = '...') }}</p>
                                <p style="color:#cf0000" >by {{ $item->penulis }}</p>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
            <div class="right-posts">
                <div class="desk-grid">
                    <h3>Politik</h3>
                    @foreach ($politik as $item)   
                    <div class="desk">
                        <a href="/{{ $item->time }}/detil/{{ $item->title }}" class="title">{{ $item->title }}</a>
                        <p>{{  str_limit( strip_tags($item->konten), $limit = 100, $end = '...') }}</p>
                        <p><a href="/{{ $item->time }}/detil/{{ $item->title }}">Read More</a><span>{{ date('d/m/Y H:i', $item->time+(7*3600) ) }}</span></p>
                    </div>
                    @endforeach
                    <a class="more" href="/politik/kategori">Selengkapnya  +</a>
                </div>
                <div class="editorial">
                    <h3>olahraga</h3>
                    @foreach ($olahraga as $item)
                    <div class="editor">
                        <a href="/{{ $item->time }}/detil/{{ $item->title }}"><img src="{{ $item->img_tumb }}" alt="{{ $item->title }}" /></a>
                        <a href="/{{ $item->time }}/detil/{{ $item->title }}">{{ $item->title }}</a>
                    </div>
                    @endforeach
					<a class="more" href="/olahraga/kategori">Selengkapnya  +</a>
                </div>
            </div>
            <div class="clearfix"></div>	
        </div>
    </div>	
    @include('portal.sidebar')
</div>
@endsection
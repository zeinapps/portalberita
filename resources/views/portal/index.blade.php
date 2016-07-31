@extends('portal.master')
@section('content')
<div class="main-content">		
    <div class="col-md-9 total-news">
        <div class="slider">
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function() {
                    $("#conference-slider").responsiveSlides({
                        auto: true,
                        manualControls: '#slider3-pager',
                    });
                    console.log('ss');
                });
            </script>
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
                        <li><a href="#"><img src="{{ $item->img_tumb }}" alt=""></a></li>
                    @endforeach
                    
                </ul>
                
            </div> 
            <h5 class="breaking">Breaking news</h5>
        </div>	
        <div class="posts">
            <div class="left-posts">
                <div class="world-news">
                    <div class="main-title-head">
                        <h3>Info Terbaru</h3>
                        <a href="singlepage.html">More  +</a>
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
                        <h3>Berita</h3>
                        <a href="singlepage.html">More  +</a>
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
                <div class="gallery">
                    <div class="main-title-head">
                        <h3>Galeri</h3>
                        <a href="#">More  +</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="gallery-images">
                        <div class="course_demo1">
                            <ul id="flexiselDemo1">	
                                @for ($i = 4; $i <= 7; $i++)   
                                <li>
                                    <a href="{{ $galeri[$i]['time'].'/detil/'.$galeri[$i]['title'] }}"><img src="{{ $galeri[$i]['img_tumb'] }}" alt="" style="height:112px;width:180px;"/></a>						
                                </li>
                                @endfor
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
                    </div>
                    <div class="course_demo1">
                        <ul id="flexiselDemo">	
                            @for ($i = 0; $i <= 3; $i++)   
                                <li>
                                    <a href="{{ $galeri[$i]['time'].'/detil/'.$galeri[$i]['title'] }}"><img src="{{ $galeri[$i]['img_tumb'] }}" alt="" style="height:112px;width:180px;"/></a>						
                                </li>
                            @endfor
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

                </div>
                <div class="tech-news">
                    <div class="main-title-head">
                        <h3>internasional</h3>
                        <a href="singlepage.html">More  +</a>
                        <div class="clearfix"></div>
                    </div>	 
                    <div class="tech-news-grids">
                        <div class="left-tech-news">
                            @for ($i = 0; $i <= 1; $i++)
                            <div class="tech-news-grid span_66">
                                <a href="{{ $internasional[$i]['time'].'/detil/'.$internasional[$i]['title'] }}">{{ $internasional[$i]['title'] }}</a>
                                <p>{{  str_limit( strip_tags($internasional[$i]['konten']), $limit = 100, $end = '...') }}</p>
                                <p>by <a href="">{{ $internasional[$i]['penulis'] }}</a></p>
                            </div>
                            @endfor
                        </div>
                        <div class="right-tech-news">
                            @for ($i = 2; $i <= 3; $i++)
                            <div class="tech-news-grid span_66">
                                <a href="{{ $internasional[$i]['time'].'/detil/'.$internasional[$i]['title'] }}">{{ $internasional[$i]['title'] }}</a>
                                <p>{{  str_limit( strip_tags($internasional[$i]['konten']), $limit = 100, $end = '...') }}</p>
                                <p>by <a href="">{{ $internasional[$i]['penulis'] }}</a></p>
                            </div>
                            @endfor
                        </div>
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
                    <a class="more" href="singlepage.html">More  +</a>
                </div>
                <div class="editorial">
                    <h3>olahraga</h3>
                    @foreach ($olahraga as $item)
                    <div class="editor">
                        <a href="/{{ $item->time }}/detil/{{ $item->title }}"><img src="{{ $item->img_tumb }}" alt="{{ $item->title }}" /></a>
                        <a href="/{{ $item->time }}/detil/{{ $item->title }}">{{ $item->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="clearfix"></div>	
        </div>
    </div>	
    @include('portal.sidebar')
</div>
@endsection
@extends("layouts.frontend")
@section("body")

        <!-- subheader begin -->
        <section id="subheader" class="page-news no-bottom" data-stellar-background-ratio="0.5">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>News</h1>
                            <div class="crumb">
                                <div class="deco">
                                    <ul>
                                        <li><a href="{{asset('/')}}">Home</a></li>
                                        <li>News</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                        <div id="newslist" class="news-list">
                            @foreach ($news as $news)
                            <div class="col-md-6 news-item item">
                                {{-- <img src="{{ asset('storage/image/'.$news->image_main) }}" class="img-responsive" alt=""> --}}
                                <div class="desc">
                                    <a href="#">
                                        <h3>{{ $news->news_heading }}</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    {{ $news->news_body }}									<br>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="clearfix"></div>

                        <div class="text-center ">
                            <ul class="pagination">
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>

                    </div>



                    <div id="sidebar" class="col-md-4">
                     



                        <!-- widget category -->
                        <!-- widget tags -->
                        <div class="widget widget_tags">
                            <h3><span>Tags</span></h3>
                            <ul>
                                <li><a href="#link">business</a></li>
                                <li><a href="#link">paralax</a></li>
                                <li><a href="#link">html 5</a></li>
                                <li><a href="#link">css 3</a></li>
                                <li><a href="#link">template</a></li>
                                <li><a href="#link">clean</a></li>
                                <li><a href="#link">flat</a></li>
                                <li><a href="#link">revolution slider</a></li>
                                <li><a href="#link">font awesome</a></li>
                                <li><a href="#link">carousel</a></li>
                                <li><a href="#link">modern</a></li>
                                <li><a href="#link">minimalist</a></li>
                            </ul>
                        </div>

                        <!-- widget text -->
                        <div class="widget widget-text">
                            <h3>Our Address</h3>

                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe>
                            </div>


                            Somewhere Over Rainbow<br>
                            Green World Rainbow Green World<br>
                            T. 0908 1000 1000<br>
                            E. contact@exotheme.com<br>
                        </div>
                        <!-- widget text -->

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

@endsection
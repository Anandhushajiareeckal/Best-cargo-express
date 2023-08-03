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
                            <div class="col-md-6 news-item item">
                                <img src="img/news/pic%20(1).jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <a href="#">
                                        <h3>We Opening New Branch on Brooklyn</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									<br>
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <img src="img/news/pic%20(2).jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <a href="#">
                                        <h3>Estimate Cost For Your Shipment</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>



                            <div class="col-md-6 news-item item">
                                <img src="img/news/pic%20(3).jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <a href="#">
                                        <h3>Tracking Apps For Mobile Phone</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <img src="img/news/pic%20(4).jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <a href="#">
                                        <h3>We Opening New Branch on Brooklyn</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <iframe width="560" height="315" src="http://www.youtube.com/embed/0gv7OC9L2s8" allowfullscreen></iframe>
                                <div class="desc">
                                    <a href="#">
                                        <h3>Youtube Video</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-film"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <img src="img/news/pic%20(5).jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <a href="#">
                                        <h3>Estimate Cost For Your Shipment</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-picture-o"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <div class="quote">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
                                </div>
                                <div class="desc">
                                    <a href="#">
                                        <h3>Quote Post</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-quote-right"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                </div>
                            </div>

                            <div class="col-md-6 news-item item">
                                <div class="desc">
                                    <a href="#">
                                        <h3>Text Only</h3>
                                    </a>
                                    <div class="post-details">Dec 23, 14 <span class="separator">|</span><i class="fa fa-pencil"></i><span class="separator">|</span>By: <a href='#'>Admin</a></div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
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
                        <div class="widget">
                            <h3>Latest News</h3>

                            <ul class="news-list-date">
                                <li>
                                    <div class="date">
                                        <span class="day">19</span>
                                        <span class="month">Aug</span>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h4>We Opening New Branch</h4>
                                        </a>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="date">
                                        <span class="day">18</span>
                                        <span class="month">Aug</span>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h4>Estimate Shipping Cost</h4>
                                        </a>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="date">
                                        <span class="day">17</span>
                                        <span class="month">Aug</span>
                                    </div>
                                    <div class="text">
                                        <a href="#">
                                            <h4>Tracking From Mobile Phone</h4>
                                        </a>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h3>Testimonials</h3>

                            <div id="testi-carousel-2" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <div class="item">
                                    <blockquote>
                                        Gocargo people professional and courteous attitude, expert knowledge and patience handling our specific issues are very important to our customer

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="img/about/testimonials/testimonial-1.jpg" class="img-circle" alt="">
                                        <span class="name"><strong>Jane Salima</strong>, General Manager<br>
                                            Nexus Motors</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        Your representatives have very helpful attitude and their attention to detail help us to move our work smoothly without any delay...good job guys

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="img/about/testimonials/testimonial-2.jpg" class="img-circle" alt="">
                                        <span class="name"><strong>Dave Smith</strong>, Sales Manager<br>
                                            Jepara Furniture</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <blockquote>
                                        I'm really impressed by the professionalism that the Gocargo relocation. Now we stay with our new studio at Metro city thanks Gocargo

                                    </blockquote>
                                    <div class="arrow-down"></div>
                                    <div class="testi-by">
                                        <img src="img/about/testimonials/testimonial-3.jpg" class="img-circle" alt="">
                                        <span class="name"><strong>Mike Martien</strong>, Web Designer<br>
                                            Bamskies Studio</span>
                                    </div>
                                </div>

                            </div>

                        </div>



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

                        <div class="widget widget-text">
                            <h3>About GoCargo</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

@endsection
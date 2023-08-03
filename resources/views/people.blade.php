@extends("layouts.frontend")
@section("body")

     <!-- subheader begin -->
     <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>People</h1>
                        <div class="crumb">
                            <div class="deco">
                                <ul>
                                    <li><a href="{{asset('/')}}">Home</a></li>
                                    <li><a href="{{asset('about')}}">About</a></li>
                                    <li>People</li>
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
                <div class="col-md-4">
                    <div class="widget">
                        <ul class="side-nav">
                            <li class="active"><a href="{{asset('about')}}">Company</a></li>
                            <li><a href="{{asset('people')}}">People</a></li>
                            <li><a href="{{asset('history')}}">History</a></li>
                            <li><a href="{{asset('testimonials')}}">Testimonials</a></li>
                            <li><a href="{{asset('careers')}}">Careers</a></li>
                            <li><a href="{{asset('faq')}}">FAQ</a></li>
                        </ul>
                    </div>

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
                </div>

                <div class="col-md-8">
                    <h2>Company Profile</h2>
                    <div class="divider-deco"><span></span></div>
                    <p><strong><i>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus</i></strong></p>
                    <p>
                        <img src="img/misc/pic%20(4).jpg" alt="">
                    </p>
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna 
                    </p>
                    <p>
                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.
                    </p>


                    <div class="divider-single"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Health &amp; Safety</h2>
                            <div class="divider-deco"><span></span></div>
                            <h4>Health</h4>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi 
                        
                        <h4>Safety</h4>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
                        </div>

                        <div class="col-md-6">
                            <h2>Future With Us</h2>
                            <div class="divider-deco"><span></span></div>
                            <p>
                                <img src="img/misc/pic%20(5).jpg" class="pull-left" alt="">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                        </div>

                        <div class="divider-single"></div>


                    </div>

                    <div class="divider-single"></div>

                    <div>
                        <h2>Board of Directors</h2>
                        <div class="divider-deco"><span></span></div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-4.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="divider-single"></div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-5.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-6.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-7.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="team-list text-center">
                                    <div class="pic">
                                        <span class="fx"></span>
                                        <img src="img/about/people/team-8.jpg" class="img-responsive" alt="">
                                    </div>
                                    <span class="name">Thomas White</span>
                                    <span class="position">Warehouse Officer</span>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>
    <!-- content close -->


@endsection
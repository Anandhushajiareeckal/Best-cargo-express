@extends("layouts.frontend")
@section("body")

         <!-- subheader begin -->
         <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>FAQ</h1>
                            <div class="crumb">
                                <div class="deco">
                                    <ul>
                                        <li><a href="{{asset('/')}}">Home</a></li>
                                        <li><a href="{{asset('about')}}">About</a></li>
                                        <li>FAQ</li>
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
                        <div class="simple-form">
                            <div class="l-col">
                                <input name="faq-search" id="faq-search" type="text" class="form-control" placeholder="type your question here">
                            </div>
                            <div class="r-col">
                                <input name="faq-submit" id="faq-submit" class="form btn btn-custom" type="submit" value="Submit">
                            </div>
                        </div>

                        <div class="divider-single"></div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>What services do freight forwarders provide and how can I find one?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Do I need an export license when making a private shipment?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>What can I do to prevent delays and ensure a smooth process of the shipment?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Any advice for a first time shipper?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Can you ship my vehicle internationally?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Do you have warehouse where I can drop off the cargo?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>What’s the best way to save money on air freight?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>

                        <div class="faq">
                            <span class="btn-expand"></span>
                            <div class="inner">
                                <i class="icon-search"></i>
                                <h4>Are there types of cargo that cannot be shipped via air freight?</h4>
                            </div>

                            <div class="hide-content">
                                Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->



@endsection
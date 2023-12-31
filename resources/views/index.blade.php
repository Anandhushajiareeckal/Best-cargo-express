@extends("layouts.frontend")
@section("body")

    <!-- content begin -->
    <div id="content" class="no-padding">
        <!-- section begin -->
        <section id="section-welcome" class="no-padding autoheight light-text" data-stellar-background-ratio="0.5">
            <div class="center-y">
                <div class="inner text-center">
                    <div class="sub-intro-text"><span>We are commited to be the leading</span></div>
                    <div class="divider-single"></div>
                    <h1><span class="id-color">WORLD CLASS</span></h1>
                    <div class="type-wrap title">
                        <div class="typed-strings">
                            <p>Logistic</p>
                            <p>Freight</p>
                            <p>Brokerage</p>
                        </div>
                        <span class="typed"></span>
                    </div>
                    <div class="divider-double"></div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-track" class="no-padding light-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-7 no-padding">
                                <div class="inner">
                                    <h3>Track &amp; Trace</h3>
                                    <span>Already have a load ID, please insert it below</span>
                                </div>
                            </div>
                            <div class="col-md-5 no-padding">
                                <input class="input-fullwidth" name="track" id="track">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a id="track-it" href="#section-tracking-result" class="btn-custom btn-fullwidth">Track it</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->
        
        <!-- section begin -->
        <section id="section-tracking-result" class="light-text no-margin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="divider-double"></div>
                            <div class="text-center">
                                <h3><span class="grey">Product ID:</span> 112345679087328</h3>
                            </div>


                            <div class="divider-double"></div>

                            <div class="wrapper-line padding40 rounded10">


                                <ul class="progress">
                                    <li><a href="#">Accepted</a></li>
                                    <li class="beforeactive"><a href="#">Order Processing</a></li>
                                    <li class="active"><a href="#">Shipment Pending</a></li>
                                    <li><a href="#">Estimated Delivery</a></li>
                                </ul>

                                <div class="divider-double"></div>

                                <ul class="timeline custom-tl">

                                    <li class="timeline-inverted">
                                        <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            Nov 03, 2015
                                            <span>20:07 pm</span>
                                        </div>
                                        <div class="timeline-badge success"><i class="fa fa-check-square-o wow zoomIn"></i></div>
                                        <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                            <div class="timeline-body">
                                                The shipment has been successfully delivered 
                                                <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline-inverted">
                                        <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            Nov 03, 2015
                                            <span>20:07 pm</span>
                                        </div>
                                        <div class="timeline-badge warning"><i class="fa fa-warning wow zoomIn"></i></div>
                                        <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                            <div class="timeline-body">
                                                The shipment could not be delivered 
                                                <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline-inverted">
                                        <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            Nov 03, 2015
                                            <span>20:07 pm</span>
                                        </div>
                                        <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                        <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                            <div class="timeline-body">
                                                The shipment has arrived in destination country
                                                <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline-inverted">
                                        <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            Nov 02, 2015
                                            <span>18:05 pm</span>
                                        </div>
                                        <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                        <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                            <div class="timeline-body">
                                                The shipment is being transformed to destination country
                                                <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="timeline-inverted">
                                        <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                            Nov 01, 2015
                                            <span>10:08 pm</span>
                                        </div>
                                        <div class="timeline-badge"><i class="fa fa-plane wow zoomIn"></i></div>
                                        <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                            <div class="timeline-body">
                                                The international shipment has been processed
                                                <span class="location">Baker Street, UK <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-gmaps">view on map</a></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- section close -->
        
        <!-- section begin -->
        <section id="explore-3" class="side-bg">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="inner-padding">
                            <h2>Our Services</h2>
                            <p>Best Express Cargo is a Leading freight forwarding company in the Middle East. Offering premium Freight & Logisitics Services to Business Worldwide. As premier Service international Freight Forwarders. We rank second to none in Designing Logistics infrastructures which provide the best compromise between cost, speed and reliability. </p>
                            <div class="divider-deco"><span></span></div>

                            <div class="row">
                                <div class="col-md-6 wow fadeIn" data-wow-delay=".2s">
                                    <div class="box-icon-small">
                                        <i class="fa fa-ship icon-light"></i>
                                        <div class="text">
                                            <h3>Ocean<br>
                                                Freight</h3>
                                            <p>Complete range of sea freight services for all types of cargo and requirements.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 wow fadeIn" data-wow-delay=".6s">
                                    <div class="box-icon-small">
                                        <i class="fa fa-truck icon-light"></i>
                                        <div class="text">
                                            <h3>Overland <br>
                                                Transportation</h3>
                                            <p>We help you to plan and make packing and moving as painless as possible.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider-single"></div>

                                <div class="col-md-6 wow fadeIn" data-wow-delay=".4s">
                                    <div class="box-icon-small">
                                        <i class="fa fa-plane icon-light"></i>
                                        <div class="text">
                                            <h3>Air<br>
                                                Freight</h3>
                                            <p>Air freight for shipments traveling nationwide or internationally via cargo.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 wow fadeIn" data-wow-delay=".8s">
                                    <div class="box-icon-small">
                                        <i class="fa fa-sharp fa-solid fa-road icon-light"></i>
                                        <div class="text">
                                            <h3>Door To Door  <br>
                                                Cargo Service</h3>
                                            <p>Customers are demanding. They want more choices. More flexibility in ordering and delivery. </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section class="no-padding">
            <div class="container-fullwidth">
                <div id="bg-box-1" class="one-fourth wow fadeInLeft" data-wow-delay=".4s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Customer<br>
                            Satisfication Tools</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-2" class="one-fourth wow fadeInLeft" data-wow-delay=".2s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Management &amp;<br>
                            Reporting</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-3" class="one-fourth wow fadeInRight" data-wow-delay=".2s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Freight Payment<br>
                            Options</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div id="bg-box-4" class="one-fourth wow fadeInRight" data-wow-delay=".4s">
                    <div class="bg-color-fx light-text padding-5 text-center">
                        <h3>Compliance<br>
                            Solutions</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>
                        <div class="tiny-border"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-4" class="side-bg">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInLeft">
                        <div class="inner-padding">
                            <h2>Our Mission</h2>
                            To continue to earn a reputation of integrity, service and diversity, that is unmatched in our industry, 'The Dependable Difference'								<div class="divider-deco"><span></span></div>

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

                    <div class="col-md-5 col-md-offset-2 wow fadeInRight">
                        <div class="inner-padding">
                            <h2>Certifications & Awards</h2>
                            With more than 30 years of experience in the logistics industry, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis
                            <div class="divider-deco"><span></span></div>

                            <div class="owl-custom-nav">
                                <a class="btn-prev"></a>
                                <a class="btn-next"></a>
                            </div>

                            <ul id="awards-carousel">
                                <li class="item">
                                    <div class="overlay">
                                        <h3>Best Logistic Company</h3>
                                        <h4>2015,  Topaz  Award Winner</h4>
                                    </div>
                                    <img src="img/awards/pic%20(1).jpg" alt="">
                                </li>

                                <li class="item">
                                    <div class="overlay">
                                        <h3>Best Freight Company</h3>
                                        <h4>2014,  Diamond  Award Winner</h4>
                                    </div>
                                    <img src="img/awards/pic%20(2).jpg" alt="">
                                </li>

                                <li class="item">
                                    <div class="overlay">
                                        <h3>Best Service of The Years</h3>
                                        <h4>2013,  Ruby  Award Winner</h4>
                                    </div>
                                    <img src="img/awards/pic%20(3).jpg" alt="">
                                </li>

                                <li class="item">
                                    <div class="overlay">
                                        <h3>Best Supplay Chain Solution</h3>
                                        <h4>2012,  Opal  Award Winner</h4>
                                    </div>
                                    <img src="img/awards/pic%20(4).jpg" alt="">
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="section-quick-quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row form-transparent">
                            <div class="col-md-12 wow fadeInDown">
                                <div class="text-label bg-color text-center light-text">
                                    <h3>Quick Quote</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control wow fadeInLeft" name="qq-name" id="qq-name" placeholder="Location">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control wow fadeInRight" name="qq-weight" id="qq-weight" placeholder="Weight">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control wow fadeInLeft" name="qq-destination" id="qq-destination" placeholder="Destination">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control wow fadeInRight" name="qq-packages" id="qq-packages" placeholder="No. of packages">
                            </div>

                            <div class="col-md-12 wow fadeInUp">
                                <input type="submit" class="form-control btn btn-custom" name="qq-submit" id="qq-submit" value="Get Rate Quote">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

       

        <!-- section begin -->
        <section id="section-counter" class="light-text">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        150
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Countries<br>
                                        Worldwide
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        25
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Years<br>
                                        Experience
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        770
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Packages<br>
                                        a Day
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="counter">
                                    <div class="num">
                                        5.5k
                                        <div class="tiny-border"></div>
                                    </div>
                                    <div class="text">
                                        Satisfied<br>
                                        Customers
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- section close -->

    </div>
    <!-- content close -->


@endsection
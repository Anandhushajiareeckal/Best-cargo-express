@extends("layouts.frontend")
@section("body")

    <!-- subheader begin -->
    <section id="subheader" class="page-service no-bottom" data-stellar-background-ratio="0.5">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Air Freight</h1>
                        <div class="crumb">
                            <div class="deco">
                                <ul>
                                    <li><a href="{{asset('/')}}">Home</a></li>
                                    <li><a href="{{asset('service')}}">Services</a></li>
                                    <li>Air Freight</li>
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
                            <li><a href="{{asset('service')}}">All Services</a></li>
                            <li class="active"><a href="{{asset('service_details_1')}}">Ocean Freight</a></li>
                             <li><a href="{{asset('service_details_3')}}">Overland Transportation</a></li>
                             <li><a href="{{asset('service_details_2')}}">Air Freight</a></li>
                             <li><a href="{{asset('service_details_4')}}">Sea / Air Freight</a></li>
                             <li><a href="{{asset('service_details_5')}}">Warehousing</a></li>
                             <li><a href="{{asset('service_details_6')}}">Door To Door Cargo Service</a></li>
                        </ul>
                    </div>

                    <div class="widget">
                        <img src="img/misc/pic%20(10).jpg" alt="" class="pull-left">
                        <h4>Download Brochure</h4>
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                    <br>
                        <a href="#" class="btn-arrow"><span class="line"></span><span class="url">Download</span></a>
                    </div>

                    <div class="widget">
                        <div class="simple-form">
                            <div class="l-col">
                                <input name="track-id" id="track-id" type="text" class="form-control" placeholder="insert your package id">
                            </div>
                            <div class="r-col">
                                <input name="track-submit" id="track-submit" class="form btn btn-custom" type="submit" value="Track">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="owl-custom-nav">
                        <a class="btn-prev"></a>
                        <a class="btn-next"></a>
                    </div>

                    <div class="single-carousel-arrow-nav">
                        <img src="img/services/air-freight/wide-1.jpg" alt="">
                        <img src="img/services/air-freight/wide-2.jpg" alt="">
                        <img src="img/services/air-freight/wide-3.jpg" alt="">
                    </div>

                    <div class="divider-single"></div>

                    <h2>Services Details</h2>
                    <div class="divider-deco"><span></span></div>
                    <p><strong><i>Best Expres Cargo have an experienced team of Air Freight Service specialists delivering on your daily priorities for time, space, frequency and cost, you have Jenae Logistics brand of Personal Service. </i></strong></p>
                    <p>
                        Best Expres Cargo listen, learn and form a close partnership with you to identify your needs and understand your goals. Our standard Air Freight products and their customizable options bring added flexibility to your supply chain. 
                        Whether we’re taking extra measures for your sensitive cargo or giving you added supply chain visibility through our online tracking tools, Best Expres Cargo Air Freight experts are looking to build your trust as they look after your cargo. You can rest assured that your cargo will reach safely when it is handled by the best Air freight service providers.
                    </p>


                    <h4>Effective Solutions</h4>
                    <p>When it comes to air freight, our company offers a comprehensive range of effective solutions tailored to meet the diverse needs of our clients. Our streamlined and efficient air freight services ensure timely and reliable delivery of goods across the globe. With a network of strategic partnerships and a deep understanding of international regulations, we guarantee seamless customs clearance and minimize delays. Our experienced team of logistics experts works tirelessly to optimize routes, consolidate shipments, and provide real-time tracking, maximizing cost-effectiveness without compromising on quality. Whether it's urgent shipments or large-scale consignments, our air freight solutions are designed to provide unmatched speed, security, and flexibility, ensuring that our clients' cargo arrives at its destination on time and in perfect condition</p>


                    <h4>Exhibition Shipments</h4>
                    <p>We ensuring swift and efficient delivery of valuable displays and materials to international events. Exhibitors rely on air cargo services to meet tight schedules and overcome geographical barriers, allowing their showcases to reach global audiences seamlessly. With dedicated logistics solutions, air freight companies cater to the unique requirements of exhibition shipments, handling delicate artworks, innovative technologies, and marketing materials with utmost care. The speed, reliability, and extensive network of air transportation facilitate a smooth and timely process, making air freight the preferred choice for exhibition organizers seeking a successful and impactful event experience worldwide.</p>





                </div>
            </div>
        </div>
    </div>
    <!-- content close -->

@endsection
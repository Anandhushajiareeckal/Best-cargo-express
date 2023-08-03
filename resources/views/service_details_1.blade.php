@extends("layouts.frontend")
@section("body")

      <!-- subheader begin -->
      <section id="subheader" class="page-service no-bottom" data-stellar-background-ratio="0.5">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Ocean Freight</h1>
                        <div class="crumb">
                            <div class="deco">
                                <ul>
                                    <li><a href="{{asset('/')}}">Home</a></li>
                                    <li><a href="{{asset('service')}}">Services</a></li>
                                    <li>Ocean Freight</li>
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
                    <h2>Services Details</h2>
                    <div class="divider-deco"><span></span></div>
                    <img src="img/services/ocean-freight/width-1.jpg" class="pull-right" alt=""><p><strong><i>Best Expres Cargo are Sea Freight professionals matching frequent sailings and flexible service options to your specific business objectives, you have Best Expres Cargo’ brand of Personal Service. </i></strong></p>
                    <p>
                        Best Expres Cargo's freight management experts partner with you to learn your business first-hand. Equipped with an intimate understanding of your supply chain requirements, we pull from a range of standard Sea Freight products and supplementary options to secure the space allocation, timing, frequency and rates that fit your precise objectives.                        </p>
                    <p>
                        Whether you need to reserve an oversize container or securely transport your high-value cargo, Best Expres Cargo Sea Freight specialists treat each shipment with the care and attention it takes to earn your trust.                        </p>


                    <div class="divider-single"></div>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/services/ocean-freight/small-1.jpg" alt="" class="img-resonsive img-fullwidth">
                        </div>
                        <div class="col-md-3">
                            <img src="img/services/ocean-freight/small-2.jpg" alt="" class="img-resonsive img-fullwidth">
                        </div>
                        <div class="col-md-3">
                            <img src="img/services/ocean-freight/small-3.jpg" alt="" class="img-resonsive img-fullwidth">
                        </div>
                        <div class="col-md-3">
                            <img src="img/services/ocean-freight/small-4.jpg" alt="" class="img-resonsive img-fullwidth">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="divider-single"></div>


                  


                </div>
            </div>
        </div>
    </div>
    <!-- content close -->

@endsection
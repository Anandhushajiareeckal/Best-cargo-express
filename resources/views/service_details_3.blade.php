@extends("layouts.frontend")
@section("body")

    <!-- subheader begin -->
    <section id="subheader" class="page-service no-bottom" data-stellar-background-ratio="0.5">
        <div class="inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Overland Transportation</h1>
                        <div class="crumb">
                            <div class="deco">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li>Overland Transportations</li>
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
                            <li><a href="services.html">All Services</a></li>
                            <li ><a href="service-details-1.html">Ocean Freight</a></li>
                            <li class="active"><a href="service-details-3.html">Overland Transportation</a></li>
                            <li><a href="service-details-2.html">Air Freight</a></li>
                            <li><a href="service-details-4.html">Sea / Air Freight</a></li>
                            <li><a href="service-details-5.html">Warehousing</a></li>
                            <li><a href="service-details-6.html">Door To Door Cargo Service</a></l>
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
                    <p><strong><i>Best Expres Cargo is a trusted Road Freight partner who knows as much about your business goals as transportation issues in your region, you have Best Expres Cargo brand of Personal Service, providing cargo services in Middle East. </i></strong></p>
                    <p>

                        Best Expres Cargo combine simple, standardized Road Freight products with a host of customizable options to achieve the ideal balance of lead-time, capacity, frequency and cost. Whether it means providing same day delivery or hauling hazardous cargo, Best Expres Cargo’s freight specialists know the key to a successful supply chain is a committed relationship with our customer.                        </p>

                    <div class="divider"></div>
                    <img src="img/services/cargo-express/small-5.jpg" alt="" class="pull-left">
                    <h4>Professional Drivers</h4>
                    <p>At our company, we take immense pride in our team of highly skilled and professional drivers. They are the backbone of our operations, dedicated to delivering exceptional service and ensuring the safe and timely transportation of goods and passengers. Our drivers possess extensive experience, having undergone rigorous training and obtaining all the necessary licenses and certifications. Committed to maintaining a stellar safety record, they prioritize road safety and follow industry best practices. Whether it's transporting cargo or serving as courteous chauffeurs.</p>

                    <div class="divider"></div>
                    <img src="img/services/cargo-express/small-6.jpg" alt="" class="pull-left">
                    <h4>Best Vehicle</h4>
                    <p>Our company boasts a fleet of robust and reliable cargo vehicles designed to meet diverse logistical needs. From compact vans for swift urban deliveries to heavy-duty trucks for long-haul transportation, our vehicles are equipped with cutting-edge technology and safety features to ensure secure and efficient cargo handling. With a team of skilled drivers and a commitment to timely deliveries, we take pride in providing top-notch transportation services to our clients. Whether it's transporting goods across town or across the country, our company's cargo vehicles are the epitome of excellence and the backbone of our logistics solutions.</p>

                    <div class="divider"></div>
                    <img src="img/services/cargo-express/small-7.jpg" alt="" class="pull-left">
                    <h4>Our Performance</h4>
                    <p>Our company takes immense pride in our highly skilled and diverse team of professionals. Our staff members are the driving force behind our success, and excellence. With a shared passion for delivering top-notch products and services, they work collaboratively to meet and exceed our clients' expectations. Their expertise, combined with their unwavering commitment to continuous improvement, ensures that we remain at the forefront of our industry. We value our staff as the core of our organization, and their talents, creativity, and strong work ethic truly make our company stand out in the market.</p>


                </div>
            </div>
        </div>
    </div>
    <!-- content close -->


@endsection
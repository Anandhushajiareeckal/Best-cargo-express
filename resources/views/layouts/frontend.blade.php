<?php
use App\models\contact;
use App\Http\Controllers\AboutController;
$contact=contact::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Express Cargo - Leading freight forwarding company in Middle East</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="preloader"></div>
    <div id="wrapper">



        </div>
        <!-- content close -->

         <!-- header begin -->
         <header>
            <div class="container " >
                <span id="menu-btn"></span>

                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="{{asset('/')}}">
                                    <img src="https://bestexpresscargo.com/assets/img/logo.png" alt="" class="logo-1">
                                    <img src="https://bestexpresscargo.com/assets/img/logo.png" alt="" class="logo-2" >
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <nav id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a  class="text-primary" href="{{asset('/')}}">Home</a></li>
                                <li><a href="{{asset('service')}}">Services</a></li>
                                <li><a href="{{asset('about')}}">About Us</a></li>
                                <li><a href="{{asset('news')}}">News & Updates</a></li>
                                <li><a href="{{asset('gallery')}}">Gallery</a></li>
                                <li><a href="" data-toggle="modal" data-target="#BookYourOrder">Book your order</a></li>
                                <li><a href="{{asset('contact')}}">Contact</a></li>
                            </ul>
                            
                           

                        </nav>
                        <!-- mainmenu close -->
                   
                        

                    </div>
                </div>
            </div>
        </header>
        <!--   -->
        
        @yield("body")
    

        <!-- The Modal -->
        <div class="modal fade" id="BookYourOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center" id="staticBackdropLabel">Book your order</h3>
                    </div>
                    <form action="/book_order" method="POST">
                        @csrf
                        <div class="modal-body">
                            <!-- Add 6 input text fields here -->
                            <div class="mb-3">
                            <label for="from" class="form-label">From:</label>
                            <input type="text" class="form-control" name="frm" id="from" placeholder="Enter From (Location)" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="destinattion" class="form-label">Destination:</label>
                            <input type="text" class="form-control" name="destination" id="destinattion" placeholder="Enter Destination (Location)" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="box" class="form-label">Number of boxes:</label>
                            <input type="text" class="form-control" name="box" id="box" placeholder="Enter Number Of Boxes" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="contact" class="form-label">Contact:</label>
                            <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required><br>
                            </div>
                            <div class="mb-3">
                            <label for="details" class="form-label">Booking details</label>
                            <textarea name="booking_details" id="details" cols="30" rows="10" class="form-control"  id="input6" required placeholder="Enter Booking Details"></textarea>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="booking_modal_submit">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="booking_modal_close">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    @foreach ($contact as $contact)
                    <div class="col-md-4">
                        <h3>Contact Us</h3>
                        <div class="feature-box icon-square">
                            <i class="fa fa-phone"></i>
                            <div class="text">
                                <p>
                                   Address: {{$contact->address}}  <br><br>
                                    Phone: {{$contact->phone}} <br><br>
                                    WhatsApp: {{$contact->whatsapp}}<br><br>
                                    Email - {{$contact->email}}<br><br>
                                    
                                </p>

                                <!-- social icons -->
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                                <!-- social icons close -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-4">
                        <h3>Bussiness Hours</h3>
                        <div class="feature-box icon-square">
                            <i class="fa fa-clock-o"></i>
                            <div class="text">
                                <ul class="list-border-bottom">
                                    <li>
                                        <span class="pull-left">Monday - Friday :</span>
                                        <span class="pull-right id-color">9 am to 10 pm</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <span class="pull-left">Saturday</span>
                                        <span class="pull-right id-color">9 am to 5 pm</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <span class="pull-left">Sunday & Official Holiday :</span>
                                        <span class="pull-right id-color">Closed</span>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Newsletter Sign Up</h3>
                        <div class="feature-box icon-square">
                            <i class="fa fa-newspaper-o"></i>
                            <div class="text">
                                <p>Subscribe to our weekly newsletter to get information and promotion on your inbox</p>
                                <div class="clearfix"></div>
                                <div class="subscribe">
                                    <div class="l-col">
                                        <input type="text" class="form-control" name="subscribe-email" id="subscribe-email">
                                    </div>
                                    <div class="r-col">
                                        <input class="form btn btn-custom" name="subscribe-submit" id="subscribe-submit" type="submit" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="divider-line"></div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget_tags">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="#link">business</a></li>
                                <li><a href="#link">paralax</a></li>
                                <li><a href="#link">html 5</a></li>
                                <li><a href="#link">carousel</a></li>
                                <li><a href="#link">modern</a></li>
                                <li><a href="#link">minimalist</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget">
                            <h3>Twitter Feeds</h3>
                            <div id="tweecool" class="twitter-widget"></div>


                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget">
                            <h3>Useful Links</h3>
                            <ul class="list-2-col">
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Location</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget">
                            <h3>Instagram</h3>
                            <div id="instagram"></div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="subfooter">
                &copy; Copyright 2015 - GoCargo by ExoTheme
            </div>
        </footer>
        <!-- footer close -->
    </div>


    
    <!-- LOAD JS FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/easing.js')}}"></script>
    <script src="{{asset('js/jquery.ui.totop.js')}}"></script>
    <script src="{{asset('js/selectnav.html')}}"></script>
    <script src="{{asset('js/ender.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/jquery.plugin.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/tweecool.js')}}"></script>
    <script src="{{asset('js/instafeed.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.js')}}"></script>
    <script src="{{asset('js/typed.js')}}"></script>

    <!-- theme custom and plugin settings -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/custom-tweecool.js')}}"></script>
    <script src="{{asset('js/custom-instafeed.js')}}"></script>

</body>


</html>

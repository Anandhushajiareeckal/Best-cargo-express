@extends("layouts.frontend")
@section("body")

 <!-- subheader begin -->
 <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Company</h1>
                    <div class="crumb">
                        <div class="deco">
                            <ul>
                                <li><a href="{{asset('/')}}">Home</a></li>
                                <li><a href="{{asset('about')}}">About</a></li>
                                <li>Company</li>
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
            <div class="col-md-4"><br><br>
                <div class="widget">
                    <ul class="side-nav">
                        <li class="active"><a href="{{asset('about')}}">Company</a></li>
                        <li><a href="{{asset('/')}}">Home</a></li>
                        <li><a href="{{asset('service')}}">Services</a></li>     
                        <li><a href="{{asset('gallery')}}">Gallery</a></li>
                        <li><a href="{{asset('contact')}}">Contacts</a></li>
                  </ul>
                </div>

                

                
            </div>

            <div class="col-md-8">
                <h2>Company Profile</h2>
                @foreach ($about_as as $about_as)

                <div class="divider-deco"><span></span></div>
                <img src="img/about/company/small-14.jpg" alt="" class="pull-right"><p><strong><i>{{$about_as->first_paraagraph}}</i></strong></p>
                <p>
                    {{$about_as->content}}
                </p>
                <p>
                </p><br><br>

                <div class="divider-double"></div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Mission &amp; Vision</h2>
                        <div class="divider-deco"><span></span></div>
                        <h4>Mission</h4>
                        {{$about_as->mission}}
                    
                    <h4>Vision</h4>
                    {{$about_as->vision}}
                </div>

                    <div class="col-md-6">
                        <h2>Quality Policy</h2>
                        <div class="divider-deco"><span></span></div>
                        {{$about_as->quality_policy}}
                    
                    
                    </div>

                    <div class="divider-single"></div>

                    <div class="col-md-6">
                        <h2>Our Objective</h2>
                        <div class="divider-deco"><span></span></div>
                        {{$about_as->our_objective}}

                        
                    </div>

                    <div class="col-md-6">
                        <h2>Our Values</h2>
                        <div class="divider-deco"><span></span></div>
                        <p>    
                            {{$about_as->our_values}}
                        </p>


                    </div>
                </div>

                <div class="divider-single"></div>

                <div class="box-padding-30 bg-1 light-text">
                    <div class="inner-padding">

                        <h2 class="id-color">Gocargo Commitment</h2>
                        <div class="tiny-border"></div>
                        <p class="lead big">
                            <i>We are commited to be the leading logistic solutions provider to our customer. We continually improving & implementing  a quality management
to achieve it</i>
                        </p>
                        <img src="img/signature.png" alt="">
                        <div class="divider-single"></div>
                        <strong>John Rukman</strong>, Vice President<br>
                        Gocargo Inc						
                        <br>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- content close -->
@endforeach

@endsection
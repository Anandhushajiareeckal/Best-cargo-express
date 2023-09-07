@extends("layouts.admin1_frontend")
@section("heading")
Service
@endsection
@section("heading1")
Service
@endsection
@section("body")

 {{-- service section start --}}
	<!-- ROW-2 OPEN -->

    
    <h1 class="center-heading " style="padding-left:450px ">Services</h1><br>
    <div class="row">
        @foreach ($service as $service)
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-auto feature">
                            {{-- <div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
                                <i class="fa fa-code fa-stack-1x text-white"></i>
                            </div> --}}
                        </div>
                        <div class="col-xl col-lg-12">
                            <div class="mt-1">       
                                <h4 class="fw-semibold">{{ $service->service_heading }}</h4><br>
                                <p class="mb-0">{{ $service->service_index_body }}.</p>
                            </div><br>
                            <div class="d-flex justify-content-center">
                                <a href="/admin_service/{{$service  ->id}}/delete"><button type="button" onclick="return confirm('Confirm')" class="btn btn-danger" style="margin-right: 10px;"><i class="fe fe-trash me-2"></i>Delete</button></a>
                                <a href="/admin_service/{{$service->id}}/edit"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-edit" ></i>  Edit</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
    <a href="/admin_service_update" class="btn btn-azure btn-block w-100  ">Add new services</a><br><br>
    @endsection
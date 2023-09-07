@extends("layouts.admin1_frontend")
@section("heading")
Update service
@endsection
@section("heading1")
Update service
@endsection
@section("body")

<!-- Row -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-bottom" >
                    <h3 class="card-title">Add new service here.</h3>
                </div>
                <div class="card-body pb-2">
                    <form class="needs-validation was-validated"  method="post" action="/admin_service_update" enctype="multipart/form-data">
                        <div class="row row-sm">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    
                                        @csrf
                                        <label class="form-label">Heading: </label><br>
                                        <input class="form-control mb-4 is-invalid state-invalid" name="service_heading" placeholder="Heading" required="" type="text">
                                        <label class="form-label">Summary: </label><br>
                                        <textarea class="form-control mb-4 is-invalid state-invalid" name="service_index_body" placeholder="Summary" required="" rows="3"></textarea>
                                        {{-- <label class="form-label">Content: </label><br> --}}
                                        {{-- <textarea class="form-control mb-4 is-invalid state-invalid" name="service_body" placeholder="Add content" required="" rows="3"></textarea><br> --}}
                                        <div class="btn-list" style="padding-left: 150px">
                                           <br> <button type="submit" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- End Row -->




<div class="row">
    <div class="col-lg-12 col-md-12">
       
    </div>
</div>
<!-- row closed -->

@endsection
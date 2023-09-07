@extends("layouts.admin1_frontend")
@section("heading")
Edit news
@endsection
@section("heading1")
Edit contact
@endsection
@section("body")

<!-- Row -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom" >
                <h3 class="card-title">Add news here.</h3>
            </div>
            <div class="card-body pb-2">
                    <div class="row row-sm">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <form class="needs-validation was-validated"  method="post" action="/admin_contact/edit" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    
                                    <label class="form-label">Address: </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="address" placeholder="Add content" required="" rows="3">{{$contact->address}}</textarea>                                                
                                    
                                    <label class="form-label">Phone: </label><br>
                                    <input class="form-control mb-4 is-invalid state-invalid" name="phone" placeholder="Heading" required="" type="text" value="{{$contact->phone}}">
                                    
                                    <label class="form-label">WhatsApp: </label><br>
                                    <input class="form-control mb-4 is-invalid state-invalid" name="whatsapp" placeholder="Heading" required="" type="text" value="{{$contact->whatsapp}}">
                                    
                                    <label class="form-label">Email: </label><br>
                                    <input class="form-control mb-4 is-invalid state-invalid" name="email" placeholder="Heading" required="" type="text" value="{{$contact->email}}">
                                    
                                    </div>
                                    <div class="btn-list" style="padding-left: 200px">
                                        <button type="submit" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
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
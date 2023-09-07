@extends("layouts.admin1_frontend")
@section("heading")
Edit About Us
@endsection
@section("heading1")
Edit About Us
@endsection
@section("body")

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header border-bottom" >
                <h3 class="card-title">About As.</h3>
            </div>
            <div class="card-body pb-2">
                <form class="needs-validation was-validated"  method="post" action="/admin_about/edit" enctype="multipart/form-data">
                    @method("PUT")
                    <div class="row row-sm">
                        <div class="col-lg-6">
                            <div class="form-group">
                                
                                    @csrf

                                    <label class="form-label">First Paragraph : </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="first_paraagraph" placeholder="Add content" required="" rows="3">{{$about_as->first_paraagraph}}</textarea>
                                    <br>
                                    <label class="form-label">Content: </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="content" placeholder="Add content" required="" rows="3">{{$about_as->content}}</textarea>

                                    
                                    <label class="form-label">Mission: </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="mission" placeholder="Add content" required="" rows="3">{{$about_as->mission}}</textarea>

                                    <label class="form-label">Vision: </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="vision" placeholder="Add content" required="" rows="3">{{$about_as->vision}}</textarea>

                                    
                                    
                                    <div class="btn-list" style="padding-left: 200px">
                                        <button type="submit" class="btn btn-dark"><i class="fe fe-upload me-2"></i>Upload</button>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="form-group">
                               
                                
                                <label class="form-label">Quality Policy: </label><br>
                                <textarea class="form-control mb-4 is-invalid state-invalid" name="quality_policy" placeholder="Add content" required="" rows="3">{{$about_as->quality_policy}}</textarea>
                                
                                
                                <br>
                                <label class="form-label">Our Objective: </label><br>
                                <textarea class="form-control mb-4 is-invalid state-invalid" name="our_objective" placeholder="Add content" required="" rows="3">{{$about_as->our_objective}}</textarea>
                                
                                <label class="form-label">Our Values: </label><br>
                                <textarea class="form-control mb-4 is-invalid state-invalid" name="our_values" placeholder="Add content" required="" rows="3">{{$about_as->our_values}}</textarea>

                            
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
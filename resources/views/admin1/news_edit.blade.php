@extends("layouts.admin1_frontend")
@section("heading")
Edit news
@endsection
@section("heading1")
Edit news
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
                                <form class="needs-validation was-validated"  method="post" action="/admin_news/{{$news->id}}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <label class="form-label">Heading: </label><br>
                                    <input class="form-control mb-4 is-invalid state-invalid" name="news_heading" placeholder="Heading" required="" type="text" value="{{$news->news_heading}}">
                                    <label class="form-label">Content: </label><br>
                                    <textarea class="form-control mb-4 is-invalid state-invalid" name="news_body" placeholder="Add content" required="" rows="3">{{$news->news_body}}</textarea>
                                
                                    {{-- <div class="card" style="width: 800px">
                                        <div class="card-header border-bottom">
                                            <h3 class="card-title">Add image</h3>
                                        </div> --}}
                                        {{-- <div class="card-body">
                                            <div class="row mb-4">
                                                 <div class="card-body">
                                                <div class="row mb-4">
                                                    <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
                                                        <input type="file" class="dropify" name="image_1" data-default-file="{{asset('storage/image/'.$news->image_main)}}" value="" data-height="200"  />
                                                    </div>
                                                 
                                                   
                                                </div>
                                            </div>  
                                            </div>
                                        </div> --}}
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
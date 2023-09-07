@extends("layouts.admin1_frontend")
@section("heading")
Order
@endsection
@section("heading1")
Order
@endsection
@section("body")
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Booking details</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Name</th>
                                            <th class="wd-15p border-bottom-0">E-mail</th>
                                            <th class="wd-20p border-bottom-0">Contact</th>
                                            <th class="wd-15p border-bottom-0">From</th>
                                            <th class="wd-10p border-bottom-0">Destination</th>
                                            <th class="wd-25p border-bottom-0">No.of Boxes</th>
                                            <th class="wd-25p border-bottom-0">Booking details:</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $order)
                                            <tr>
                                                <td>{{ $order->name}}</td>
                                                <td>{{ $order->email}}</td>
                                                <td>{{ $order->contact}}</td>
                                                <td>{{ $order->frm}}</td>
                                                <td>{{ $order->destination}}</td>
                                                <td>{{ $order->box}}</td>
                                                <td>{{ $order->booking_details}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


	

@extends('layouts.admin')

@section('sidebar_left')
@include('partials/admin/sidebar_left')
@endsection

@section('navbar_top')
@include('partials/admin/navbar_top')
@endsection

@section('content')
<div class="content-box">
    <div class="element-wrapper">
        <h6 class="element-header">
            Register and Manage Plans (Series)
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-4">
                <div class="element-box">
                    <form method="POST" action="/manage_series">
                        @csrf
                        <input type="hidden" name="action" value="create">
                        <h5 class="form-header">
                            Register Series
                        </h5>
                        <div class="form-desc">
                           The systems have been programmed to give an ROI of the Percentage stated on each series, Register the series, with their corresponding maintenace fee in percent
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""> Series Name</label>
                                    <input class="form-control" placeholder="Series Name"
                                        type="text" name="series_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""> Amount</label>
                                    <input class="form-control" placeholder="Amount"
                                        type="number" name="amount" required>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Maintenance Charge</label><input class="form-control"
                                        placeholder="Maintainaance Charge" type="text"  name="maintenance_charge" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Interest(In Percent)</label>
                                        <input class="form-control" placeholder="Interest Eg(70 for 70%)"
                                            type="text" name="interest" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Duration</label><input class="form-control"
                                            placeholder="Duration in days" type="number" name="duration" required>
                                    </div>
                                </div>
                            </div>
                      
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Series
                    </h5>
                    <div class="form-desc">
                       Manage series carefully, Deleting a particular series, results in users subscribed to this series loosing their plans,(Always use edit instead)
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1"  width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                   
                                    <th>Amount</th>
                                    <th>Duration</th>
                                    <th>Daily Rate</th>
                                    <th>Total Interest</th>
                                    <th>Maintenance Charge</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                   
                                    <th>Amount</th>
                                    <th>Duration</th>
                                    <th>Daily Rate</th>
                                    <th>Total Interest</th>
                                    <th>Maintenance Charge</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($series as $series)
                                <tr>
                                    <td>{{$series->series_name}}</td>
                                    <td>{{$series->amount}}</td>
                                    <td>{{$series->duration}} days</td>
                                    <td>{{$series->interest_rate}} %</td>
                                    <td>{{$series->total_interest}} %</td>
                                    <td>{{$series->maintenance_fee}}</td>
                                    <td><button class="btn btn-info btn-sm manage-series" data-id="{{$series->id}}">Edit</button></td>
                                </tr>
                            @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="dialogModal" role="dialog"
     tabindex="-1">
        <div class="modal-dialog  modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close
                        </span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-side-by-side">
                    <!-- Series management modal -->
                    <div class="onboarding-content with-gradient ">
                        <h4 class="onboarding-title text-danger">
                        Edit Series Details
                        </h4>
                        <div class="onboarding-text">
                        Manage your series(plans)
                        </div>
                        <form method="POST" action="/manage_series">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Series Name</label>
                                        <input class="form-control" placeholder="Brokerage Name"
                                            type="text" name="series_edit" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Maintenance Fee</label><input class="form-control"
                                            placeholder="Maintenance Fee" type="text" name="maintenance_fee_edit" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Amount</label>
                                        <input class="form-control" placeholder="Min Investment"
                                            type="number" name="amount_edit" required>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Total Interest(In Percent)</label>
                                        <input class="form-control" placeholder="Interest Eg(70 for 70%)"
                                            type="text" name="interest_edit" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Duration</label><input class="form-control"
                                            placeholder="Duration in days" type="number" name="duration_edit" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning delete-confirm" data-dismiss="modal" type="button"> Delete Series</button>
                                <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button>
                                <button class="btn btn-danger edit-confirm" type="submit"> Yes Proceed</button>
                            </div>
                            <input type="hidden" id="series_id" name="id" value="">
                            <input type="hidden" name="action" value="edit">
                        </form>
                    </div>
                    <!-- Series management modal ends-->

                </div>
            </div>
        </div>
   
    </div>

</div>
@endsection
@section('scripts')
    <script src="{{asset('public/dashboard/myscripts/admin/manage_series.js')}}"></script>
@endsection
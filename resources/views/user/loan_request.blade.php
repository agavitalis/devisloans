@extends('layouts.user')

@section('sidebar_left')
@include('partials/user/sidebar_left')
@endsection

@section('navbar_top')
@include('partials/user/navbar_top')
@endsection

@section('content')
<div class="content-box">
    <div class="element-wrapper">
        <h6 class="element-header">
            Manage and Confirm Matched 
        </h6>
        @include('partials/user/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Matched Lenders
                    </h5>
                    <div class="form-desc">
                      COnfirm and manage lenders here. Every decision here is final, thus be sure of whatever you are doing

                    </div>
                    <div class="table-responsive">
                        <table id="dataTableM" width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                   
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>POP</th>
                                    <th>Confirm Payment</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>POP</th>
                                    <th>Confirm Payment</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($matches as $match)
                                <tr>
                                    <td>{{$match->first_name}} {{$match->last_name}} </td>
                                    <td>{{$match->email}}</td>
                                    <td>{{$match->email}}</td>
                                   
                                    <td>{{$match->amount}}</td>
                                    <td>
                                        @php
                                            if($match->evidence == null){
                                                echo "NOT PAID";
                                            }else
                                            {
                                                echo "PAID";
                                            }
                                        @endphp
                                    
                                    </td>
                                    <td><button class="btn btn-sm btn-info view_pop" data-image="storage/uploads/{{$match->evidence}}" >View</button></td>
                                    <td><button class="btn btn-sm btn-danger confirm_payment" data-investor="{{$match->investor}}" data-pro_investor="{{$match->pro_investor}}">Confirm</button></td>
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
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close
                        </span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-side-by-side">
                    <div class="onboarding-media">
                        <img alt="" src="dashboard/img/logo4.png" width="200px">
                    </div>
                    <!-- View POP modal -->
                    <div class="pop-modal hidden onboarding-content with-gradient">
                        <h4 class="onboarding-title">
                            Evidence Uploaded
                        </h4>
                        <div class="onboarding-text">
                        You can download, by right clicking on the image, and using the save as option
                        </div>
                       
                        <div class="row">
                            <div class="col col-md-8" >
                                <img id="pop_img" src="" width="400" height="400" alt="POP Image" class="image-responsive" >
                            </div>
                           
                        </div>
                        
                    </div>
                    <!-- View POP modal ends-->

                    <!-- Payment Confirmation modal -->
                    <div class="confirm_payment-modal hidden onboarding-content with-gradient ">
                        <h4 class="onboarding-title text-danger">
                        Do you really want to confirm this payment?
                        </h4>
                        <div class="onboarding-text">
                        Clicking proceed will permanently confirm this transaction, this action cannot be undone. Are you sure you want to continue?
                        </div>
                        <form method="POST" action="/loan_request">
                            @csrf
                            <div class="modal-footer">
                                <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button>
                                <button class="btn btn-danger" type="submit"> Yes Proceed</button>
                            </div>
                            <input type="hidden" id="pro_investor" name="pro_investor" value="">
                            <input type="hidden" id="investor" name="investor" value="">
                            <input type="hidden" name="action" value="confirm-payment">
                        </form>
                    </div>
                    <!-- Payment Confirmation modal ends-->

                </div>
            </div>
        </div>
   
    </div>

</div>
@endsection

@section('sidebar_right')
@include('partials/user/sidebar_right')
@endsection

@section('scripts')
    <script src="{{asset('dashboard/myscripts/user/loan_request.js')}}"></script>
@endsection
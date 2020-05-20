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
            Manage and Confirm Withdrawal Requests
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Requests
                    </h5>
                    <div class="form-desc">
                       Manage requests made by investors, Use the "Mark as Paid" and "Delete" buttons carefully, All your actions are irreversible.

                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                            <thead>    
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Bank</th>
                                    <th>Account No</th>
                                    <th>Bitcoin Wallet</th>
                                    <th>Ethereum Wallet</th>
                                    <th>Amount</th>
                                    <th>Payment Mode</th>
                                    <th>Date Requested</th>
                                    <th>Mark as Paid</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Bank</th>
                                    <th>Account No</th>
                                    <th>Bitcoin Wallet</th>
                                    <th>Ethereum Wallet</th>
                                    <th>Amount</th>
                                    <th>Payment Mode</th>
                                    <th>Date Requested</th>
                                    <th>Mark as Paid</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($investors as $investor)
                                <tr>
                                    <td>{{$investor->account_name}}</td>
                                    <td>{{$investor->email}}</td>               
                                    <td>{{$investor->bank}}</td>
                                    <td>{{$investor->account_number}}</td>
                                    <td>{{$investor->bitcoin_wallet}}</td>
                                    <td>{{$investor->ethereum_wallet}}</td>
                                    <td>{{$investor->withdrawable_bal}}</td>
                                    <td>{{$investor->cashout_mode}}</td>
                                    <td>{{\Carbon\Carbon::parse($investor->updated_at)->diffForHumans()}}</td>
                                    <td>
                                        <form action="/withdraw__request" method="post">
                                            @csrf
                                            <input type="hidden" name="action" value="mark_paid">
                                            <input type="hidden" name="id" value="{{$investor->id}}">
                                            <button class="btn btn-success">Mark as Paid</button>
                                        </form>

                                    </td>

                                    <td>
                                        <form action="/withdraw__request" method="post">
                                            @csrf
                                            <input type="hidden" name="action" value="mark_delete">
                                            <input type="hidden" name="id" value="{{$investor->id}}">
                                            <button class="btn btn-danger" >Delete</button>
                                        </form>
                                        
                                    </td>
                                  
                                   
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
                                    
                    <!-- Mark as paid model -->
                    <div class="complete-modal hidden onboarding-content with-gradient ">
                        <h4 class="onboarding-title text-danger">
                        Do you really want to mark as paid?
                        </h4>
                        <div class="onboarding-text">
                        Clicking proceed will permanently mark this transaction as completed, are you sure you want to continue?
                        </div>
                        <form method="post" action="/withdraw__request">
                        <input type="hidden" name="complete_id" id="complete_id" value="">
                         @csrf
                         <input type="hidden" name="action" value="complete">
                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button><button class="btn btn-danger" type="submit"> Yes Proceed</button>
                        </div>
                        </form>
                    </div>
                    <!-- Mark as paid model ends-->
                    

                    <!-- I I am not paying modal -->
                    <div class="cancel-modal hidden onboarding-content with-gradient ">
                        <h4 class="onboarding-title text-danger">
                        Do you really want to delete this transaction?
                        </h4>
                        <div class="onboarding-text">
                        Clicking proceed will permanently delete this transaction, are you sure you want to continue?
                        </div>
                        <form method="post" action="/withdraw__request">
                         @csrf
                         <input type="hidden" name="action" value="delete">
                         <input type="hidden" name="delete_id" id="delete_id" value="">
                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button><button class="btn btn-danger" type="submit"> Yes Proceed</button>
                        </div>
                        </form>
                    </div>
                    <!-- I I am not paying modal ends-->

                </div>
            </div>
        </div>
   
    </div>

</div>
@endsection
@section('scripts')
    <script src="{{asset('dashboard/myscripts/admin/withdrawal_request.js')}}"></script>
@endsection
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
            Give a Loan
        </h6>
        @include('partials/user/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Finalize Lending Process
                    </h5>
                    <div class="form-desc">
                        To finalize this, please click on 'View Payment Details' button below. Once you have paid
                        contact them and ensure they confirm your payment.
                        Your account will be parmently suspended if we discover any fraudlent move
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont ">
                            <thead>
                                <tr>
                                    <th>Borrower Name</th>
                                    <th>Amount to Lend</th>

                                    <th>View Payment Details</th>
                                    <th>I have made Payment</th>
                                    <th>Refuse to Pay </th>

                                </tr>
                            </thead>
                            <tfoot>

                                <tr>
                                    <th>Borrower Name</th>
                                    <th>Amount to Lend</th>

                                    <th>View Account Details</th>
                                    <th>I have made Payment</th>
                                    <th>Refuse to Pay </th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($matches as $match)
                                <tr>
                                    <td>{{$match->first_name}} {{$match->last_name}}</td>
                                    <td>{{$match->amount}}</td>


                                    <td> <button class="btn btn-flat btn-success make-payments"  data-email="{{$match->email}}">Account
                                            Details</button></td>
                                    <td> <button class="btn btn-flat btn-info upload-pop"
                                            data-id="{{$match->id}}">Upload POP</button></td>
                                    <td> <button class="btn btn-flat btn-danger cancel-series"
                                            data-id="{{$match->id}}">Refuse to Pay</button></td>
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

<div aria-hidden="true" class="onboarding-modal modal fade animated" id="dialogModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg modal-centered" role="document">
        <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close
                </span><span class="os-icon os-icon-close"></span>
            </button>
            <div class="onboarding-side-by-side">

              
                <!-- POP Confirmation modal -->
                <div class="pop-modal hidden onboarding-content with-gradient">
                    <h4 class="onboarding-title">
                        Are you sure your payment was successful?
                    </h4>
                    <div class="onboarding-text">
                        If you upload a fake POP, your account will be permanently suspended. Take your time to
                        crosscheck the payment process again. The POP action is irreversible! <br /><br />
                        </div>
                        <form action="finalize_transaction" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="pop" name="action">
                            <input type="hidden" id="pop_id" name="id" value="">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Your POP</label>
                                        <input class="form-control" type="file" name="pop">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Submit for confirmation</label>
                                        <button class="form-control btn btn-flat btn-success mt-2"> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                </div>
                <!-- POP Confirmation modal ends-->

                <!-- I want to pay modal -->
                <div class="pay-modal hidden onboarding-content with-gradient ">
                    <h4 class="onboarding-title">
                        Complete Borrower Account Details
                    </h4>
                    <form>

                        <div class="form-desc">
                            To complete the lending process, pay the specified amount to the borrower with the
                            account details below

                        </div>
                        
                        <div class="form-group">
                            <label for="">Account Name</label>
                            <input type="text" class="form-control" id="b_name" readonly>
                        </div>

                        <div class="form-group">
                            <label for=""> Bank Name</label>
                            <input type="text" class="form-control" id="l_bank" readonly>
                        </div>

                        <div class="form-group">
                            <label for=""> Account Number</label>
                            <input type="text" class="form-control" id="l_ac" readonly>
                        </div>

                        <div class="form-group">
                            <label for=""> Phone Number</label>
                            <input type="text" class="form-control" id="l_phone" readonly>
                        </div>

                        <div class="form-group">
                            <label for=""> Email</label>
                            <input type="text" class="form-control" id="l_email" readonly>
                        </div>


                    </form>
                </div>
                <!-- I want to pay modal ends-->

                <!-- I am not paying modal -->
                <div class="cancel-modal hidden onboarding-content with-gradient">
                    <h4 class="onboarding-title text-danger">
                        Do you really want to cancel this process?
                    </h4>
                    <div class="onboarding-text">
                        Clicking proceed will permanently delete eject you from this system , are you sure you want to
                        continue?
                    </div>

                    <form action="finalize_transaction" method="post">
                        @csrf
                        <input type="hidden" value="delete" name="action">
                        <input type="hidden" id="delete_id" name="id" value="">

                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button>
                            <button class="btn btn-danger" type="submit"> Yes Proceed</button>
                        </div>
                    </form>
                </div>
                <!-- I am not paying modal ends-->

            </div>
        </div>
    </div>

</div>
@endsection

@section('sidebar_right')
@include('partials/user/sidebar_right')
@endsection

@section('scripts')
<script src="{{asset('dashboard/myscripts/user/finalize_transaction.js')}}"></script>
@endsection

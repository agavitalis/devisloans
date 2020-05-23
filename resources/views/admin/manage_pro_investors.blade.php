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
            Manage and Confirm Pro-Investors
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Pro-Investors
                    </h5>
                    <div class="form-desc">
                        COnfirm and manage pro-investors here. Every decision here is final, thus be sure of whatever
                        you are doing

                    </div>
                    <div class="table-responsive">
                        <table id="dataTableM" width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Status</th>

                                    <th>Match to Investor</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Status</th>

                                    <th>Match to Investor</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($investors as $investor)
                                <tr>
                                   
                                    <td>{{$investor->first_name}}</td>
                                    <td> {{$investor->last_name}} </td>
                                    <td>{{$investor->email}}</td>

                                    <td>{{$investor->series_name}}</td>
                                    <td>{{$investor->amount}}</td>
                                    <td>
                                        @php
                                        if($investor->fully_matched == null){
                                        echo "NOT FULLY MATCHED";
                                        }else
                                        {
                                        echo "FULLY MATCHED";
                                        }
                                        @endphp

                                    </td>
                                    <td><button class="btn btn-sm btn-info match_to_investor"
                                            data-id="{{$investor->id}}">Match to Investor</button></td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="text-center">
                        <?php echo $investors->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="dialogModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                        class="close-label">Close
                    </span><span class="os-icon os-icon-close"></span>
                </button>
                <!-- View Match modal -->
                <div class="onboarding-side-by-side">

                    <div class="onboarding-content">
                   
                        <form >
                           
                            <div class="form-desc">
                               Complete pro-investor details
                            </div>
                            <div class="form-group">
                                <label for="">Lender Email</label>
                                <input type="text" class="form-control" id="l_email" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for=""> Plan</label>
                                <input type="text" class="form-control" id="l_plan" readonly>
                            </div>

                            <div class="form-group">
                                <label for=""> Amount</label>
                                <input type="text" class="form-control" id="l_amount" readonly>
                            </div>

                            <div class="form-group">
                                <label for=""> Amount Matched So Far</label>
                                <input type="text" class="form-control" id="l_amount_matched"  readonly>
                            </div>

                        </form>
                    </div>
                    <div class="match-modal onboarding-content with-gradient">
                        <h4 class="onboarding-title">
                            Match Pro-Investor
                        </h4>

                        <form method="POST" action="/perform_investor_match">
                            @csrf
                            <div class="form-desc">
                                Match this Pro-investor by linking these variables correctly
                            </div>
                            <div class="form-group">
                                <label for=""> Select An Investor</label>
                                <select class="form-control borrower" name="borrower_id" required>
                                    <option value="" selected disabled>
                                        Select Borrower to match
                                    </option>

                                </select>
                                
                            </div>
                            <div class="alert alert-info  text-center">
                                Total Matched: <b id="total_matched"></b>
                            </div>

                            <div class="form-group">
                                <label for=""> Amount to Pay</label>
                                <input type="text" class="form-control" name="amount" required>
                            </div>
                            
                            <input type="hidden" class="form-control" name="lender_id"  id="lender_id" required>

                            <div class="form-buttons-w">
                                <button class="btn btn-primary" type="submit"> Perform Match</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- View Match modal ends-->

            </div>
        </div>
    </div>

</div>

</div>
@endsection
@section('scripts')
<script src="{{asset('dashboard/myscripts/admin/manage_pro_investors.js')}}"></script>
@endsection
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
            Manage and Confirm Investors
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Investors
                    </h5>
                    <div class="form-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A laboriosam quisquam neque deserunt
                        soluta, illum tenetur recusandae, ab nam fugit assumenda, eum reprehenderit perspiciatis
                        provident.

                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont table-responsive">
                            <thead>    
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Date Invested</th>
                                    <th>Cashout Date</th>
                                    <th>Rate</th>
                                    <th>ROI</th>
                                    <th>Maintainance Fee</th>
                                    <th>Withdrawable Bal</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Package</th>
                                    <th>Amount</th>
                                    <th>Date Invested</th>
                                    <th>Cashout Date</th>
                                    <th>Rate</th>
                                    <th>ROI</th>
                                    <th>Maintainance Fee</th>
                                    <th>Withdrawable Bal</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($investors as $investor)
                                <tr>
                                    <td>{{$investor->first_name}} {{$investor->last_name}} </td>
                                    <td>{{$investor->email}}</td>
                                    <td>{{$investor->series_name}}</td>
                                    <td>${{$investor->amount_invested}}</td>
                                    <td>{{\Carbon\Carbon::parse($investor->date_invested)->diffForHumans()}}</td>
                                    <td>{{\Carbon\Carbon::parse($investor->date_cashout)->diffForHumans()}}</td>
                                    <td>{{$investor->rate}}%</td>
                                    <td>${{$investor->roi}}</td>
                                    <td>{{$investor->maintenace_fee}}%</td>
                                    <td>${{$investor->withdrawable_bal}}</td>                             
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

    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="dialogModal" role="dialog"
    tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close
                        </span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-side-by-side">
                    <div class="onboarding-media">
                        <img alt="" src="public/dashboard/img/logo4.png" width="200px">
                    </div>
                    <!-- POP Confirmation modal -->
                    <div class="pop-modal hidden onboarding-content with-gradient">
                        <h4 class="onboarding-title">
                            Upload your POP for confirmation
                        </h4>
                        <div class="onboarding-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa officiis soluta qui debitis quos eos fugit magni autem in, pariatur nihil, inventore, molestias sunt? Harum esse voluptatem molestiae assumenda? Obcaecati?
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Your POP</label><input class="form-control"
                                            placeholder="Enter your full name..." type="file" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
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
                            Complete brokerage purchase
                        </h4>
                        <div class="onboarding-text">
                        To complete brokerage purchase, pay the brokergae amount in the bitcoin address XXXXXXXXXXXXXXXXXXXXXXXXxx
                        </div>
                
                    </div>
                    <!-- I want to pay modal ends-->

                    <!-- I I am not paying modal -->
                    <div class="cancel-modal hidden onboarding-content with-gradient ">
                        <h4 class="onboarding-title text-danger">
                        Do you really want to cancel this process?
                        </h4>
                        <div class="onboarding-text">
                        Clicking proceed will permanently delete this transaction, are you sure you want to continue?
                        </div>
                        <form>
                        <div class="modal-footer">
                            <button class="btn btn-success" data-dismiss="modal" type="button"> No, Close</button><button class="btn btn-danger" type="button"> Yes Proceed</button>
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
    <script src="{{asset('public/dashboard/myscripts/user/finalize_transaction.js')}}"></script>
@endsection
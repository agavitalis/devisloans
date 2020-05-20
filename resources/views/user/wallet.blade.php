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
            My Wallet
        </h6>
        @include('partials/user/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <div class="row pt-2">

                        <div class="col-md-4 col-sm-4 col-xxl-2">
                            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                <div class="label">
                                    Amount Loned
                                </div>
                                <div class="value">
                                    ${{ isset($investor->amount_invested)? round($investor->amount_invested,2) : "0.00"}}
                                </div>
                                <div class="trending trending-up">
                                    <i class="os-icon os-icon-wallet-loaded"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xxl-2">
                            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                <div class="label">
                                    ROI
                                </div>
                                <div class="value">
                                    ${{ isset($roi)? round($roi,2): "0.00"}}
                                </div>
                                <div class="trending trending-up">
                                    <span>7.32%</span><i class="os-icon os-icon-charts-stats-up"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xxl-2">
                            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                                <div class="label">
                                    My Referrals
                                </div>
                                <div class="value">
                                    {{$referral_count}}
                                </div>
                                <div class="trending trending-up">
                                    <i class="os-icon os-icon-users"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="element-wrapper compact p-4">

                        <h6 class="element-header">
                            Balance Breakdown
                        </h6>
                        <div class="element-box-tp">
                            <table class="table table-clean">
                                <tr>
                                    <td>
                                        <div class="value">
                                            Amount Traded
                                        </div>

                                    </td>
                                    <td class="text-right">
                                        <div class="value">
                                            ${{ isset($investor->amount_invested)? $investor->amount_invested : "0.00"}}
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="value">
                                          Accrued ROI
                                        </div>
                                        <span class="sub-value">Day {{ isset($diff_days)? $diff_days : "0"}}</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="value">
                                            ${{ isset($roi)? round($roi,2) : "0.00"}}
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="value">
                                            Referral Bonus
                                        </div>

                                    </td>
                                    <td class="text-right">
                                        <div class="value text-success">
                                        ${{ isset($referral_bonus->bonus)? round($referral_bonus->bonus,2): "0.00"}}
                
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="value">
                                            Total Balance
                                        </div>

                                    </td>
                                    <td class="text-right">
                                        <div class="value">
                                            ${{ isset($balance_total)? round($balance_total,2) : "0.00"}}
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="value">
                                            Withdrawable Balance
                                        </div>
                                        <span class="sub-value">Maintenance fee charged</span>

                                    </td>
                                    <td class="text-right">
                                        <div class="value">
                                            ${{ isset($balance_withdrawable)? round($balance_withdrawable,2) : "0.00"}}
                                        </div>

                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="element-wrapper compact p-4">
                        <h6 class="element-header">
                            Request Loan 
                        </h6>
                        <div class="balance-table pl-sm-2 text-center">

                            <table class="table table-lightborder table-bordered table-v-compact mb-0">
                                <div class="text-center">
                                    <strong class="text-center">Count down to maturity</strong>
                                </div>
                                @csrf
                                <tr>
                                    <td>
                                        <strong id="day">00</strong>
                                        <div class="balance-label smaller lighter text-nowrap">
                                            Day(s)
                                        </div>
                                    </td>
                                    <td>
                                        <strong id="hour">00</strong>
                                        <div class="balance-label smaller lighter text-nowrap">
                                            Hours
                                        </div>
                                    </td>
                                    <td>
                                        <strong id="minute">00</strong>
                                        <div class="balance-label smaller lighter text-nowrap">
                                            Minutes
                                        </div>
                                    </td>
                                    <td>
                                        <strong id="second">00</strong>
                                        <div class="balance-label smaller lighter text-nowrap">
                                            Seconds
                                        </div>
                                    </td>
                                </tr>

                            </table>
                     
                        <div class="text-center mt-3">
                            <button class="btn  btn-success btn-block withdraw">Request Loan on Maturity</button>
                        </div>

                        <div class="text-center mt-3">
                            <button class="btn  btn-primary btn-block withdraw_by_referal">Request Loan on Referrals</button>
                        </div>

                        <div class="text-center mt-3">

                            <button class="btn btn-warning btn-block withdraw-bonus">Request Bonuses</button>
                           
                        </div>
                        </div>
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
                </span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-side-by-side">
                <div class="onboarding-media">
                    <img alt="" src="dashboard/img/logo4.png" width="200px">
                </div>
                <!-- Payment Options -->
                <div class="options-modal hidden onboarding-content with-gradient">
                    <h4 class="onboarding-title">
                        Select your preferred mode of payment
                    </h4>
                    <div class="onboarding-text">
                       Your profile must be up to date before you can make withdrawal
                         </div>
                    <form >
                        @csrf
                        <input type="hidden" value="withdraw" name="action">
                        <input type="hidden" value="maturity" name="withdraw_by" id="withdraw_by">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Select Mode of Payment</label>
                                    <select class="form-control" name="cashout_mode" id="cashout_mode">
                                        <option value="BANK">Local Bank</option>
                                        <option disabled value="BTC">BTC Wallet (Coming Soon)</option>
                                        <option disabled value="Ethereum">Ethereum Wallet (Coming Soon)</option>

                                    </select>
                                </div>
                                <div class="alert alert-success alert-dismissable text-center success-div hidden">
                                    <button aria-hidden="true" data-dismiss="alert" class="close"
                                        type="button">×</button>
                                    <p class="success-message"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" data-dismiss="modal" type="button"> Cancel</button>
                                <button class="btn btn-danger proceed_withdraw" type="button">Proceed</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Payment Options modal ends-->

                 <!-- Bonus Options -->
                 <div class="bonus-modal hidden onboarding-content with-gradient">
                    <h4 class="onboarding-title">
                        Mode of Payment
                    </h4>
                    <div class="onboarding-text">
                       Please check that your profile is complete to enable you make instant withdrawal
                    </div>
                    <form action="/bonus_withdraw_request" method="post">
                        @csrf
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Select Mode of Payment</label>
                                    <select class="form-control" name="cashout_mode">
                                       
                                        <option value="BANK">Local Bank</option>
                                        <option value="BTC">BTC Wallet</option>
                                        <option value="Ethereum">Ethereum Wallet</option>
                                       
                                    </select>
                                </div>
                                <div class="alert alert-success alert-dismissable text-center success-div hidden">
                                    <button aria-hidden="true" data-dismiss="alert" class="close"
                                        type="button">×</button>
                                    <p class="success-message"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" data-dismiss="modal" type="button"> Cancel</button>
                                <button class="btn btn-danger" type="submit">Proceed</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Bonus Options modal ends-->

                <!-- Message modal -->
                <div class="message-modal hidden onboarding-content with-gradient ">
                    <h4 class="onboarding-title text-danger">
                        Withdrawal Message
                    </h4>
                    <div class="onboarding-text">
                        <strong class="withdrawal-message"></strong>
                    </div>



                    <div class="modal-footer">
                        <button class="btn btn-success" data-dismiss="modal" type="button"> Close</button>

                    </div>

                </div>
                <!-- Message modal ends-->

            </div>
        </div>
    </div>

</div>
@endsection

@section('sidebar_right')
@include('partials/user/sidebar_right')
@endsection


@section('scripts')

<script src="{{asset('dashboard/myscripts/user/user_wallet.js')}}"></script>
<script>
var deadline = new Date(
        "{{isset($investor->date_cashout)? $investor->date_cashout :Auth::user()->created_at->format('M d, Y H:i:s')}}")
    .getTime();

var x = setInterval(function() {

    var now = new Date().getTime();
    var t = deadline - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("day").innerHTML = days;
    document.getElementById("hour").innerHTML = hours;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("second").innerHTML = seconds;
    if (t < 0) {
        clearInterval(x);
        document.getElementById("day").innerHTML = '00';
        document.getElementById("hour").innerHTML = '00';
        document.getElementById("minute").innerHTML = '00';
        document.getElementById("second").innerHTML = '00';
    }
}, 1000);
</script>

@endsection
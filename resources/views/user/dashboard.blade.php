@extends('layouts.user')

@section('sidebar_left')
@include('partials/user/sidebar_left')
@endsection

@section('navbar_top')
@include('partials/user/navbar_top')
@endsection

@section('content')

<div class="content-box">
    @include('partials/user/alert')
    <div class="os-tabs-w">
        <div class="os-tabs-controls os-tabs-complex">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#tab_overview"><span
                            class="tab-label">Live Account</span><span class="badge badge-success"><i
                                class="os-icon os-icon-user"></i></span></a>
                </li>
                <div class="avatar-w">
                    <img alt=""
                        src='{{(Auth::user()->picture != null)? "storage/uploads/".Auth::user()->picture : "dashboard/img/avatar1.jpg"}}'
                        height='70px' width='70px' style="border-radius:35px">
                </div>

                <li class="nav-item nav-actions d-none d-sm-block">
                    <a class="btn btn-grey" href="#"><i class="os-icon os-icon-coins-4"></i><span>Plan:
                            {{ isset($investor->series_name)? $investor->series_name : "None"}} </span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-8 col-xxl-6">
            <div class="element-balances justify-content-between mobile-full-width">
                <div class="balance balance-v2">
                    <div class="balance-title">
                        Your Loan Balance
                    </div>
                    <div class="balance-value">
                        <span class="d-xxl-none">${{ isset($balance_total)? round($balance_total,2) : "0.00"}}</span>
                    </div>
                </div>
                <div class="balance-table pl-sm-2">

                    <table class="table table-lightborder table-bordered table-v-compact mb-0">
                        <div class="text-center">
                            <strong class="text-center">Count down to maturity</strong>
                        </div>

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
                </div>
            </div>
            <div class="element-wrapper pb-4 mb-4 border-bottom">
                <div class="element-box-tp">
                    <a class="btn btn-primary" href="/initiate_transaction">
                        <i class="os-icon os-icon-refresh-ccw"></i><span>Lend Loan</span>
                    </a>
                    <a class="btn btn-grey" href="/user_wallet">
                        <i class="os-icon os-icon-log-out"></i><span>Receive Loan</span>
                    </a>
                </div>
            </div>
            <div class="element-wrapper compact">
                <div class="element-box-tp">
                    <h6 class="element-box-header">
                        Balance History
                    </h6>
                    <div class="el-chart-w">
                        <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46,38,32,45,46,38,32,45" height="50"
                            id="liteLineChartV3" width="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 d-none d-lg-block">
            <div class="cta-w purple text-center">
                <div class="cta-content extra-padded">
                    <div class="highlight-header">
                        Bonus
                    </div>
                    <h5 class="cta-header">
                        Invite your friends and make money with referrals
                    </h5>
                    <form action="/email_invite" method="post">
                        @csrf
                        <div class="newsletter-field-w">
                            <input placeholder="Email address..." required name="email" type="email">
                            <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-2">

        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    Trading Amount
                </div>
                <div class="value">
                    ${{ isset($investor->amount_invested)? $investor->amount_invested : "0.00"}}
                </div>
                <div class="trending trending-up">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    ROI
                </div>
                <div class="value">

                    ${{ isset($roi)? number_format((float)$roi,2,'.',''): "0.00"}}
                </div>
                <div class="trending trending-up">
                    <span>2.50%</span><i class="os-icon os-icon-charts-stats-up"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 col-xxl-2">
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
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    Referral Bonus
                </div>
                <div class="value text-danger">
                    ${{ isset($referral_bonus->bonus)? number_format((float)$referral_bonus->bonus,2,'.',''): "0.00"}}

                </div>
                <div class="trending trending-down">
                    <i class="os-icon os-icon-coins-4"></i>
                </div>
            </a>
        </div>

    </div>
 
    <div class="row">

        <div class="col-md-12">

            <div class="element-wrapper compact pt-2">

                <h6 class="element-header">
                    Referal Links:
                </h6>
                <div class="element-box-tp">
                    <div class="post-box">

                        <div class="value">
                            https://elifeseries.com/register?referral={{Auth::user()->email}}
                        </div>
                    </div>

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
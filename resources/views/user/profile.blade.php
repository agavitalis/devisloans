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
    <div class="row">
        <div class="col-sm-5">
            <div class="user-profile compact">
                <div class="up-head-w" style="background-image:url(img/profile_bg1.jpg)">
                    <div class="up-social">
                        <a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i
                                class="os-icon os-icon-facebook"></i></a>
                    </div>
                    <div class="up-main-info">
                        <h2 class="up-header">
                            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                        </h2>
                        <h6 class="up-sub-header">
                            Devis Participant
                        </h6>
                    </div>
                    <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219"
                        preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF">
                            <path class="decor-path"
                                d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="up-controls">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="value-pair">
                                <div class="label">
                                    Status:
                                </div>
                                <div class="value badge badge-pill badge-success">
                                    Member
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="up-contents">
                    <div class="m-b">
                        <div class="row m-b">
                            <div class="col-sm-8 b-r b-b">
                                <div class="el-tablo centered padded-v">
                                    <div class="value">
                                        N{{ isset($investor->amount_invested)? $investor->amount_invested : "0.00"}}
                                    </div>
                                    <div class="label">
                                        Amount Borrowed
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 b-b">
                                <div class="el-tablo centered padded-v">
                                    <div class="value">
                                        {{$referral_count}}
                                    </div>
                                    <div class="label">
                                        Referrals
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padded">
                            <div class="os-progress-bar primary">
                                <div class="bar-labels">
                                    <div class="bar-label-left">
                                        <span>Profile Completion</span>
                                    </div>
                                    <div class="bar-label-right">
                                        <span class="info">{{ ($profile_completion == 1)? "100" : "50"}}/100</span>
                                    </div>
                                </div>
                                <div class="bar-level-1" style="width: 100%">
                                    <div class="bar-level-2" style="width: 80%">
                                        <div class="bar-level-3" style="width: 30%"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="element-wrapper">
                <div class="element-box">
                    <h6 class="element-header">
                        Account Password
                    </h6>
                    <div class="timed-activities compact">
                        <div class="timed-activity">
                            <div class="ta-date">
                                <span>Secure Account</span>
                            </div>
                            <div class="ta-record-w">
                                <form action="/user_profile" method="post">
                                    @csrf
                                    <input type="hidden" name="action" value="password">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for=""> Current Password</label><input class="form-control"
                                                    name="current_password" placeholder="Current Password"
                                                    required="required" type="password">

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">New Password</label><input class="form-control"
                                                    name="new_password" placeholder="New Password" required="required"
                                                    type="password">

                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Confirm New Password</label><input class="form-control"
                                                    name="password_confirm" placeholder="Confirm New Password" required="required"
                                                    type="password">

                                            </div>
                                        </div>
                                        <div class="form-buttons-w">
                                            <button class="btn btn-danger" type="submit"> Change Password</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="element-wrapper">
                <div class="element-box">
                    <form method="post" action="/user_profile">
                        @csrf
                        <input type="hidden" name="action" value="profile_update">
                        <div class="element-info">
                            <div class="element-info-with-icon">
                                <div class="element-info-icon">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <div class="element-info-text">
                                    <h5 class="element-inner-header">
                                        Profile Settings
                                    </h5>
                                    <div class="element-inner-desc">
                                        Ensure your profile is complete. This will enable you make withdrawal in the last hour
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> First Name</label><input class="form-control" name="first_name"
                                        placeholder="First Name" required="required" type="text"
                                        value="{{Auth::user()->first_name}}">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Last Name</label><input class="form-control" name="last_name"
                                        placeholder="Last Name" required="required" type="text"
                                        value="{{Auth::user()->last_name}}">

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Email</label><input class="form-control" name="email"
                                        placeholder="Email Address" required="required" readonly type="email"
                                        value="{{Auth::user()->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Phone</label><input class="form-control" name="phone"
                                    placeholder="+1 585-332-7989" required="required"  type="text"
                                    value='{{ isset($profile->phone)? $profile->phone : ""}}'>
                            </div>
                        </div>
                        </div>


                        <fieldset class="form-group">
                            <legend><span>Payment Details</span></legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Bitcoin Wallet Address(Coming Soon)</label><input class="form-control"
                                            name="bitcoin_wallet" type="text" required placeholder="Enter your address" readonly
                                            value='{{ isset($profile->bitcoin_wallet)? $profile->bitcoin_wallet : ""}}'>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Ethereum Wallet Address(Coming Soon)</label><input class="form-control"
                                            name="ethereum_wallet" type="text" required placeholder="Enter your address" readonly
                                            value='{{ isset($profile->ethereum_wallet)? $profile->ethereum_wallet : ""}}'>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Account Name</label><input class="form-control"
                                            name="account_name" placeholder="Account Name" type="text"
                                            value='{{ isset($profile->account_name)? $profile->account_name : ""}}'>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Bank Name</label><input class="form-control" name="bank_name"
                                            placeholder="Bank Name"
                                            value='{{ isset($profile->bank)? $profile->bank : ""}}' type="text">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Account Number</label><input class="form-control"
                                            name="account_number" placeholder="Account Number" type="text"
                                            value='{{ isset($profile->account_number)? $profile->account_number : ""}}'>

                                    </div>
                                </div>
                            </div>
                           

                        </fieldset>
                        <fieldset class="form-group">
                            <legend><span>Contact Details</span></legend>
                            <div class="form-group">
                                <label> Contact Address</label><textarea class="form-control" rows="2"
                                    name="address"> {{ isset($profile->street)? $profile->street : ""}}</textarea>
                            </div>
                            <div class="form-group">
                                <label> State</label><textarea class="form-control" rows="1"
                                    name="state">{{ isset($profile->state)? $profile->state : ""}}</textarea>
                            </div>
                            <div class="form-group">
                                <label> Country</label><textarea class="form-control" rows="1"
                                    name="country">{{ isset($profile->country)? $profile->country : ""}}</textarea>
                            </div>

                        </fieldset>

                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------
            START - Sidebar
            -------------------->
<div class="content-panel">
    <div class="content-panel-close">
        <i class="os-icon os-icon-close"></i>
    </div>
    <div class="element-wrapper">
        <div class="">
            <h6 class="element-header">
                Completed Transactions
            </h6>
            <div class="timed-activities compact">
                @foreach($completed as $completed)
                <div class="timed-activity">
                    <div class="ta-date">
                        <span>{{\Carbon\Carbon::parse($completed->finalized_on)->diffForHumans()}}</span>
                    </div>
                    <div class="ta-record-w">
                        <div class="ta-record">
                            
                            <div class="ta-activity">
                            <a href="#">${{$completed->amount_invested}} </a> Brokerage investment
                            </div>
                            <div class="ta-timestamp">
                                Marked as completed by <strong>Admin</strong> 
                            </div>
                        </div>
                       
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </div>

    <div class="element-wrapper">
        <h6 class="element-header">
            My Referrals
        </h6>
        <div class="element-box-tp">

            <div class="users-list-w">
                @foreach($referrals as $referral)
                <div class="user-w with-status status-green">
                    <div class="user-avatar-w">
                        <div class="user-avatar">
                            <img alt="" src="img/avatar1.jpg">
                        </div>
                    </div>
                    <div class="user-name">
                        <h6 class="user-title">
                            {{$referral->first_name}} {{$referral->last_name}}
                        </h6>
                        <div class="user-role">
                            {{$referral->email}}
                        </div>
                    </div>
                    <div class="user-action">
                        <div class="os-icon os-icon-user"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="element-wrapper">
        
        <h6 class="element-header">
            For Bank Withdrawal
        </h6>
        <div class="timed-activities compact">
            <div class="timed-activity">
                <div class="ta-date">
                    <span>Submit Valid Credentials</span>
                </div>

                <div class="ta-record-w">
                    <form action="/user_profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="action" value="other_details">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""> Passport Photo (white background)</label>
                                    <input class="form-control" name="profile_picture" type="file">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Official ID (front)</label>
                                    <input class="form-control" name="id_card" type="file">
                                    <p><small>Intl-Passport/National ID/Business ID</small></p>
                                </div>
                            </div>
                            <!-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Official ID (back)</label>
                                    <input class="form-control" name="id_card_back" type="file">
                                    <p><small>Intl-Passport/National ID/School ID</small></p>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Social Handles (optional)</label>
                                    <input class="form-control" name="social_handle" placeholder="Facebook URL" type="text" value='{{ isset($profile->social)? $profile->social : ""}}'>
                                </div>
                            </div> -->
                            <div class="form-buttons-w">
                                <button class="btn btn-primary" type="submit"> Update</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
        
    </div>

    <div class="element-wrapper">
        
        <h6 class="element-header">
            Announcements
        </h6>
        <div class="timed-activities compact">
            <div class="timed-activity">
                <div class="ta-date">
                    <span>Admin Message</span>
                </div>

                <div class="ta-record-w">
                    @foreach($announcements as $announcement)

                    <p class="">
                        <h6>{{$announcement->heading}}</h6>
                    </p>
                    <p>
                        {{$announcement->content}}
                   </p>
                   @endforeach
                    <p class="small"><marquee>By signing up to Davisloans, you agree that Davisloans terms and conditions.<marquee></p>
                </div>
            </div>

        </div>
        
    </div>
</div>
<!--------------------
            END - Sidebar
            -------------------->
@endsection
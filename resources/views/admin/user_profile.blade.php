@extends('layouts.admin')

@section('sidebar_left')
@include('partials/admin/sidebar_left')
@endsection

@section('navbar_top')
@include('partials/admin/navbar_top')
@endsection

@section('content')
<div class="content-box">
    @include('partials/user/alert')
    <div class="row">
        <div class="col-sm-5">
            <div class="user-profile compact">
                <div class="up-head-w" style="background-image:url(img/profile_bg1.jpg); align-item:center">
                  
                    <div class="up-main-info">
                        <div class="avatar-w">
                            <img alt="" src='{{isset($user->picture)? asset("storage/uploads/".$user->picture) : asset("public/dashboard/img/avatar1.jpg")}}' height='70px' width='70px' style="border-radius:35px">
                        </div>
                        <h2 class="up-header">
                        {{ isset($user->first_name)? $user->first_name : ''}} {{ isset($user->last_name)? $user->last_name : ''}}
                        </h2>
                        <h6 class="up-sub-header">
                            Elife Investor
                        </h6>
                    </div>
                </div>
                
            </div>
            <div class="element-wrapper">
                <div class="element-box">
                    <h6 class="element-header">
                        Identification
                    </h6>
                    <div class="timed-activities compact">
                        <div class="timed-activity">
                            <div class="ta-date">
                                <span>Official ID (front)</span>
                            </div>
                            <div class="ta-record-w">
                               
                                <img alt="" src='{{isset($user->id_card)? asset("storage/uploads/".$user->id_card) : asset("public/dashboard/img/avatar1.jpg")}}' height='200px' width='200px' >
                        
                            </div>
                        </div>

                    </div>

                    <div class="timed-activities compact">
                        <div class="timed-activity">
                            <div class="ta-date">
                                <span>Official ID (back)</span>
                            </div>
                            <div class="ta-record-w">
                               
                                <img alt="" src='{{isset($user->id_card_back)? asset("storage/uploads/".$user->id_card_back) : asset("public/dashboard/img/avatar1.jpg")}}' height='200px' width='200px' >
                        
                            </div>
                        </div>

                    </div>
                </div>
            </div>
           
        </div>
        <div class="col-sm-7">
            <div class="element-wrapper">
                <div class="element-box">
                    <form>
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
                                    <label for=""> First Name</label><input class="form-control" readonly
                                        placeholder="First Name"  type="text"
                                        value="{{ isset($user->first_name)? $user->first_name : ''}}">

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Last Name</label><input class="form-control" readonly
                                        placeholder="Last Name"  type="text"
                                        value="{{ isset($user->last_name)? $user->last_name : ''}}">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Phone</label><input class="form-control" readonly
                                        placeholder="Phone"  readonly type="phone"
                                        value="{{ isset($user->phone)? $user->phone : ''}}">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Email</label><input class="form-control" readonly
                                        placeholder="Email Address"  readonly type="email"
                                        value="{{ isset($user->email)? $user->email : ''}}">
                                </div>
                            </div>
                        </div>


                        <fieldset class="form-group">
                            <legend><span>Other Details</span></legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Bank Name</label><input class="form-control" 
                                            placeholder="Bank Name" readonly
                                            value='{{ isset($user->bank)? $user->bank : ""}}' type="text">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Account Number</label><input class="form-control"
                                        readonly placeholder="Account Number" type="text"
                                            value='{{ isset($user->account_number)? $user->account_number : ""}}'>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Account Name</label><input class="form-control"
                                        readonly placeholder="Account Name" type="text"
                                            value='{{ isset($user->account_name)? $user->account_name : ""}}'>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Bitcoin Wallet Address</label><input class="form-control"
                                            name="bitcoin_wallet" type="text" readonly
                                            value='{{ isset($user->bitcoin_wallet)? $user->bitcoin_wallet : ""}}'>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Ethereum Wallet Address</label><input class="form-control"
                                            name="ethereum_wallet" type="text" readonly
                                            value='{{ isset($user->ethereum_wallet)? $user->ethereum_wallet : ""}}'>
                                    </div>
                                </div>

                            </div>

                        </fieldset>
                        <fieldset class="form-group">
                            <legend><span>Contact Details</span></legend>
                            <div class="form-group">
                                <label> Contact Address</label><textarea class="form-control" rows="2"
                                readonly > {{ isset($user->street)? $user->street : ""}}</textarea>
                            </div>
                            <div class="form-group">
                                <label> State</label><textarea class="form-control" rows="1"
                                readonly >{{ isset($user->state)? $user->state : ""}}</textarea>
                            </div>
                            <div class="form-group">
                                <label> Country</label><textarea class="form-control" rows="1"
                                readonly >{{ isset($user->country)? $user->country : ""}}</textarea>
                            </div>

                        </fieldset>

                        
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
        
        <h6 class="element-header">
            Other Details
        </h6>
        <div class="timed-activities compact">
            <div class="timed-activity">
                <div class="ta-date">
                    <span>Additional information</span>
                </div>

                <div class="ta-record-w">
                    <form action="/user_profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="action" value="other_details">
                        <div class="row">
                           
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Social Handles (optional)</label>
                                    <input class="form-control" readonly placeholder="Facebook URL" type="text" value='{{ isset($user->social)? $user->social : ""}}'>
                                </div>
                            </div>
                            
                        </div>

                    </form>

                </div>
            </div>

        </div>
        
    </div>

   
</div>
<!--------------------
            END - Sidebar
            -------------------->
@endsection

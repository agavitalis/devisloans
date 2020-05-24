@extends('layouts.admin')

@section('sidebar_left')
@include('partials/admin/sidebar_left')
@endsection

@section('navbar_top')
@include('partials/admin/navbar_top')
@endsection

@section('content')
<div class="content-box">
    <div class="os-tabs-w">
        <div class="os-tabs-controls os-tabs-complex">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#tab_overview"><span
                            class="tab-label">Admin Dashboard</span><span class="badge badge-success"><i
                                class="os-icon os-icon-home"></i></span></a>
                </li>

            </ul>
        </div>
    </div>
   
    <div class="row pt-2">
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    Registered Users
                </div>
                <div class="value">
                  {{$users_count}}
                </div>
                <div class="trending trending-up">
                   <i class="os-icon os-icon-users"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    Avaliable Series
                </div>
                <div class="value text-danger">
                   {{$series_count}}
                </div>
                <div class="trending trending-down">
                    <i class="os-icon os-icon-bar-chart-stats-up"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                   Pro Investors
                </div>
                <div class="value">
                {{$pro_investors_count}}
                </div>
                <div class="trending trending-up">
                   <i class="os-icon os-icon-coins-4"></i>
                </div>
            </a>
        </div>
        <div class="col-6 col-sm-3 col-xxl-2">
            <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                <div class="label">
                    Investors
                </div>
                <div class="value">
                {{$investors_count}}
                </div>
                <div class="trending trending-up">
                    <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
            </a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-sm-8 offset-sm-2">
            <div class="cta-w purple text-center">
                <div class="cta-content extra-padded">
                    <div class="highlight-header">
                        Hello {{Auth::user()->first_name}}
                    </div>
                    <h5 class="cta-header">
                        Welcome to Devisloans Admin End, How is are you doing?
                    </h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection




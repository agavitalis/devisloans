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
            Manage and Confirm Bonus Requests
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
                                    <th>Bank</th>
                                    <th>Account No</th>
                                    <th>Bitcoin Wallet</th>
                                    <th>Ethereum Wallet</th>
                                    <th>Amount</th>
                                    <th>Payment Mode</th>
                                    <th>Date Requested</th>
                                    <th>Paid</th>
                                    <th>Mark as Paid</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Bank</th>
                                    <th>Account No</th>
                                    <th>Bitcoin Wallet</th>
                                    <th>Ethereum Wallet</th>
                                    <th>Amount</th>
                                    <th>Payment Mode</th>
                                    <th>Date Requested</th>
                                    <th>Paid</th>
                                    <th>Mark as Paid</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($investors as $investor)
                                <tr>
                                    <td>{{$investor->account_name}}</td>
                                    <td>{{$investor->bank}}</td>
                                    <td>{{$investor->account_number}}</td>
                                    <td>{{$investor->bitcoin_wallet}}</td>
                                    <td>{{$investor->ethereum_wallet}}</td>
                                    <td>{{$investor->bonus}}</td>
                                    <td>{{$investor->mode_of_payment}}</td>
                                    <td>{{\Carbon\Carbon::parse($investor->updated_at)->diffForHumans()}}</td>
                                    <td>{{$investor->request_status}}</td>
                                    <td>
                                        <form action="/manage_referral_bonus" method="post">
                                            @csrf
                                            <input type="hidden" name="action" value="mark_paid">
                                            <input type="hidden" name="id" value="{{$investor->id}}">
                                            <button class="btn btn-success" >Mark as Paid</button>
                                        </form>
                                   </td>
                                    <td>
                                        <form action="/manage_referral_bonus" method="post">
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

   
</div>
@endsection

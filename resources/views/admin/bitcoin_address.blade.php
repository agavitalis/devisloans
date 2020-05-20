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
            Register and Manage Bitcoin Address
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-5 ">
                <div class="element-box">
                    <form method="POST" action="/manage_bitcoin_address">
                        @csrf
                        <input type="hidden" name="action" value="create">
                        <h5 class="form-header">
                            Register Wallet Address
                        </h5>
                        <div class="form-desc">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, dicta debitis.
                            Facilis repellat ad inventore sint quaerat,
                        </div>
                        <div class="form-group">
                            <label for=""> Wallet Address</label>
                            <input class="form-control" placeholder="Wallet Address"
                                type="text" name="wallet_address" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Address Type</label>
                            <select class="form-control"  name="wallet_type" required>
                                <option value="Bitcoin">Bitcoin</option>
                                <option value="Ethereum">Ethereum</option>
                            </select>
                        </div>
                       
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Wallet Address
                    </h5>
                    <div class="form-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. A laboriosam quisquam neque deserunt
                        soluta, illum tenetur recusandae, ab nam fugit assumenda, eum reprehenderit perspiciatis
                        provident.

                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont ">
                            <thead>
                                <tr>
                                    <th>Wallet Address</th>
                                    <th>Wallet Type</th>
                                    <th>Active</th>
                                    <th>Activate</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                           
                                <tr>
                                    <th>Bitcoin Address</th>
                                    <th>Wallet Type</th>
                                    <th>Active</th>
                                    <th>Activate</th> 
                                    <th>Delete</th>   
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($address as $address)
                                <tr>
                                    <td>{{$address->wallet_address}}</td>
                                    <td>{{$address->wallet_type}}</td>
                                    <td>{{$address->active}}</td>
                                    <td>
                                        <form action="manage_bitcoin_address" method="post">
                                            @csrf
                                            <input type="hidden" value="activate" name="action">
                                            <input type="hidden" name="id" value="{{$address->id}}">
                                            <button type="submit" class="btn btn-sm btn-warning">Activate</button>
                                        </form>
                                    </td>
                                    <td> 
                                        <form action="manage_bitcoin_address" method="post">
                                             @csrf
                                            <input type="hidden" value="delete" name="action">
                                            <input type="hidden" name="id" value="{{$address->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
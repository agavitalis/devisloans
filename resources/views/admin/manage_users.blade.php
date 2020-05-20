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
            Manage Registered Users
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Users
                    </h5>
                    <div class="form-desc">
                       Manage Registered Users of this platform

                    </div>

        

                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont table-responsive">
                            <thead>    
                                <tr>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>email</th>
                                    <th>referral</th>
                                    <th>Joined On</th>    
                                    <th>View Profile</th>
                                    <th>Delete User</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>email</th>
                                    <th>referral</th> 
                                    <th>Joined On</th>  
                                    <th>View Profile</th>
                                    <th>Delete User</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->first_name}} </td>
                                    <td>{{$user->last_name}} </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->referral}}</td>
                                    <td>{{$user->created_at}}</td>
                                   
                                    <td><a href="/manage_users/{{$user->id}}"><button class="btn btn-info">View Complete Profile</button></td> 
                                    <td>
                                        <form action="/delete_user" method="post">
                                            @csrf
                                            <input type="hidden" name="action" value="delete_user">
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <button class="btn btn-danger" >Delete User</button>
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

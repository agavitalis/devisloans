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
            Manage Request 
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-12">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage 
                    </h5>
                    <div class="form-desc">
                       Manage Request made by users of this platform
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1" width="100%" class="table table-striped table-lightfont table-responsive">
                            <thead>   
                                <tr>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>country</th>
                                    <th>business name</th>   
                                    <th>profession</th>  
                                    <th>request type</th>
                                    <th>message</th>
                                    <th>Date</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>country</th>
                                    <th>business name</th>   
                                    <th>profession</th>  
                                    <th>request type</th>
                                    <th>message</th>
                                    <th>Date</th>
                                    <th>delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($requestings as $requesting)
                                <tr>
                                    <td>{{$requesting->first_name}} </td>
                                    <td>{{$requesting->last_name}} </td>
                                    <td>{{$requesting->phone}}</td>
                                    <td>{{$requesting->email}}</td>
                                    <td>{{$requesting->country}}</td>
                                    <td>{{$requesting->business_name}}</td>
                                    <td>{{$requesting->profession}}</td>
                                    <td>{{$requesting->request_type}}</td>
                                    <td>{{$requesting->body}}</td>
                                    <td>{{$requesting->created_at}}</td>
                                   
                                    <td><a href="/manage_requests/{{$requesting->id}}"><button class="btn btn-danger">Delete</button></td>                          
                                </tr>
                            @endforeach 
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <?php echo $requestings->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</div>
@endsection

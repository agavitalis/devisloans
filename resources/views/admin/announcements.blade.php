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
            Make an Announcement
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-5 ">
                <div class="element-box">
                    <form method="POST" action="/announcements">
                        @csrf
                        <input type="hidden" name="action" value="create">
                        <h5 class="form-header">
                            Create an announcement
                        </h5>
                        <div class="form-desc">
                           Announcements created will be visible to all the users of this system
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for=""> Title</label>
                                    <input class="form-control" placeholder="Title"
                                        type="text" name="title" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <input class="form-control" placeholder="Content"
                                        type="text" name="content" required>
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Create</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="element-box">
                    <h5 class="form-header">
                        Manage Announcements
                    </h5>
                    <div class="form-desc">
                      Delete old and expired announcements here
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1"  width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($announcements as $announcement)
                                <tr>
                                    <td>{{$announcement->heading}}</td>
                                    <td>{{$announcement->content}}</td>
                                    <td><a href="/delete_announcement/{{$announcement->id}}"> <button class="btn btn-danger">Delete</button> </a></td>
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

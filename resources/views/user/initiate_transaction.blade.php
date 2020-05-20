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
            Give a Loan
        </h6>
        @include('partials/user/alert')
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="element-box">
                    <form method="POST" action="/initiate_transaction">
                        @csrf
                        <h5 class="form-header">
                            Select Plan(Series) to Continue
                        </h5>
                        <div class="form-desc">
                           You can't give more than one loan at a time. But you can always upgrade later. Choose carefully
                        </div>
                        <div class="form-group">
                            <label for=""> Select a Plan</label>
                            <select class="form-control" name="series_id" required>
                                <option value="" selected disabled>
                                   Select Plan
                                </option>
                                @foreach($series as $series)
                                    <option value="{{$series->id}}">
                                        {{$series->series_name}} : Amount (${{$series->amount}})
                                    </option>
                                @endforeach
                               
                            </select>
                        </div>
                    
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Initiate Process</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>

</div>
@endsection

@section('sidebar_right')
@include('partials/user/sidebar_right')
@endsection

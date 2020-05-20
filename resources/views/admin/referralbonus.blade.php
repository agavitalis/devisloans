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
            Setup referral bonuses
        </h6>
        @include('partials/admin/alert')
        <div class="row">
            <div class="col-md-5 ">
                <div class="element-box">
                    <form method="POST" action="/referral_bonus">
                        @csrf
                        <input type="hidden" name="action" value="create">
                        <h5 class="form-header">
                            Set up a new referral bonus
                        </h5>
                        <div class="form-desc">
                           New percentage will overwrite the previous settings
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Referral Bonus</label>
                                    <input class="form-control" placeholder="Bonus(Eg 7 for 7%)"
                                        type="text" name="bonus" required>
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Set as Current </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="element-box">
                    <h5 class="form-header">
                        Referral Bonus
                    </h5>
                    <div class="form-desc">
                     This system currently rnuns on this referral bonus
                    </div>
                    <div class="table-responsive">
                        <table id="dataTable1"  width="100%" class="table table-striped table-lightfont">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Referral Bonus</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Referral Bonus</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                
                            @foreach($bonus as $bonus)
                                <tr>
                                    <td>{{$bonus->id}}</td>
                                    <td>{{$bonus->bonus}}</td>
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

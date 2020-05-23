<div class="content-panel compact color-scheme-dark">
    <div class="content-panel-close">
        <i class="os-icon os-icon-close"></i>
    </div>
    <div class="element-wrapper">
        <div class="element-actions actions-only">
            <a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
        </div>
        <h6 class="element-header">
            Devis Math Set
        </h6>
        <div class="element-box-tp">
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Select Plan</label>
                            <select class="form-control" id="main_fee">
                                @foreach($series as $series)
                                <option value="{{$series->maintenance_fee}}">
                                    {{$series->series_name}}
                                </option>
                                @endforeach
                              
                            </select>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Amount </label>
                            <div class="input-group">
                                <input class="form-control" id="amount" placeholder="Amount..." type="text" value="100">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        USD
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                    <label class="hidden" id="result">
                        <h4 id="amount_total">$455.00</h4>
                        <p id="mainten_total">4.5% maintenance charge included</p>
                    </label>
                    </div>
                    
                </div>
                <button class="btn btn-primary btn-block btn-lg calculate" type="button"><i
                        class="os-icon os-icon-refresh-ccw"></i><span>Calculate</span></button>
            </form>
        </div>
    </div>
  
</div>

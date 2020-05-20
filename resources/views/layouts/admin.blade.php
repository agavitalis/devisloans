<!DOCTYPE html>
<html>
  <head>
    <title>Elife|Admin</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Elife Series" name="author">
    <meta content="Elife Series Admin" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/dropzone/dist/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/bower_components/slick-carousel/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/main.css?version=4.4.0')}}" rel="stylesheet">
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
          <div class="element-search">
            <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
              <div class="close-search-suggestions">
                <i class="os-icon os-icon-x"></i>
              </div>
            
          </div>
         
        </div>
      </div>
      <div class="layout-w">
        <!--------------------
        START - Left Side Menu
        -------------------->
        @yield("sidebar_left")
        <!--------------------
        END - Left Side Menu
        -------------------->
        
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          @yield("navbar_top")
          <!--------------------
          END - Top Bar
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <!--------------------
            START - Content Center
            -------------------->
            @yield("content")
            <!--------------------
            End - Content Center
            -------------------->
            <!--------------------
            START - Sidebar Right
            -------------------->
            @yield("sidebar_right")
            <!--------------------
            END - Sidebar Right
            -------------------->
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="{{asset('dashboard/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/moment/moment.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap-validator/dist/validator.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/dropzone/dist/dropzone.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/editable-table/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/tether/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/util.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/alert.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/button.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/carousel.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/collapse.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/dropdown.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/modal.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/tab.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/tooltip.js')}}"></script>
    <script src="{{asset('dashboard/bower_components/bootstrap/js/dist/popover.js')}}"></script>
    <script src="{{asset('dashboard/js/demo_customizer.js?version=4.4.0')}}"></script>
    <script src="{{asset('dashboard/js/main.js?version=4.4.0')}}"></script>
   
    <script src="{{asset('dashboard/myscripts/sidebar_right.js')}}"></script>
     @yield("scripts")

   
  </body>
</html>

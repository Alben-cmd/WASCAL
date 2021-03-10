

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WASCAL</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/jqvmap/dist/jqvmap.min.css') }}">
    

    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function (){
            $("#title").change(function() {
                // foo is the id of the other select box 
                if ($(this).val() != "Master") {
                    $("#grade").show();
                }else{
                    $("#grade").hide();
                } 
            });
        });
    </script>

</head>

<body>
    <br>
    <br>


    <!-- Left Panel -->

    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title" style="margin: 0 auto;">
                 <img src="{{ asset('logo/wascal.png') }} " align="center">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title" align="center">
                 <img src="{{ asset('logo/futminna.png') }} " align="center">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title" align="right">
                 <img src="{{ asset('logo/federal.png') }} " align="center">
            </div>
        </div>
    </div>

</div>

       
<!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->


       @yield('content')
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

  
<script>
(function () {
    var year_start = 1950;
    var year_end = (new Date).getFullYear(); //current year
    var selected_year = 1980; // 0 first option

    var option = '<option>year</option>';  //first option

    for (var i = 0; i <= (year_end - year_start); i++) {
        var year = (year_start+i);
        var selected = (year == selected_year) ? ' selected' : '';
        option += '<option value="' + year + '"'+selected+'>' + year + '</option>';
    }
    document.getElementById('year').innerHTML = option;
})();
</script>

    <script src="{{ asset('js/jquery.printpage.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/main.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/widgets.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
</body>

</html>


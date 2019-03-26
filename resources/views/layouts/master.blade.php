<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>social media login</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <!-- Font Awesome JS -->
</head>

<body>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : 255022315384009,
            cookie     : true,
            xfbml      : true,
            version    : 3.2
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


@include('layouts.nav')
<div class="wrapper">
    <!-- Sidebar  -->
    <!-- Page Content  -->
<div id="content">
    <div id="container">
        <div class="row">
            <div class="col-sm-3">
                @include('layouts.navbar')
            </div>
            <div class="col-sm-8">
                @yield('content')
            </div>
        </div>
    </div>


</div>
    <!-- Page Content  -->
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="{{url('js/jquery.min.js')}}"></script>
<!-- Popper.JS -->
<script src="{{url('js/poper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/font-awesome.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>
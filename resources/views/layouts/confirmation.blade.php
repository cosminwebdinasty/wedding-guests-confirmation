<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John and Jane Doe - Wedding Invitation</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">

    {{-- Fonts --}}
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">

  {{--   Scripts --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">





        <div id="when">
			<!--  WHEN -->
            <div  class="greywrap hidden-xs" style="background-image:url('images/xy.jpg'); min-height: 100vh;  padding-top:0px !important;  background-size:cover;  background-position: 50% 70%;">

                @if(session()->has('notify'))
                <div style="padding:25px; font-weight:900;" class="alert alert-danger">
                     {{session('notify')}}
                </div>
             @endif

                <div class="container" id="about" name="about">
                    <div class="row">

                        <div class="col-md-1"></div>


                        <div class="col-md-10 col-sm-6 col-xs-6 fade-up" style="background-image:url('images/gg.jpg'); background-size:cover; background-position-y: 100%; min-height: 100vh;  box-shadow: 3px 3px 24px;">

                             <div style="padding-top:80px;"></div>

                            <h1 class="animated bounceIn names" style="font-size:65px;">Thank You!</h1>

                        <div style="padding-bottom:40px;"></div>

                        <img class="img-responsive" src="{{asset('images/stuff.jpg')}}">

                        <h3 class="animated bounceIn names" style="color:black;">John and Jane</h3>
                        <div style="padding-bottom:80px;"></div>
                        </div>

                        <div class="col-md-1"></div>

                    </div>
                </div>
            </div>


         {{--   WHEN MOBILE --}}
         <div id="when" class="greywrap visible-xs" style="background-image:url('images/mdm.jpg');   background-size:cover;  background-position:0%; margin-top:-130px;">
            <div class="container" id="about" name="about">
                <div class="row-white">
                    <div class="col-md-12 col-sm-6 col-xs-12 callout">


                        <div style="padding-top: 80px;"></div>

                        <h1 class="animated bounceIn names" style="font-size:45px;">Thank You!</h1>

                        <div style="padding-bottom:40px;"></div>

                        <img style="box-shadow: 10px 10px 10px;" width="230px" src="{{asset('images/a73.jpg')}}">

                        <h3 class="animated bounceIn names" style="color:black; font-size:30px;">John & Jane</h3>

                        </div>
                    <p style="color:rgb(0, 0, 0);"> </p>
                    </div>
                </div>
            </div>
        </div>

        </div>

        @if(session()->has('notify'))
                <div style="padding:35px; font-weight:900;" class="alert alert-danger text-center">
                     {{session('notify')}}
                </div>
             @endif







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>


  </body>
</html>

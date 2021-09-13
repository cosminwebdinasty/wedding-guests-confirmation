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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <link href="{{asset('css/flickity.css')}}" rel="stylesheet" type="text/css">

    {{-- Gallery --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/fresco.css')}}">

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

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main" class="gallery">

  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i style="color:white;" class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="/">
                <h1 class="logo" style="font-family: 'Dosis', sans-serif; font-size:25px !important; font-weight:900 !important; margin-top:22px; margin-left:25px !important; ">JOHN AND JANE</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">

                    <li><a href="/"><i class="fas fa-home"></i> Back to Home</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>


    <div class="gtl" style="margin-top:180px;"></div>


<div class="container-fluid">
    <div class="col-md-4"></div>

    <div class="col-md-4">
    <h1 class="fade-down" style="text-align: center;" >Gallery</h1>
    <hr>
</div>
    <div class="col-md-4"></div>



{{-- ROW 1 --}}

<div class="row white" >
    <div class="col-md-2"></div>

     <div class="col-md-12" >
         <div class="text-center">
            <div class="demonstrations">
                <a
                  href="{{asset('images/Cemetery-1 HERO.jpg')}}"
                  class="fresco">
                  <img style="width:200px; margin:20px;" src="{{asset('images/Cemetery-1 HERO.jpg')}}" alt="" />
                </a>

                <a
                href="{{asset('images/aa.jpg')}}"
                class="fresco">
                <img style="width:200px; margin:20px;" src="{{asset('images/aa.jpg')}}" alt="" />
              </a>

                <a
                href="{{asset('images/ww.jpg')}}"
                class="fresco">
                <img style="width:200px; margin:20px;" src="{{asset('images/ww.jpg')}}" alt="" />
              </a>

              <a
              href="{{asset('images/stuff.jpg')}}"
              class="fresco">
              <img style="width:200px; margin:20px;" src="{{asset('images/stuff.jpg')}}" alt="" />
            </a>

          <a
          href="{{asset('images/wood.png')}}"
          class="fresco">
          <img style="width:200px; margin:20px;" src="{{asset('images/wood.png')}}" alt="" />
        </a>
        </div>
         </div> </div>
     <div class="col-md-2" >
         <div class="text-center">
         </div>
     </div>
 </div><!-- row -->




{{-- ROW 2 --}}

     <div class="row white" >
        <div class="col-md-2"></div>

         <div class="col-md-12" >
             <div class="text-center">
                <div class="demonstrations">
                    <a
                    href="{{asset('images/Cemetery-1 HERO.jpg')}}"
                    class="fresco">
                    <img style="width:200px; margin:20px;" src="{{asset('images/Cemetery-1 HERO.jpg')}}" alt="" />
                  </a>

                  <a
                  href="{{asset('images/aa.jpg')}}"
                  class="fresco">
                  <img style="width:200px; margin:20px;" src="{{asset('images/aa.jpg')}}" alt="" />
                </a>

                  <a
                  href="{{asset('images/ww.jpg')}}"
                  class="fresco">
                  <img style="width:200px; margin:20px;" src="{{asset('images/ww.jpg')}}" alt="" />
                </a>

                <a
                href="{{asset('images/stuff.jpg')}}"
                class="fresco">
                <img style="width:200px; margin:20px;" src="{{asset('images/stuff.jpg')}}" alt="" />
              </a>

            <a
            href="{{asset('images/wood.png')}}"
            class="fresco">
            <img style="width:200px; margin:20px;" src="{{asset('images/wood.png')}}" alt="" />
          </a>
            </div>
             </div> </div>
         <div class="col-md-2" >
             <div class="text-center">
             </div>
         </div>
     </div><!-- row -->




     {{-- ROW 3 --}}

     <div class="row white" >
        <div class="col-md-2"></div>

         <div class="col-md-12" >
             <div class="text-center">
                <div class="demonstrations">
                    <a
                    href="{{asset('images/Cemetery-1 HERO.jpg')}}"
                    class="fresco">
                    <img style="width:200px; margin:20px;" src="{{asset('images/Cemetery-1 HERO.jpg')}}" alt="" />
                  </a>

                  <a
                  href="{{asset('images/aa.jpg')}}"
                  class="fresco">
                  <img style="width:200px; margin:20px;" src="{{asset('images/aa.jpg')}}" alt="" />
                </a>

                  <a
                  href="{{asset('images/ww.jpg')}}"
                  class="fresco">
                  <img style="width:200px; margin:20px;" src="{{asset('images/ww.jpg')}}" alt="" />
                </a>

                <a
                href="{{asset('images/stuff.jpg')}}"
                class="fresco">
                <img style="width:200px; margin:20px;" src="{{asset('images/stuff.jpg')}}" alt="" />
              </a>

            <a
            href="{{asset('images/wood.png')}}"
            class="fresco">
            <img style="width:200px; margin:20px;" src="{{asset('images/wood.png')}}" alt="" />
          </a>
            </div>
             </div> </div>
         <div class="col-md-2" >
             <div class="text-center">
             </div>
         </div>
     </div><!-- row -->



</div>

<div style="padding-bottom: 80px;"></div>

</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/init2.js')}}"></script>



<script src="{{asset('js/fresco.min.js')}}"></script>

<script src="{{asset('js/flickity.pkgd.min.js')}}"></script>


  </body>
</html>

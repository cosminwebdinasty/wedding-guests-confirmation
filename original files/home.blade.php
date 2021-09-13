<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Claudia si Ciprian - Invitatie nunta</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}?v=1.3" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">


    <link href="{{asset('css/flickity.css')}}" rel="stylesheet" type="text/css">

    {{-- Gallery --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/fresco.css')}}">

    {{-- Fonts --}}
    <link rel="stylesheet" href="css/elusive-webfont.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  {{--   Scripts --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">

  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="/">
                <h1 class="logo" style="font-family: 'Dosis', sans-serif; font-size:25px !important; font-weight:900 !important; margin-top:22px; margin-left:25px !important; ">CLAUDIA ȘI CIPRIAN</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">

		            <li><a href="#what">Ce?</a></li>
					<li> <a href="#when">Când?</a></li>
					<li> <a href="#where">Unde?</a></li>
					<li> <a href="#confirmation">Confirmare</a></li>
                    <li><a href="{{route('gallery')}}">Galerie</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>
    <div id="what"></div>
		<!-- ==== HEADERWRAP ==== -->
	 {{--    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
                <div class="row-white" id="what">
                </div>
	  		</header>
              @if(session()->has('confirmation'))
                 <div class="alert alert-info">
                      {{session('confirmation')}}
                 </div>
              @endif
	    </div><!-- /headerwrap --> --}}

      <div id="headerwrap" id="home" name="home">
      <div data-ytbg-play-button="false" data-ytbg-mobile="true" data-ytbg-autoplay="true" data-ytbg-mooted="true" data-ytbg-mute-button="true"  data-youtube="https://www.youtube.com/watch?v=wEAgEKih3I8"></div>


      <div class="col-md-2 hidden-xs" id="titlewrapper" style="width:370px; position: absolute; bottom: 100px; left: 60px; background-color:#e4b7b799; box-shadow: 3px 3px 24px #000000e3;">

        <div style="padding-top:40px "></div><center>
          <h1 class="animated bounceIn" id="fstt" style="color:white; margin-bottom:5px;"><strong>Ne căsătorim!</strong></h1><br>
          <hr style="margin-top:0px; width:100% !important;">
          <p class="animated slideInLeft" id="sndt" style="color:white; margin-top:30px;"><strong>Claudia & Ciprian</strong></p>
        <p class="animated slideInRight" id="trdt" style="color:white; margin-top:25px; margin-bottom:0px !important;">Vor fi alături de noi nașii noștri</p>
        <img class="img-thumbnail" style="width: 85%;"  src="{{asset('images/poza-nasi.jpeg')}}">
        <p class="animated slideInLeft" id="sndt" style="color:white; margin-top:30px; font-size:18px; margin-top:0px !important;"><strong>Ica și Dan RISTU</strong></p>
          </center>
      </div>


       {{--  <div class="col-md-1 hidden-xs"></div>
        <div class="col-md-12 visible-xs" style="position: absolute; bottom: 0px; width:100%;   background-color:rgba(0, 0, 0, 0.322)">

          <h1 class="animated bounceIn" style="font-family: 'Montserrat', sans-serif; font-size:35px !important; padding-top:20px; color:white;"><strong>Ne căsătorim!</strong></h1>
        <br>  <hr style="margin-top:-20px; width:50% !important;">
          <p class="animated slideInLeft" style="font-family: 'Montserrat', sans-serif; font-size:35px; margin-bottom:0px !important; color:white;"><strong>Claudia & Ciprian</strong></p>



          <div class="row visible-xs">

            <div class="col-xs-5 visible-xs" style="margin-top:10px;">
          <img class="img-thumbnail" style="width:100%;"  src="{{asset('images/poza-nasi.jpeg')}}">
            </div>

            <div class="col-xs-7 visible-xs">
                <p class="animated slideInRight" id="trdt" style="color:white; margin-top:25px; font-size:11px !important; margin-bottom:0px !important;">Vor fi alături de noi nașii noștri</p>
                <p class="animated slideInLeft" id="sndt" style="color:white; font-size:16px;"><strong>Ica și Dan RISTU</strong></p>
                  </div>


          </div> --}}

      </div>
      <div class="col-md-1 hidden-xs"></div>
        </div>



        <div class="container-fluid visible-xs" style="margin-top:-20px;">
         <div class="row">

                <div class="col-md-12 visible-xs" style=" width:100%;   background-color:#efebea">

                  <h1 class="animated bounceIn" style="font-family: 'Montserrat', sans-serif; font-size:35px !important; text-align:center; padding-top:50px; color:#bd6c72"><strong>Ne căsătorim!</strong></h1>
                <br>  <center><hr style="margin-top:-20px; width:50% !important;"></center>
                  <p class="animated slideInLeft" style="font-family: 'Montserrat', sans-serif; font-size:35px; text-align:center;  margin-bottom:0px text-align:center; !important; color:#bd6c72"><strong>Claudia & Ciprian</strong></p>

                        <p class="animated slideInRight" id="trdt" style="color:rgb(0, 0, 0); text-align:center; margin-top:25px; font-size:21px !important; margin-bottom:0px !important;">Vor fi alături de noi nașii noștri</p>

                        <img class="img-thumbnail" style="width:100%;"  src="{{asset('images/poza-nasi.jpeg')}}">
                        <p class="animated slideInLeft" id="sndt" style="color:rgb(0, 0, 0); font-size:22px; text-align:center;"><strong>Ica și Dan RISTU</strong></p>
                  </div>
            </div>
        </div>






        <div id="when">
			<!--  WHEN -->
            <div  class="greywrap hidden-xs" style="background-image:url('images/xy.jpg'); height:628px;  padding-top:0px !important;
             background-size:cover;  background-position: 50% 70%; border:none;">
                <div class="container" id="about" name="about">
                    <div class="row">

                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-sm-6 col-xs-6 fade-up" style="background-image:url('images/gg.jpg'); background-size:cover; background-position-y: 100%;
                         box-shadow: 3px 3px 24px; margin-bottom:-40px;">
                            <div style="padding-top:80px;"></div>
                            <h1 class="animated bounceIn names">Claudia Țîrdea</h1>
                            <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:16px; padding-top:15px;">ȘI</p>
                            <h1 class="animated bounceIn names">Ciprian Țîrdea</h1>
                            <p class="animated bounceIn date">25 SEPTEMBRIE 2021</p>
                            <div style="padding-top: 105px;"></div>
                            <p class="animated slideInLeft place">BUCUREȘTI, ROMÂNIA</p>
                        <p id="demo"></p>
                        <p style="color:rgb(0, 0, 0);"> </p>
                        <div style="padding-bottom:80px;"></div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

         {{--   WHEN MOBILE --}}
         <div id="when" class="greywrap visible-xs" style="background-image:url('images/mdm.jpg'); height:580px;   background-size:cover;  background-position:0%; margin-top:-130px;">
            <div class="container" id="about" name="about">
                <div class="row-white">
                    <div class="col-md-12 col-sm-6 col-xs-12 callout">
                        <div style="padding-top: 80px;"></div>
                        <h1 class="animated bounceIn" style="color:#bd6c72; font-family: 'Montserrat', sans-serif; font-size:36px;">Claudia Țîrdea
                            <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:14px; padding-top:15px;">ȘI</p>
                            Ciprian Țîrdea</h1>
                        <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:26px; padding-top:35px;">25 SEPTEMBRIE 2021</p>
                        <p style="text-align:center; color:rgb(0, 0, 0);  font-size:30px !important; margin-top:10px; font-family: 'Montserrat', sans-serif; background: #da9497;
                        padding-bottom: 20px; padding-top: 20px; color:white;     box-shadow: 3px 3px 24px #00000069;" id="demo2"></p>
                        <div style="padding-top: 5px;"></div>
                        <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:16px; letter-spacing:2px;">BUCUREȘTI, ROMÂNIA</p>
                    <p style="color:rgb(0, 0, 0);"> </p>
                    </div>
                </div>
            </div>
        </div>
     </div>

 <div id="where" style="background-color:#bd6c72; padding:0px !important; margin:0px !important;">
		<!-- ==== WHERE SECTION DIVIDER2 -->
		<section class="section-divider textdivider divider2 hidden-xs" >
			<div class="container">
                <h1 class="animated slideInRight" style="font-family: 'Montserrat', sans-serif;">
                    DETALIILE EVENIMENTULUI</h1>
                <hr class="fade-down title-mb">
                <p class="animated fade-up" style="'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">Când și unde</p>
                <div class="text-center fade-up">
                    <p style="font-family:'Montserrat', sans-serif; font-size:18px !important;">
                     Cununia religioasă va avea loc la Biserica Sf. Antonie cel Mare-Măicaneasa iar pe urmă vom sărbatori evenimentul la Biavati Events, București. Detalii mai jos.</p>
                 </div>
                  <div style="padding-bottom:50px;"></div>

				<div class="col-md-6 fade-up" style="background-color:#bd6c72;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%; margin-bottom:50px;" src="{{asset('images/1s.jpg')}}">
					<p class="animated slideInRight" style="font-family:'Montserrat', sans-serif; font-size:28px !important; margin-bottom:10px; ">Cununia religioasă</p>
					<p style="font-family:'Montserrat', sans-serif !important; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Ora 16:00<br>
                        Biserica Sf. Antonie cel Mare-Măicaneasa,<br>
                        Strada Gheorghe Ionescu Sisești 13-15, Sector 1<br>
                        București, România</p>
                        <a href="https://www.google.ro/maps/place/Biserica+Sf.Antonie+Maicaneasa/@44.5018031,26.056642,17z/data=!4m12!1m6!3m5!1s0x40b2030647c0df19:0x65f9f08cdcabe40e!2sBiserica+Sf.Antonie+Maicaneasa!8m2!3d44.501883!4d26.0588331!3m4!1s0x40b2030647c0df19:0x65f9f08cdcabe40e!8m2!3d44.501883!4d26.0588331" style="padding:8px !important;" class="btn homebtn smoothScroll" target="_blank">Vezi harta <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>

				<div class="col-md-6 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/h.jpeg')}}">
					<p class="animated slideInRight" style="font-family:'Montserrat', sans-serif; font-size:28px !important; margin-bottom:10px; ">Petrecerea</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Ora 18:00<br>
                        Biavati Events,<br>
                        Strada Serghei Vasilievici  <br>Rahmaninov nr. 2B
                        </p>
                        <a href="https://www.google.ro/maps/place/Biavati+Events/@44.4618388,26.1021187,17z/data=!3m1!4b1!4m5!3m4!1s0x40b1f8a684247975:0x6ce16c2e997ceafe!8m2!3d44.461396!4d26.1042127" target="_blank" style="padding:8px !important;" class="btn homebtn smoothScroll">Vezi harta <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
			</div><!-- container --><div style="padding-bottom: 105px;"></div>
		</section><!-- section -->

		<!-- ==== WHERE SECTION DIVIDER2  MOBILE-->
		<section class="section-divider textdivider divider3 visible-xs" id="where">
			<div class="container">
                <h1 class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:30px; padding-top:20px !important;">
                    DETALIILE EVENIMENTULUI</h1>
                <hr class="fade-down title-mb">
                <p class="animated fade-up" style="font-family: 'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">Când și unde</p>
                <div class="text-center fade-up">
                <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        Cununia religioasă va avea loc la Biserica Sf. Antonie cel Mare-Măicaneasa iar pe urmă vom sărbatori evenimentul la Biavati Events, București. Detalii mai jos.</p>
                </div>
                <div style="padding-bottom:20px;"></div>


				<div class="col-md-4 fade-up" style="background-color:#bd6c72;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%; margin-bottom:50px;" src="{{asset('images/1s.jpg')}}">
					<p class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">Cununia religioasă</p>
					<p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Ora 16:00<br>
                        Biserica Sf. Antonie cel Mare-Măicaneasa,<br>
                        Strada Gheorghe Ionescu Sisești 13-15, Sector 1<br>
                        București, România</p>
                        <a href="https://www.google.ro/maps/place/Biserica+Sf.Antonie+Maicaneasa/@44.5018031,26.056642,17z/data=!4m12!1m6!3m5!1s0x40b2030647c0df19:0x65f9f08cdcabe40e!2sBiserica+Sf.Antonie+Maicaneasa!8m2!3d44.501883!4d26.0588331!3m4!1s0x40b2030647c0df19:0x65f9f08cdcabe40e!8m2!3d44.501883!4d26.0588331" style="padding:8px !important;" class="btn homebtn smoothScroll" target="_blank">Vezi harta <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
				<div class="col-md-4 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/h.jpeg')}}">>
					<p class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:40px !important; margin-bottom:10px; ">Petrecerea</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Ora 18:00<br>
                        Biavati Events,<br>
                        Strada Serghei Vasilievici  <br>Rahmaninov nr. 2B
                        </p>
                        <a href="https://www.google.ro/maps/place/Biavati+Events/@44.4618388,26.1021187,17z/data=!3m1!4b1!4m5!3m4!1s0x40b1f8a684247975:0x6ce16c2e997ceafe!8m2!3d44.461396!4d26.1042127" target="_blank" style="padding:8px !important;" class="btn homebtn smoothScroll">Vezi harta <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
			</div><!-- container --><div style="padding-bottom: 30px;"></div>
		</section><!-- section -->
 </div>





            {{-- CONFIRMATION --}}
		<div class="container-fluid" id="confirmation" name="contact" style="background-image:url('images/yy.jpg'); background-size:cover;">
            <div class="container">
			<div class="row row white" id="formrow">
			<br>
				<h1 class="centered fade-down" style="color:#915b5f; font-family: 'Montserrat', sans-serif;  font-size:30px;">CONFIRMARE</h1>
				<hr class="fade-down title-mb">
				<div class="col-md-2 fade-up">
				</div><!-- col -->
				<div class="col-md-8 fade-up ">
                    <form action="{{route('confirm')}}" method="POST">
                            @csrf
                            @method("POST")
                               <div class="row">
                                    <div style="display: block;" class="col-lg-12">
                                        <label for="nr" style="color:#915b5f;">Câte persoane</label>
                                        <select name="participants" class="ppl" id="nr" style="width:100% !important; padding:16px !important;" onchange="check()" required>
                                            <option value="0" selected disabled hidden>
                                                Alege număr persoane
                                            </option>
                                            <option value="1">
                                                O persoană
                                            </option>
                                            <option value="2">
                                                Două persoane
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row"  id="names" style="padding-top:30px;">
                                    <div style="display: block;" class="col-lg-6"  id="p1">
                                        <label for="fname" id="n1" style="color:#915b5f;">Numele tău</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Nume" name="name" required style="margin-bottom:30px;">
                                    </div>
                                    <div style="display: block;" class="col-lg-6" id="p2">
                                        <label for="lname" id="n2" style="color:#915b5f;">Nume partener
                                        </label>
                                        <input type="text" id="lname" class="form-control" placeholder="Partener" name="partner" style="margin-bottom:30px;">
                                    </div>
                                </div>

                                <center>
                                <div class="wrapper">
                                    <input type="radio" name="menu" id="option-1" value="normal" checked >
                                    <input type="radio" name="menu" id="option-2" value="vegetarian">
                                      <label for="option-1" class="option option-1">
                                        <div class="dot"></div>
                                         <span style="font-size:14px;">Meniu normal</span>
                                         </label>
                                      <label for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                         <span style="font-size:14px;">Meniu vegetarian</span>
                                      </label>
                                   </div></center>

                                <div class="row" style="padding-top:30px;">
                                    <div class="col-md-12">
                                        <label for="message" style="color:#915b5f;">Vrei să ne transmiți ceva?</label>
                                        <textarea name="message" class="form-control form-opacity" id="message" style="border-radius: 0px;"></textarea>
                                    </div>
                                </div>
                                {{-- SUBMIT --}}
                                <div class="col-md-12 text-center hidden-xs" style="padding-top:75px;">
                                    <button type="submit" name="status" class="btn btn-success" value="1" style="margin-right:10px;"> Da, confirm prezența</button>
                                    <button type="submit" name="status" class="btn btn-primary" value="0"> Nu pot să particip</button>
                                    <div style="padding-bottom: 80px;"></div>
                                </div>

                                {{-- SUBMIT MOBILE--}}
                                <div class="col-md-12 text-center visible-xs" style="padding-top:75px;">
                                    <button type="submit" name="status" class="btn btn-success" value="1" style="margin-right:10px; background-color:white;"> Da, confirm prezența</button>
                                    <div style="padding-bottom: 20px;"></div>
                                    <button type="submit" name="status" class="btn btn-primary" value="0"> Nu pot să particip</button>
                                    <div style="padding-bottom: 80px;"></div>
                                </div>
                            </form><!-- form -->
				</div><!-- col -->
				<div class="col-md-2 fade-up">
				</div><!-- col -->
			</div><!-- row -->
 </div>
		</div><!-- container -->

        	<!-- ==== SECTION DIVIDER6 ==== -->
		<section class="section-divider textdivider divider6" style="background: #bd6c72;">
			<div class="container-fluid" style="background-image:url('images/bx.jpg'); background-size:cover; background-color: #f8b9ab66;
            background-blend-mode: luminosity; background-attachment:fixed;  background-position-y: 30%;">
				<h1 class="fade-down">MULȚUMIM!</h1>
				<hr>
                <div style="padding-bottom: 40px;"></div>
				<div class="fade-up">
					<p style="font-family: 'Montserrat', sans-serif; font-size:40px;">Claudia</p>
                    <p>și</p>
					<p style="font-family: 'Montserrat', sans-serif; font-size:40px;">Ciprian</p>
				</div>
                <div style="padding-bottom: 40px;"></div>
			</div><!-- container -->
		</section><!-- section -->

    {{--     <div class="video-background">
            <div class="video-foreground">
              <iframe src="https://www.youtube.com/embed/LwAr_wsVU_o?rel=0&controls=0&showinfo=0&autoplay=1&start=14&loop=1&autopause=0&mute=1" frameborder="0"  allow="autoplay"  allowfullscreen autoplay></iframe>
              <div  class="col-md-1 hidden-xs"></div>


                <div class="col-md-2 hidden-xs" id="titlewrapper" style="width:370px; position: absolute; bottom: 100px; left: 60px; background-color:#e4b7b799; box-shadow: 3px 3px 24px #000000e3;">

                <div style="padding-top:40px "></div><center>
                  <h1 class="animated bounceIn" id="fstt" style="color:white; margin-bottom:5px;"><strong>Ne căsătorim!</strong></h1><br>
                  <hr style="margin-top:0px; width:100% !important;">
                  <p class="animated slideInLeft" id="sndt" style="color:white; margin-top:30px;"><strong>Claudia & Ciprian</strong></p>
                <p class="animated slideInRight" id="trdt" style="color:white; margin-top:25px; margin-bottom:0px !important;">Vor fi alături de noi nașii noștri</p>
                <img class="img-thumbnail" style="width: 85%;"  src="{{asset('images/poza-nasi.jpeg')}}">
                <p class="animated slideInLeft" id="sndt" style="color:white; margin-top:30px; font-size:18px; margin-top:0px !important;"><strong>Ristu Ica și Ristu Dan</strong></p>
                  </center>
              </div>


                <div class="col-md-1 hidden-xs"></div>
                <div class="col-md-12 visible-xs" style="position: absolute; bottom: 0px; width:100%;   background-color:rgba(0, 0, 0, 0.322)">

                  <h1 class="animated bounceIn" style="font-family: 'Ballet', cursive; font-size:35px !important; padding-top:20px; color:white;"><strong>Ne căsătorim!</strong></h1>
                <br>  <hr style="margin-top:-20px; width:50% !important;">
                  <p class="animated slideInLeft" style="font-family: 'Montserrat', sans-serif; font-size:35px; margin-bottom:0px !important; color:white;"><strong>Claudia & Ciprian</strong></p>



                  <div class="row visible-xs">

                    <div class="col-xs-5 visible-xs" style="margin-top:10px;">
                  <img class="img-thumbnail" style="width:100%;"  src="{{asset('images/poza-nasi.jpeg')}}">
                    </div>

                    <div class="col-xs-7 visible-xs">
                        <p class="animated slideInRight" id="trdt" style="color:white; margin-top:25px; font-size:11px !important; margin-bottom:0px !important;">Vor fi alături de noi nașii noștri</p>
                        <p class="animated slideInLeft" id="sndt" style="color:white; font-size:16px;"><strong>Ristu Ica și Ristu Dan</strong></p>
                          </div>


                  </div>




              </div>
              <div class="col-md-1 hidden-xs"></div>
            </div>
          </div> --}}





        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Sep 25, 2021 16:00:00").getTime();
            // Update the count down every 1 second
            var x = setInterval(function() {
              // Get today's date and time
              var now = new Date().getTime();
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
              document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
              // If the count down is over, write some text
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);


            window.onload = function() {
            document.getElementById('fname').style.display = 'none';
            document.getElementById('lname').style.display = 'none';
            document.getElementById('n1').style.display = 'none';
            document.getElementById('n2').style.display = 'none';
             }

             function check() {
                var select = document.getElementById("nr");
                if((select.options[select.selectedIndex].value) == 1)
               {
                document.getElementById('n1').style.display = 'block';
                document.getElementById('n2').style.display = 'none';
                document.getElementById('fname').style.display = 'block';
                document.getElementById('lname').style.display = 'none';

                document.getElementById("p1").className = "col-md-12";
                document.getElementById("lname").required = false;
               }
               else if((select.options[select.selectedIndex].value) == 2)
               {
                document.getElementById('n1').style.display = 'block';
                document.getElementById('n2').style.display = 'block';
                document.getElementById('fname').style.display = 'block';
                document.getElementById('lname').style.display = 'block';

                document.getElementById("p1").className = "col-md-6";
                document.getElementById("lname").required = true;
               }
        }
</script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

    <script src="{{asset('js/jquery.youtube-background.js')}}?v=1.3"></script>

<script src="{{asset('js/fresco.min.js')}}"></script>

<script src="{{asset('js/flickity.pkgd.min.js')}}"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('[data-youtube]').youtube_background();
    });
</script>

  </body>
</html>

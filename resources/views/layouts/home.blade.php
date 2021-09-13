<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>John and Jane Doe - Wedding Invitation</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  {{-- Scripts --}}
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
                <h1 class="logo" style="font-family: 'Dosis', sans-serif; font-size:25px !important; font-weight:900 !important; margin-top:22px; margin-left:25px !important; ">JOHN AND JANE</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">

		            <li><a href="#what">What?</a></li>
					<li> <a href="#when">When?</a></li>
					<li> <a href="#where">Where?</a></li>
					<li> <a href="#confirmation">Confirmation</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>

    <div id="what"></div>

    <div class="headerw" id="home" name="home"></div>
    <div class="col-md-1 hidden-xs"></div>

    <div id="when">
			<!--  WHEN -->
            <div  class="greywrap hidden-xs" style="background-image:url('images/xy.jpg'); height:528px;  padding-top:0px !important;
             background-size:cover;  background-position: 50% 70%; border:none;">
                <div class="container" id="about" name="about">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-sm-6 col-xs-6 fade-up" style="background-image:url('images/gg.jpg'); background-size:cover; background-position-y: 100%;
                         box-shadow: 3px 3px 24px; margin-bottom:-40px;">
                            <div style="padding-top:80px;"></div>
                            <h1 class="animated bounceIn names">Jonathan Doe</h1>
                            <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:16px; padding-top:15px;">AND</p>
                            <h1 class="animated bounceIn names">Jane Doe</h1>
                            <p class="animated bounceIn date">20 SEPTEMBRIE 2021</p>

                            <p class="animated slideInLeft place">MOSCOW, RUSSIA</p>
                        <p id="demo"></p>
                        <p style="color:rgb(0, 0, 0);"> </p>
                        <div style="padding-bottom:80px;"></div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>

         {{--   WHEN MOBILE --}}
         <div id="when" class="greywrap visible-xs" style="background-image:url('images/mdm.jpg'); height:580px;   background-size:cover;  background-position:0%; margin-top:0px;">
            <div class="container" id="about" name="about">
                <div class="row-white">
                    <div class="col-md-12 col-sm-6 col-xs-12 callout">
                        <h1 class="animated bounceIn" style="color:#bd6c72; font-family: 'Montserrat', sans-serif; font-size:36px;">Jonathan Doe
                            <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:14px; padding-top:15px;">And</p>
                            Jane Doe</h1>
                        <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:26px; padding-top:35px;">20 SEPTEMBRIE 2021</p>
                        <p style="text-align:center; color:rgb(0, 0, 0);  font-size:30px !important; margin-top:10px; font-family: 'Montserrat', sans-serif; background: #da9497;
                        padding-bottom: 20px; padding-top: 20px; color:white;     box-shadow: 3px 3px 24px #00000069;" id="demo2"></p>
                        <div style="padding-top: 5px;"></div>
                        <p class="animated bounceIn" style="color:rgb(0, 0, 0);font-family: 'Montserrat', sans-serif; font-size:16px; letter-spacing:2px;">MOSCOW, RUSSIA</p>
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
                    EVENT'S DETAILS</h1>
                <hr class="fade-down title-mb">
                <p class="animated fade-up" style="'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">When & Where</p>
                <div class="text-center fade-up">
                    <p style="font-family:'Montserrat', sans-serif; font-size:15px !important;">
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                 </div>
                  <div style="padding-bottom:50px;"></div>

                  <div class="col-md-4 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/aa.jpg')}}">
					<p class="animated slideInRight" style="font-family:'Montserrat', sans-serif; font-size:23px !important; margin-bottom:10px; ">The Party</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:14px !important;">
                        <strong>20 Septembrie 2021</strong>
                        <br>
                        Hour: 12:00<br>
                        Hampden-Sydney College,<br>
                        Hampden-Sydney College <br> in Virginia
                        more obscure Latin words, consectetur

                        </p>
                        <a href="" target="_blank" style="padding:8px !important; font-size: 14px;
                        letter-spacing: 2px;" class="btn homebtn smoothScroll">See Map <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>

				<div class="col-md-4 fade-up" style="background-color:#bd6c72;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%; margin-bottom:50px;" src="{{asset('images/a73.jpg')}}">
					<p class="animated slideInRight" style="font-family:'Montserrat', sans-serif; font-size:23px !important; margin-bottom:10px; ">The Ceremony</p>
					<p style="font-family:'Montserrat', sans-serif !important; font-size:14px !important;">
                        <strong>20 Septembrie 2021</strong>
                        <br>
                        Hour: 16:00<br>
                        Hampden-Sydney College,<br>
                        Latin words, combined with a handful of model always free from repetition free from repetition<br>
                        Free from repetition</p>
                        <a href="" style="padding:8px !important; font-size: 14px;
                        letter-spacing: 2px;" class="btn homebtn smoothScroll" target="_blank">See Map <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>

				<div class="col-md-4 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/Cemetery-1 HERO.jpg')}}">
					<p class="animated slideInRight" style="font-family:'Montserrat', sans-serif; font-size:23px !important; margin-bottom:10px; ">The Funerals</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:14px !important;">
                        <strong>20 Septembrie 2021</strong>
                        <br>
                        Hour: 18:00<br>
                        Hampden-Sydney College,<br>
                        Hampden-Sydney College <br> in Virginia
                        more obscure Latin words, consectetur
                        </p>
                        <a href="" target="_blank" style="padding:8px !important; font-size: 14px;
                        letter-spacing: 2px;" class="btn homebtn smoothScroll">See Map <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
			</div><!-- container --><div style="padding-bottom: 105px;"></div>
		</section><!-- section -->

		<!-- ==== WHERE SECTION DIVIDER2  MOBILE-->
		<section class="section-divider textdivider divider3 visible-xs" id="where">
			<div class="container">
                <h1 class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:30px; padding-top:20px !important;">
                    EVENT'S DETAILS</h1>
                <hr class="fade-down title-mb">
                <p class="animated fade-up" style="font-family: 'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">When and Where</p>
                <div class="text-center fade-up">
                <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised </p>
                </div>
                <div style="padding-bottom:20px;"></div>

                <div class="col-md-4 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/aa.jpg')}}">
					<p class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:40px !important; margin-bottom:10px; ">The Party</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>20 Septembrie 2021</strong>
                        <br>
                        Hour: 12:00<br>
                        but also the leap,<br>
                        has survived not only five centuries,   <br> has survived not
                        </p>
                        <a href="" target="_blank" style="padding:8px !important; font-size: 14px;
                        letter-spacing: 2px;" class="btn homebtn smoothScroll">See Map <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
				<div class="col-md-4 fade-up" style="background-color:#bd6c72;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%; margin-bottom:50px;" src="{{asset('images/a73.jpg')}}">
					<p class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:30px !important; margin-bottom:10px; ">The Ceremony</p>
					<p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Hour: 16:00<br>
                        but also the leap,<br>
                        has survived not only five centuries,   <br> has survived not
                        </p>
                        <a href="" style="padding:8px !important;" class="btn homebtn smoothScroll" target="_blank">See Map <i class="el-icon-chevron-down homeicon"></i></a>
                        <div style="padding-bottom:50px;"></div>
				</div>
				<div class="col-md-4 fade-up" style="background-color:#ffffff4d;">
                    <div style="padding-bottom:30px;"></div>
                    <img width="150px" height="150px" style="border-radius:50%;  margin-bottom:50px;" src="{{asset('images/Cemetery-1 HERO.jpg')}}">
					<p class="animated slideInRight" style="font-family: 'Montserrat', sans-serif; font-size:40px !important; margin-bottom:10px; ">The End</p>
                    <p style="font-family: 'Montserrat', sans-serif; font-size:18px !important;">
                        <strong>25 Septembrie 2021</strong>
                        <br>
                        Hour: 18:00<br>
                        but also the leap,<br>
                        has survived not only five centuries,   <br> has survived not
                        </p>
                        <a href="" target="_blank" style="padding:8px !important; font-size: 14px;
                        letter-spacing: 2px;" class="btn homebtn smoothScroll">See Map <i class="el-icon-chevron-down homeicon"></i></a>
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
				<h1 class="centered fade-down" style="color:#915b5f; font-family: 'Montserrat', sans-serif;  font-size:30px;">CONFIRMATION</h1>
				<hr class="fade-down title-mb">
				<div class="col-md-2 fade-up">
				</div><!-- col -->
				<div class="col-md-8 fade-up ">
                    <form action="{{route('confirm')}}" method="POST">
                            @csrf
                            @method("POST")
                               <div class="row">
                                    <div style="display: block;" class="col-lg-12">
                                        <label for="nr" style="color:#915b5f;">How many people?</label>
                                        <select name="participants" class="ppl" id="nr" style="width:100% !important; padding:16px !important;" onchange="check()" required>
                                            <option value="0" selected disabled hidden>
                                                Choose the number of people
                                            </option>
                                            <option value="1">
                                                One person
                                            </option>
                                            <option value="2">
                                                Two  people<i class="fas fa-prescription-bottle-alt    "></i>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row"  id="names" style="padding-top:10px;">
                                    <div style="display: block;" class="col-lg-6"  id="p1"><br>
                                        <label for="fname" id="n1" style="color:#915b5f;">Your name</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Nume" name="name" required style="margin-bottom:30px;">
                                        <center>
                                          <div class="wrapper" id="vac1" style="margin-top:-30px; width:80%;">
                                              <input type="radio" name="vac1" id="p1vy" value="da" checked >
                                              <input type="radio" name="vac1" id="p1vn" value="nu">
                                                <label for="p1vy" class="option option-1">
                                                  <div class="dot"></div>
                                                   <span style="font-size:14px;">Vaccinated</span>
                                                   </label>
                                                <label for="p1vn" class="option option-2">
                                                  <div class="dot"></div>
                                                   <span style="font-size:14px;">Unvaccinated</span>
                                                </label>
                                             </div></center>
                                    </div>
                                    <div style="display: block;" class="col-lg-6" id="p2"><br>
                                        <label for="lname" id="n2" style="color:#915b5f;">Partner's name
                                        </label>
                                        <input type="text" id="lname" class="form-control" placeholder="Partener" name="partner" style="margin-bottom:30px;">

                                        <center>
                                            <div class="wrapper" id="vac2" style="margin-top:-30px; width:80%;">
                                                <input type="radio" name="vac2" id="p2vy" value="da">
                                                <input type="radio" name="vac2" id="p2vn" value="nu">
                                                  <label for="p2vy" class="option option-1" >
                                                    <div class="dot"></div>
                                                     <span style="font-size:14px;">Vaccinated</span>
                                                     </label>
                                                  <label for="p2vn" class="option option-2">
                                                    <div class="dot"></div>
                                                     <span style="font-size:14px;">Unvaccinated</span>
                                                  </label>
                                               </div></center>
                                    </div>
                                </div>
                                <div class="row" style="padding-top:30px;">
                                    <div class="col-md-6">
                                        <label for="kids" style="color:#915b5f;">Number of children</label>
                                        <select name="kids" class="ppl" id="kids" style="width:100% !important; padding:16px !important;" onchange="check()" required>
                                            <option value="0" selected disabled hidden>
                                                Choose the number of children
                                            </option>
                                            <option value="1">One child</option>
                                            <option value="2">Two children</option>
                                            <option value="3">Tree children</option>
                                            <option value="4">Four children</option>
                                            <option value="5">Five children</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="kids" style="color:#915b5f;">Write their age/ages</label>
                                        <input type="text" class="form-control" placeholder="e.g: 7,10,12..." name="ages" style="margin-bottom:30px;">
                                    </div>
                                </div>
                                <center>
                                <div class="wrapper">
                                    <input type="radio" name="menu" id="option-1" value="normal" checked >
                                    <input type="radio" name="menu" id="option-2" value="vegetarian">
                                      <label for="option-1" class="option option-1">
                                        <div class="dot"></div>
                                         <span style="font-size:14px;">Standard Menu</span>
                                         </label>
                                      <label for="option-2" class="option option-2">
                                        <div class="dot"></div>
                                         <span style="font-size:14px;">Vegan Menu</span>
                                      </label>
                                   </div></center>
                                <div class="row" style="padding-top:30px;">
                                    <div class="col-md-12">
                                        <label for="message" style="color:#915b5f;">Do you want to tell us something?</label>
                                        <textarea name="message" class="form-control form-opacity" id="message" style="border-radius: 0px;"></textarea>
                                    </div>
                                </div>
                                {{-- SUBMIT --}}
                                <div class="col-md-12 text-center hidden-xs" style="padding-top:75px;">
                                    <button type="submit" name="status" class="btn btn-success" value="1" style="margin-right:10px;"> Yes, I will participate</button>
                                    <button type="submit" name="status" class="btn btn-primary" value="0"> No, I cannot participate</button>
                                    <div style="padding-bottom: 80px;"></div>
                                </div>
                                {{-- SUBMIT MOBILE--}}
                                <div class="col-md-12 text-center visible-xs" style="padding-top:75px;">
                                    <button type="submit" name="status" class="btn btn-success" value="1" style="margin-right:10px; background-color:white;">Yes, I will participate</button>
                                    <div style="padding-bottom: 20px;"></div>
                                    <button type="submit" name="status" class="btn btn-primary" value="0"> No, I cannot participate</button>
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
			<div class="container-fluid" style="background-image:url('images/Cemetery-1 HERO.jpg'); background-size:cover; background-color: #f8b9ab66;
            background-blend-mode: luminosity;   background-position-y: 20%;">
				<h1 class="fade-down">THNAK YOU!</h1>
				<hr>
                <div style="padding-bottom: 40px;"></div>
				<div class="fade-up">
					<p style="font-family: 'Montserrat', sans-serif; font-size:40px;">John Doe</p>
                    <p>&</p>
					<p style="font-family: 'Montserrat', sans-serif; font-size:40px;">Jane Doe</p>
				</div>
                <div style="padding-bottom: 40px;"></div>
			</div><!-- container -->
		</section><!-- section -->

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

            document.getElementById('vac1').style.display = 'none';
            document.getElementById('vac2').style.display = 'none';

            }

            function check(){
                var select = document.getElementById("nr");
                if((select.options[select.selectedIndex].value) == 1)
                {
                document.getElementById('n1').style.display = 'block';
                document.getElementById('n2').style.display = 'none';
                document.getElementById('fname').style.display = 'block';
                document.getElementById('lname').style.display = 'none';
                document.getElementById('vac1').style.display = 'flex';
                document.getElementById('vac2').style.display = 'none';

                document.getElementById("p2vy").checked = false;

                document.getElementById("p1").className = "col-md-12";
                document.getElementById("lname").required = false;
               }
               else if((select.options[select.selectedIndex].value) == 2)
               {
                document.getElementById('n1').style.display = 'block';
                document.getElementById('n2').style.display = 'block';
                document.getElementById('fname').style.display = 'block';
                document.getElementById('lname').style.display = 'block';
                document.getElementById('vac2').style.display = 'flex';
                document.getElementById('vac1').style.display = 'flex';
                document.getElementById("p1").className = "col-md-6";
                document.getElementById("lname").required = true;
                document.getElementById("p2vy").checked = true;
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
  </body>
</html>

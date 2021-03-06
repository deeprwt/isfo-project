<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('web/assets/css/plugins/aos.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('web/assets/css/style.css') }}">
        @yield('head')

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="header section">
            <div class="bg-danger w-100 p-1 p-lg-2">
				<div class="row w-100">
					<div class="col-md-8 text-center">

							<i class="fa fa-phone text-white"></i>&nbsp; 
						   <a href="tel:011-61400200" style="color: white;">Call: 011-61400200 for General Query </a> &nbsp;&nbsp;
                           &nbsp;<span class="text-white" style="opacity: 0.4;">|</span>&nbsp;&nbsp;&nbsp;
                           <a href="tel:011-41198254" style="color: white;">Call: 011-41198254 for Tech Support </a> &nbsp;&nbsp;

						   

                           
					</div>
					<div class="col-md-4 text-center text-white">
                        <i class="fa fa-envelope text-white"></i>&nbsp; 
						   <a href="mailto:support@isfo.in" style="color: white; ">support@isfo.in</a> &nbsp;&nbsp;
                        {{-- <i class="fa fa-sign-in"></i><button class="btn bg-transparent  text-white" id="loginbtn">  <i class="fa fa-sign-in"></i>&nbsp;Login  </button> --}}
                        
                       

					</div>
				</div>
            
            </div>
            <div class="container">

                <!-- Header Wrapper Start  -->
                <div class="header-wrapper">
                      <!-- Header Logo start -->
                <div class="header-logo d-md-none d-none d-lg-block">
                        <a href="{{ url('/') }}" class="flex-lg-row d-flex "><img src="{{ url('web/assets/images/logo/logo.png') }}" class="img-fluid" alt="Logo"></a>
                    </div>
                     <!-- Header Logo End -->
                    <!-- Header Right Start -->
                    <div class="header-right">
               
                    <!-- Header Meta Start -->
                    <div class="header-meta">
                           
                        <div class="header-login-join d-none d-lg-block">
                        
                            <a class="btn join-btn" href="{{ url('login') }}">Registration</a>
                        </div>
                        <!-- Header Login Join End -->
                        </div>
                        <!-- Header Meta End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="main-menu">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                
                                <li><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('about-isfo') }}">About ISFO</a></li>
                                        <li><a href="{{ url('advisory-council') }}">Advisory Panel </a></li>
                                        <li><a href="{{ url('our-partner') }}">Our Partner</a></li>
                                        <li><a href="{{ url('why-isfo') }}">Why ISFO </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Olympiads</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('science') }}">Science Olympiad</a></li>
                                        <li><a href="{{ url('math') }}">Maths Olympiad</a></li>
                                        <li><a href="{{ url('english') }}">English Olympiad</a></li>
                                       
                                    </ul>
                                </li>
                               
                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                                <li><a href="#">More</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('web/assets/pdf/AWARDS.pdf') }}" target="_blank">Awards & Recognition</a></li>
                                        <!-- <li><a href="{{ url('web/assets/pdf/process21.pdf') }}" target="_blank">Online Exam Process</a></li> -->
                                     
                                       
                                    </ul>
                                </li>
                                
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                
                            </ul>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Meta Start -->
                        <div class="header-meta">

                           
                            <div class="header-login-join d-none d-lg-block">
                              
                                <a class="btn join-btn" href="{{ url('login') }}">Dashborad</a>
                            </div>
                            <!-- Header Login Join End -->
                        </div>
                        <!-- Header Meta End -->

                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header Right End -->

                      <!-- Header Logo Start -->
                      <div class="header-logo ">
                        <a href="{{ url('/') }}" class="flex-lg-row d-flex"> &nbsp; <img src="{{ url('web/assets/images/logo/euphe.jpg') }}" class="img-fluid" alt="Logo">&nbsp;<img src="{{ url('web/assets/images/logo/logo.png') }}" class="img-fluid d-md-block d-block d-lg-none" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <!-- Header Wrapper End -->

            </div>
            <!-- running bar code start  -->
            <div class="container">
                <marquee behavior="scroll" direction="left" scrollamount="5">
                <h4 class="text-danger text-left" >
                    Registration open. Last date of registrations is 20th october
                 </h4>
                </marquee>
            </div>
            <!-- running bar code end  -->
        </div>

        <div class="offcanvas offcanvas-start" id="offcanvasMenu">

            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="#"><img src="assets/images/logo.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
        
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">
                    <a class="btn join-btn" href="{{ url('login') }}">Registration</a>
                        <li><a href="{{ url('/') }}">Home</a></li>
                                
                        <li><a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('about-isfo') }}">About ISFO</a></li>
                                <li><a href="{{ url('advisory-council') }}">Advisory Panel </a></li>
                                <li><a href="{{ url('our-partner') }}">Our Partner</a></li>
                                <li><a href="{{ url('why-isfo') }}">Why ISFO </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Olympiads</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('science') }}">Science Olympiad</a></li>
                                <li><a href="{{ url('math') }}">Math Olympiad</a></li>
                                <li><a href="{{ url('english') }}">English Olympiad</a></li>
                               
                            </ul>
                        </li>
                       
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                        <li><a href="#">More</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('awards-rec') }}">Awards & Recognition</a></li>
                                <!-- <li><a href="{{ url('web/assets/pdf/process21.pdf') }}" target="_blank">Online Exam Process</a></li> -->
                                <!-- <li><a href="#">Exam Instructions</a></li>
                                <li><a href="#">Exam Process</a></li> -->
                               
                            </ul>
                        </li>
                       
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
                       
                        <a class="btn join-btn" href="{{ url('login') }}">Dashborad</a>
                    </ul>
                </div>
            </div>
        
        </div>
        <!-- Offcanvas End -->
        
        
        <!-- Header End -->

        <!-- Offcanvas Start -->
       
      @yield('main')
        <!-- Call to Action End -->
        <!-- Footer Start -->
     
        <div class="footer-section section">
            <div class="container">
                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="header-logo">
                            </div>
                            <a href="index.html"><img src="{{ url('logo/oly.png') }}"  style="width:auto;height:80px;margin-top:-10px" alt="Logo"></a>
                            <br>
                            <p class="text-light"> <i class="fa fa-home"></i> International Society for Olympiad
                                193, Ganpati Enclave, Jharsa Road
                                Gurgaon (HR) - 122001, India</p><br><br>
                            <br>
                            <a href="mailto:support@isfo.in" class="text-light">  <i class="fa fa-envelope"></i>&nbsp;&nbsp;support@isfo.in</a>
                        </div>
                        <div class="col-md-3 p-2">
                            <h4 class="text-white">INFORMATION</h4>
                            <hr>
                            <ul class="text-white">
                                <li><a href="{{ url('/') }}" class="hvr-float-shadow">Home </a></li>
                                <li><a href="{{ url('about-isfo') }}" class="hvr-float-shadow">About Us </a></li>
                                <!--<li><a href="https://www.isfo.in/test-your-self.php" class="hvr-float-shadow">Test Yourself</a></li>-->
                                <!--<li><a href="#" class="hvr-float-shadow">Academic Workshops</a></li>-->
                               <!-- <li><a href="https://www.isfo.in/isfo/5" class="hvr-float-shadow">Achiever Section</a></li>-->
                                
                              <!--  <li><a href="#" class="hvr-float-shadow">Gallery</a></li>-->
                                <li><a href="{{ url('contact') }}" class="hvr-float-shadow">Contact Us</a></li>
                                <li><a href="{{ url('login') }}" class="hvr-float-shadow">login</a></li>
                                
                               </ul>
                               

                        </div>
                        <div class="col-md-3 p-2">
                            <h4 class="text-white">IMPORTANT LINKS</h4>
                            <hr>
  <ul class="text-white">
    <li>
    <a  class="hvr-float-shadow" href="{{ url('web/assets/pdf/AWARDS.pdf') }}" target="_blank">Awards & Recognition  </a>
</li>
   <li>
    <a  class="hvr-float-shadow" href="{{ url('web/assets/pdf/image3a.png') }}" target="_blank">Exam Schedule</a>
    
</li>
   <!-- <li><a href="{{ url('web/assets/pdf/StudentRegistrationProcess.pdf') }}" target="_blank" class="hvr-float-shadow" >Student Registration Process</a></li> -->
   <li><a href="{{ url('faq') }}" class="hvr-float-shadow" >Frequently Asked Questions</a></li>
</ul>
                        </div>
                        <div class="col-md-3 ">
                            <a href="index.html"> <img src="{{ url('logo/eup.jpg') }}" class="pb-1" style="width:auto;height:70px" alt="Logo"></a>
                            <br>
                            <p class="text-light"> <i class="fa fa-home"></i>  Proficiency Learning Solutions
                                Private Limited<br>
                                A-12, 2nd Floor, Mohan Cooperative Industrial Estate, Main Mathura Road,
                                New Delhi -110044</p>
                            <br>
                            <a href="tel:011 61400200" class="text-light"><i class="fa fa-phone"></i> &nbsp;&nbsp;011 61400200</a><br>
                            <a href="tel:011 41198254" class="text-light">Tech Support :  011 41198254</a>
                            
                        </div>
                       
                    </div>
                <!-- Footer Copyright End -->
                <div class="footer-copyright">
                        <div class="text-center">
                            <p>&copy;  Copyright 2021 Eupheus Learning | All Rights Reserved.. </p>
                        </div>
                </div>
                <!-- Footer Copyright End -->
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top End -->
        <button class="back-btn" id="backBtn"><i class="flaticon-left-arrow-1"></i></button>
        <!-- Back to Top End -->
    </div>

    <!-- JS
    ============================================ -->
    <script src="{{ url('web/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url('web/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ url('web/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ url('web/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/aos.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('web/assets/js/plugins/appear.min.js') }}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->


    <!-- Main JS -->
    <script src="{{ url('web/assets/js/main.js') }}"></script>
    @yield('js')

</body>

</html>
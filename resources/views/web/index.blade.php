@extends('web.layout.template')
@section('head')

@endsection
@section('main')
<!-- <section class=" p-3 ">
    <div class="container" >
    <br><br><br>
  <span class="p-3 ">
    <h3 class="text-danger text-left" >
        Kindly Attention-
    </h4>
    <p>Those who were not able to submit their math papers on 23/01/2022, please email your details (Name, Registered Mobile number, Registered email id, School Name, City, State, School Code) at <a href="mailto:isfosupport@eupheus.in" class="text-primary">isfosupport@eupheus.in</a></p>
  </span>
   
</div>
</section> -->
<!-- Hero Start -->
<div class="hero-section-4 section p-0 m-0" style="background-image: url(assets/images/l-effect.jpg);">
    
<div class="text-center">
    <img src="{{ url('web/assets/images/slider/banner.png') }}" class="img-fluid" alt="">
</div>

</div>
<!-- Hero End -->

<!-- Features Four Start -->
<div class="section features-4-section">
    <div class="container">
        <!-- Features Four Wrapper Start -->
        <div class="features-4-wrapper">
            <div class="row">
                
                <div class=" col-md-4" >
                    <!-- Features Four Item Start -->
                    <div class="courses-subject-item color-1 text-center" style="height:250px">
                        <div class="courses-subject-img">
                            <a href="{{ url('science') }}"><img src="{{ url('web/assets/images/icons/science_icon.png') }}" alt=""></a>
                        </div>
                        <div class="courses-subject-content py-1">
                            <h3 class="title"><a href="{{ url('science') }}" style="line-height: 1">Science Olympiad</a></h3><br>
                          
                        </div>
                    </div>
                    <!-- Features Four Item End -->
                </div>
                <div class=" col-md-4" >
                    <!-- Features Four Item Start -->
                    <div class="courses-subject-item color-1 text-center " style="height:250px">
                        <div class="courses-subject-img">
                            <a href="{{ url('math') }}"><img src="{{ url('web/assets/images/icons/math_icon.png') }}" alt=""></a>
                        </div>
                        <div class="courses-subject-content py-1">
                            <h3 class="title"><a href="{{ url('math') }}" style="line-height: 1">Maths Olympiad </a></h3><br>
                            
                        </div>
                    </div>
                    <!-- Features Two Item End -->
                </div>
                <div class=" col-md-4" >
                    <!-- Features Four Item Start -->
                    <div class="courses-subject-item color-1 text-center " style="height:250px">
                        <div class="courses-subject-img">
                            <a href="{{ url('english') }}"><img src="{{ url('web/assets/images/icons/english_icon.png') }}" alt=""></a>
                        </div>
                        <div class="courses-subject-content py-1">
                            <h3 class="title"><a href="{{ url('english') }}" style="line-height: 1">English Olympiad</a></h3><br>
                            
                        </div>
                    </div>
                    <!-- Features Four Item End -->
                </div>
                <!-- <div class=" col-md-3" >

                    <div class="courses-subject-item color-1 text-center py-2" style="height:250px">
                        <div class="courses-subject-img">
                            <a href="{{ 'gk' }}"><img src="{{ url('web/assets/images/icons/gkk.png') }}" alt=""></a>
                        </div>
                        <div class="courses-subject-content py-1">
                            <h3 class="title"><a href="{{ 'gk' }}" style="line-height: 1">General Knowledge Olympiad</a></h3>
                            
                        </div>
                    </div>

                </div> -->
               
                {{-- <div class=" col-md-2" >
                    <!-- Features Four Item Start -->
                    <div class="courses-subject-item color-1 text-center py-2" style="height:250px">
                        <div class="courses-subject-img">
                            <a href="#"><img src="{{ url('web/assets/images/icons/book.png') }}" alt=""></a>
                        </div>
                        <div class="courses-subject-content py-1">
                            <h3 class="title"><a href="#">Result </a></h3><br>   
                            
                        </div>
                    </div>
                    <!-- Features Four Item End -->
                </div> --}}
                
            </div>
        </div>
        <!-- Features Four Wrapper End -->
    </div>
</div>
<!-- Features Four End -->




   <!-- Team Start -->
   <div class="section team-2-section section-padding">
    <div class="container">
        <!-- Team Wrapper Start -->
        <div class="team-wrapper">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    
                    <!-- Section Title End -->
                </div>
                <div class="col-lg-5">
                    
                </div>
            </div>
            <!-- Team Item Wrapper Start -->
            <div class="team-2-item-wrapper">
                <div class="row">
                    <div class="col-lg-4 text-center col-md-6 col-sm-6">
                        <!-- Single Team Start -->
                        <div style="width:300px;display:inline-block"  class="single-team ">
                            <div class="team-img">
                                <a href="#"><img src="{{ url('web/assets/images/img/pic2.jpg') }}" alt="team"></a>
                               
                            </div>
                            <div class="" style="height: 150px">
                                <div class="py-2 ">
                                    <h4 class="name"><a href="{{ url('web/assets/pdf/process21.pdf') }}" class="font-weight-bold mt-2" >EXAM SCHEDULE </a></h4>
                                </div>
                                
                                <div class="text-center">
                                    <a href="{{ url('web/assets/pdf/image3a.png') }}" target="_blank" class="btn btn-warning rounded-lgx ">Read More</a>
                                 </div>
                            </div>
                                
                            
                        </div>
                        <!-- Single Team End -->
                    </div>
                    <div class="col-lg-4 text-center col-md-6 col-sm-6">
                        <!-- Single Team Start -->
                        <div style="width:300px;display:inline-block"  class="single-team team-color-2">
                            <div class="team-img">
                                <a href="#"><img src="{{ url('web/assets/images/img/pic4.jpg') }}" alt="team"></a>
                            
                            </div>
                            <div class="" style="height: 150px">
                                <div class="py-2 ">
                                    <h4 class="name"><a href="{{ url('web/assets/pdf/scheme.pdf') }}" target="_blank" class="font-weight-bold mt-2">TEST PAPER SCHEME & MARKING</a></h4>
                                </div>
                                
                                <div class="text-center">
                                    <a href="{{ url('scheme/gk') }}" target="_blank" class="btn btn-warning rounded-lg ">Read More</a>
                                 </div>
                            </div>
                        </div>
                        <!-- Single Team End -->
                    </div>
                    
                    <div class="col-lg-4 text-center col-md-6 col-sm-6">
                        <!-- Single Team Start -->
                        <div style="width:300px;display:inline-block"  class="single-team">
                            <div class="team-img">
                                <a href="#"><img src="{{ url('web/assets/images/img/pic1.jpg') }}" alt="team"></a>
                                
                            </div>

                            <div class="" style="height: 150px">
                                <div class="py-2 ">
                                    <h4 class="name"><a href="{{ url('web/assets/pdf/award.pdf') }}" target="_blank" class="font-weight-bold mt-2">Awards & Recognition</a></h4>
                                </div>
                               
                                <div class="text-center">
                                    <a  href="{{ url('web/assets/pdf/AWARDS.pdf') }}" target="_blank" class="btn btn-warning rounded-lg">Read More</a>
                                 </div>
                            </div>
                            
                        </div>
                        <!-- Single Team End -->
                    </div>
                </div>
            </div>
            <!-- Team Item Wrapper End -->
        </div>
        <!-- Team Wrapper End -->
    </div>
</div>
<!-- Team End -->

        <!-- Testimonial Start -->
        <div class="section testimonial-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="section-title text-center">
                            <h2 class="title">TESTIMONIALS</h2>
                        </div>
                        <!-- Testimonial Wrapper Start -->
                        <div class="testimonial-wrapper swiper-container testimonial-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <img src="{{ url('web/assets/images/testimonial/t1.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-content color-1">
                                            <p>“ISFO gave my child the opportunity to compete with other children from different schools. It has enhanced her outlook, skills and her overall personality....”<br>
                                            </p>
                                            
                                            <div class="testimonial-bottom">
                                                <div class="name-degree">
                                                    <span class="name"><small><i class="text-dark">Dr. Vijita Mehta</i></small></span>
                                                   
                                                </div>
                                                <span><i class="flaticon-straight-quotes"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <img src="{{ url('web/assets/images/testimonial/t2.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-content color-2">
                                            <p>We at Kalinga Public School are very thankful to International Society for Olympiad for having given our students an opportunity to.....<br>
                                               </p>
                                            <div class="testimonial-bottom">
                                                <div class="name-degree">
                                                    <span class="name"><small><i class="text-dark">Sombhadra Tripathy</i></small></span>
                                                 
                                                </div>
                                                <span><i class="flaticon-straight-quotes"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <img src="{{ url('web/assets/images/testimonial/t3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-content w-100 color-3 ">
                                            <p class="w-100">For the first time SASMO has been brought to India by ISFO. It is truly encouraging that the 2nd level of the examinations ....</p>
                                            <div class="testimonial-bottom">
                                                <div class="name-degree">
                                                    <span class="name"><small><i class="text-dark">Chittaranjan Pragyan</i></small></span>
                                                   
                                                </div>
                                                <span><i class="flaticon-straight-quotes"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single Testimonial Start -->
                                    <div class="single-testimonial">
                                        <div class="testimonial-img">
                                            <img src="{{ url('web/assets/images/testimonial/t4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-content color-4">
                                            <p>At the outset I would like to thank International Society for Olympiad for having brought in an Olympiad of International level to our country...
                                            </p>
                                            <div class="testimonial-bottom">
                                                <div class="name-degree">
                                                    <span class="name " ><small><i class="text-dark">K. K. Rao</i></small></span>
                                                 
                                                </div>
                                                <span><i class="flaticon-straight-quotes"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Testimonial End -->
                                </div>
        
                            </div>
                            <!-- Add Pagination -->
                            <div class="testimonial-arrow swiper-button-next"></div>
                            <div class="testimonial-arrow swiper-button-prev"></div>
        
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('testimonials') }}" class="link">View all <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
           
                    </div>
                </div>
               
                <!-- Testimonial Wrapper End -->
            </div>
        </div>

        <div class="section report-career-2-section section-padding-02 pb-4 mb-5">
            <div class="container">
                <!-- Report Career Wrapper Start -->
                <div class="section-title text-center my-4">
                    <h2 class="title">Gallery</h2>
                </div>
                <div class="report-career-2-wrapper">
                    <div class="row">
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img1-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img2-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img3-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img4-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 p-2">
                            <img style="height: 250px" class="w-100" src="{{ url('web/assets/images/gallery/img5-min.jpg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
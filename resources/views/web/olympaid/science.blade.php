@extends('web.layout.template')
@section('main')
            <!-- Page Banner Start -->
            <div class="section page-banner-section py-5" style="background-image: url({{ url('web/assets/images/bg/brd.jpg') }});">
                <div class="container">
                    <!-- Page Banner Wrapper Start -->
                    <div class="page-banner-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Page Banner Content Start -->
                                <div class="page-banner text-center">
                                    <h2 class="title ">Science Olympaid</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="">Home</a></li>
                                        <li class="breadcrumb-item active " aria-current="page">Science Olympaid</li>
                                    </ul>
                                </div>
                                <!-- Page Banner Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Page Banner Wrapper End -->
                </div>
            </div>
            <!-- Page Banner End -->
            <!-- Report Career Section Start -->
            <div class="section blog-standard-section section-padding my-5">
                <div class="container">
                    <!-- Blog Wrapper Start -->
                    <div class="blog-standard-wrapper wrapper">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="blog-post-wrapper">
                                  <div class="row">
                                      <div class="col-md-8">
                                        <div class="section-title section-devider">
                                            <h2 class="title">ISFO - Science Olympiad</h2>
                                        </div>
                                        <p class="py-5">
                                            Science Olympiad aims into turn 
                                            Science into a practical, application 
                                            based concept which can be 
                                            explorative and adaptive rather 
                                            than structured.
                                            The Science Olympiad conducted 
                                            by ISFO aims to recognize the raw 
                                            scientific fervour and talent within 
                                            students at formative age. Working 
                                            in tandem with ICSE and CBSE 
                                            boards, Science Olympiad aims to 
                                            test the students not only on their 
                                            theoretical knowledge of the 
                                            subject but the creative 
                                            applications of its concepts as well
                                        </p>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="text-center">
                                              <img src="{{ url('web/assets/images/olympaid/sci.png') }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                           <div class="col-md-3 pb-5">
                               <ul class="list-group">
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                       <a href="{{ url('web/assets/pdf/sch.pdf') }}" target="_blank">Exam Schedule </a>
                                   </li>
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('web/assets/pdf/syllabus/sci.pdf') }}" target="_blank">Syllabus </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('scheme/science') }}">Paper Scheme  </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('sample-paper/science') }}">Sample Papers  </a>
                                </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
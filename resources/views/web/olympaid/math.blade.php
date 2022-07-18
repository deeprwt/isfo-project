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
                                    <h2 class="title ">Maths Olympaid</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="">Home</a></li>
                                        <li class="breadcrumb-item active " aria-current="page">Math Olympaid</li>
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
                                            <h2 class="title">ISFO - Maths Olympiad</h2>
                                        </div>
                                        <p class="py-5">
                                            Maths Olympiad puts to test a 
                                            student’s understanding of 
                                            mathematics, the approach they 
                                            take to tackle a problem, their 
                                            clarity of thought and most 
                                            importantly a student’s response 
                                            to the ever rising diffculty and 
                                            the determination to solve the 
                                            problems at hand.
                                            Through our exams we aim to 
                                            imbibe in our students the 
                                            curious spirit of an explorer who 
                                            learns to integrate the discipline 
                                            of Maths with the entire spectrum 
                                            of learning.
                                        </p>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="text-center">
                                              <img src="{{ url('web/assets/images/olympaid/math.png') }}" alt="">
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                           <div class="col-md-3 pb-5">
                               <ul class="list-group">
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('web/assets/pdf/image3a.png') }}" target="_blank">Exam Schedule </a>
                                   </li>
                                   <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('web/assets/pdf/syllabus/math.pdf') }}" target="_blank">Syllabus </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('scheme/math') }}">Paper Scheme  </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('sample-paper/math') }}">Sample Papers  </a>
                                </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
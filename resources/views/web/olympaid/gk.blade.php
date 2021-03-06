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
                                    <h2 class="title ">GK Olympaid</h2>
                                    <ul class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="">Home</a></li>
                                        <li class="breadcrumb-item active " aria-current="page">GK Olympaid</li>
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
                                            <h2 class="title">ISFO - GK Olympiad</h2>
                                        </div>
                                        <p class="py-5">
                                            General Knowledge is the 
                                            knowledge of a broad range of facts 
                                            about varied subjects in the context 
                                            of your country and the world 
                                            around you. This culturally-valued 
                                            real-time information equips 
                                            students with cognitive skills that 
                                            focus on attaining and processing 
                                            public and common knowledge 
                                            related to current events. 
                                            ISFO GK Olympiad is a test of 
                                            competence and proficiency in 
                                            General Knowledge, based on 
                                            subjects like History, Geography, 
                                            General Science and Current Affairs
                                        </p>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="text-center">
                                              <img src="{{ url('web/assets/images/olympaid/gk.png') }}" alt="">
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
                                    <a href="{{ url('web/assets/pdf/syllabus/gk.pdf') }}" target="_blank">Syllabus </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('scheme/gk') }}">Paper Scheme  </a>
                                </li>
                                <li class="list-group-item my-3 border boder-dark rounded-lg bg-light">
                                    <a href="{{ url('sample-paper/gk') }}">Sample Papers  </a>
                                </li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
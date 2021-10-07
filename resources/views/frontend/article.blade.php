@extends('layouts.frontend')
@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
        <h2>Artikel</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= About Section ======= -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
              <div class="course-item">
                <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                <div class="course-content">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4>Grammar</h4>
                      <p class="price">2 jam yang lalu</p>
                    </div>
      
                    <h3><a href="course-details.html">Tips gampang memahami tenses</a></h3>
                    <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                        <span>Antonio</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="fa fa-user"></i>&nbsp;Tutor Ielts
                      </div>
                    </div>
                </div>
              </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div class="course-item">
                  <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                  <div class="course-content">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>Umum</h4>
                        <p class="price">2 Hari Lalu</p>
                      </div>
        
                      <h3><a href="course-details.html">Kenapa Orang Indonesia Sulit Belajar Bahasa Inggris</a></h3>
                      <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                          <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                          <span>Antonio</span>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                          <i class="fa fa-user"></i>&nbsp;Administrator
                        </div>
                      </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div class="course-item">
                  <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                  <div class="course-content">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>Ielts</h4>
                        <p class="price">1 hari yang lalu</p>
                      </div>
        
                      <h3><a href="course-details.html">Skor ielts kurang dari 5.0? Ini yang harus anda lakukan</a></h3>
                      <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                          <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                          <span>Antonio</span>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                          <i class="fa fa-user"></i>&nbsp;Administrator
                        </div>
                      </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                <div class="course-item">
                  <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                  <div class="course-content">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>Grammar</h4>
                        <p class="price">2 jam yang lalu</p>
                      </div>
        
                      <h3><a href="course-details.html">Tips gampang memahami tenses</a></h3>
                      <div class="trainer d-flex justify-content-between align-items-center">
                        <div class="trainer-profile d-flex align-items-center">
                          <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                          <span>Antonio</span>
                        </div>
                        <div class="trainer-rank d-flex align-items-center">
                          <i class="fa fa-user"></i>&nbsp;Tutor Ielts
                        </div>
                      </div>
                  </div>
                </div>
              </div> <!-- End Course Item-->
  
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                  <div class="course-item">
                    <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4>Umum</h4>
                          <p class="price">2 Hari Lalu</p>
                        </div>
          
                        <h3><a href="course-details.html">Kenapa Orang Indonesia Sulit Belajar Bahasa Inggris</a></h3>
                        <div class="trainer d-flex justify-content-between align-items-center">
                          <div class="trainer-profile d-flex align-items-center">
                            <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                            <span>Antonio</span>
                          </div>
                          <div class="trainer-rank d-flex align-items-center">
                            <i class="fa fa-user"></i>&nbsp;Administrator
                          </div>
                        </div>
                    </div>
                  </div>
                </div> <!-- End Course Item-->
  
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                  <div class="course-item">
                    <img src="{{ asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4>Ielts</h4>
                          <p class="price">1 hari yang lalu</p>
                        </div>
          
                        <h3><a href="course-details.html">Skor ielts kurang dari 5.0? Ini yang harus anda lakukan</a></h3>
                        <div class="trainer d-flex justify-content-between align-items-center">
                          <div class="trainer-profile d-flex align-items-center">
                            <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                            <span>Antonio</span>
                          </div>
                          <div class="trainer-rank d-flex align-items-center">
                            <i class="fa fa-user"></i>&nbsp;Administrator
                          </div>
                        </div>
                    </div>
                  </div>
                </div> <!-- End Course Item-->
  
          </div>
  
        </div>
    </section><!-- End Courses Section -->
@endsection
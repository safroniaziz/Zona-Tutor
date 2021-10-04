@extends('layouts.frontend')
@section('hero')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Kesulitan Belajar Bahasa Inggris?<br>Kami Solusinya</h1>
      <h2>Temukan tutor  favoritmu hanya dengan satu genggaman</h2>
      <a href="courses.html" class="btn-get-started"><i class="fa fa-rocket"></i>&nbsp;Ayo Mulai</a>
    </div>
  </section><!-- End Hero -->
@endsection

@section('main')
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="{{asset('frontend/img/about.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Kenapa Orang Indonesia Banyak Kesulitan Dalam Belajar Bahasa Inggris ?</h3>
          <p  style="text-align: justify; font-size:15px !important">
            Saat ini kemampuan menguasai bahasa yang paling banyak digunakan di seluruh dunia sudah menjadi sebuah keharusan. Kemampuan menguasai bahasa 
              inggris dapat meningkatkan kualitas dan akan meningkatkan peluang mendapatkan pekerjaan yang layak, baik di perusahaan Nasional maupun Internasional. <br>
            Tetapi, pernahkan anda merasa kesulitan dalam belajar bahasa inggris? Apakah masalah-masalah berikut juga anda rasakan?

          </p>
          <ul>
            <li style="padding-bottom: 0px !importnt; font-size:15px !important;"><i class="bi bi-check-circle"></i> Belajar sendiri tanpa tutor?</li>
            <li style="padding-bottom: 0px !importnt; font-size:15px !important;"><i class="bi bi-check-circle"></i> Sulit mencari tutor yang kompeten?</li>
            <li style="padding-bottom: 0px !importnt; font-size:15px !important;"><i class="bi bi-check-circle"></i> Kursus mahal tapi hasil tidak signifikan?</li>
          </ul>
          <p  style="font-size:15px !important;">
            Jika iya anda tidak perlu khawatir, di ZonaTutor anda dapat mencari tutor bahasa inggris yang kompeten, sesuai dengan kebutuhan anda.
          </p>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Siswa</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
          <p>Kursus</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
          <p>Tutor</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Kota</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Kenapa Memilih Zona Tutor?</h3>
            <p>
              Zona Tutor dirancang khusus untuk dapat memudahkan orang-orang yang ingin belajar bahasa inggris agar dapat menemukan tutor yang cocok dan sesuai dengan keinginan baik belajar
              langsung tatap muka, online via zoom, ataupun berupa video yang dapat di akses melalui halaman siswa.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn"> <i class="bx bx-chevron-right"></i>Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>Kelas Tatap Muka/Zoom</h4>
                  <p>Siswa dapat memilih tutor yang dia inginkan, dan dapat memilih kelas apakah secara tatap muka atau via zoom</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Kelas Video Online</h4>
                  <p>Siswa dapat belajar secara online dari mana saja melalui video tutorial yang dapat diakses dari mana dan kapan saja </p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Diskusi Secara Langsung</h4>
                  <p>Jika siswa ingin bertanya mengenai kelas yang akan dipilih dapat melakukan diskusi dengan tutor bersangkutan</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3><a href="">Kelas Ielts</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3><a href="">Kelas Toefl</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3><a href="">Kelas Grammar</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3><a href="">Kelas Speaking</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3><a href="">Kelas Reading</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3><a href="">Kelas Vocabulary</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3><a href="">Kelas Pronunciation</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3><a href="">Paket Lengkap</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses" style="padding: 0px !important;">
    <div class="container" data-aos="fade-up">

      <div class="section-title" style="padding-bottom: 10px !important;">
        <h2>Kelas Kursus</h2>
        <p>Kelas Tersedia</p>
      </div>
      <div class="section-title" style="width: 20%;  padding-bottom:20px;">
        <a style="margin-left: 0px !important; border-radius:0px !important;" href="courses.html" class="get-started-btn"><i class="fa fa-sign-in"></i>&nbsp;Lihat Semua Kelas</a>
      </div>
      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{asset('frontend/img/course-1.jpg') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Grammar</h4>
                <p class="price">Rp.500.000.00</p>
              </div>

              <h3><a href="course-details.html">Tenses Dari Awal (Tatap Muka)</a></h3>
              <p>Mempelajari tenses dari awal sampai mahir</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                  <span>Antonio</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="fa fa-map-marker"></i>&nbsp;Bengkulu
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;65
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="course-item">
            <img src="{{asset('frontend/img/course-2.jpg') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Pronunciaton </h4>
                <p class="price">Rp.500.000.00</p>
              </div>

              <h3><a href="course-details.html">Master Toefl Dalam 30 Hari (Tatap Muka)</a></h3>
              <p>Mempelajari tips dan trick mengerjakan soal-soal toefl sampai master</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                  <span>Antonio</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="fa fa-map-marker"></i>&nbsp;Bengkulu
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;65
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="course-item">
            <img src="{{asset('frontend/img/course-3.jpg') }}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Speaking IELTS</h4>
                <p class="price">Rp.450.000.00</p>
              </div>

              <h3><a href="course-details.html">Dasar Speaking Pada Ielts (Daring)</a></h3>
              <p>Mempelajari tips dan trick speaking dalam ielts</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="{{asset('frontend/img/trainers/trainer-1.jpg') }}" class="img-fluid" alt="">
                  <span>Antonio</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="fa fa-map-marker"></i>&nbsp;Bengkulu
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;65
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

      </div>

    </div>
  </section><!-- End Popular Courses Section -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers" style="padding:60px 0px 0px 0px !important;">
    <div class="container" data-aos="fade-up">

      <div class="section-title" style="padding-bottom: 20px !important;">
        <h2>TIM LUAR BIASA</h2>
        <p>Siapa tim dibalik zona tutor?</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img class="team img-fluid"  src="{{asset('assets/images/team/hilmi.png') }}" alt="">
            <div class="member-content">
              <h4>Akhyat Hilmi</h4>
              <span>Web Development</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img class="team img-fluid"  src="{{asset('assets/images/team/fasya.png') }}" alt="">
            <div class="member-content">
              <h4>Arina Makarimal Fasya</h4>
              <span>Marketing</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img class="team img-fluid"  src="{{asset('assets/images/team/wildan.png') }}" alt="">
            <div class="member-content">
              <h4>Wildan Pratama</h4>
              <span>Marketing</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img class="team img-fluid"  src="{{asset('assets/images/team/aziz.png') }}" alt="">
            <div class="member-content">
              <h4>Safroni Aziz Suprianto</h4>
              <span>Marketing</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Trainers Section -->

@endsection
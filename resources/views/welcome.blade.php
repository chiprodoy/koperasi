@extends('layouts.impact.index')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Kembangkan Bisnis Anda <span>Bersama Kami</span></h2>
          <p>Dengan memenuhi regulasi pemerintah indonesia dan standar halal dunia</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          {{-- <img src="{{asset('theme/impact/assets/img/hero.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100"> --}}
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">
                <div class="col-xl-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <h4 class="title"><a href="#">Pencarian Produk Halal</a></h4>

                        <form action="" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-12 input-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama produk" required />
                                    <button class="btn btn-info" type="button" id="button-addon2">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Icon Box -->
                </div>
            </div>
        </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Profil LPPOM MUI SUMSEL</h2>
          {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>{{$contentSejarah->title}}</h3>
            {{-- <img src="{{asset('theme/impact/assets/img/logo.png')}}" class="img-fluid rounded-4 mb-4" alt=""> --}}
           <p style="text-align: justify"> {{ Str::words(strip_tags($contentSejarah->description),80) }} <a href='#'>Selengkapnya</a></p>
        </div>
          <div class="col-lg-6">
            <div class="borderbottom ps-0 ps-lg-5">
              <ul>
                <li><a href='#'><i class="bi bi-check-circle-fill"></i> Visi & Misi</a></li>
                <li><a href='#'><i class="bi bi-check-circle-fill"></i> Nilai - Nilai</a></li>
                <li><a href='#'><i class="bi bi-check-circle-fill"></i> Struktur Organisasi</a></li>

              </ul>

              <div class="position-relative mt-4">
                <img src="{{asset('theme/impact/assets/img/logo.png')}}" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact//img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('theme/impact/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

     <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Prosedur & Regulasi</h2>
          {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> --}}
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            @foreach ($contentProsedurRegulasi as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative">
                    <h3>{{ $item->title}}</h3>
                    <p>{{ $item->description}}</p>
                    <a href="{{ route('post.show',$item->slug) }}" class="readmore stretched-link">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->
            @endforeach


          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <h3>Regulasi LPPOM MUI</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>Prosedur Pasar Indonesia</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>Pendaftaran Sertifikat Halal</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>Prosedur Pasar Luar Negri</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>Prosedur Keluhan & Banding</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Berita Terbaru</h2>
          </div>

          <div class="row gy-4">

            <div class="col-xl-4 col-md-6">
                @foreach ($contentBerita as $item)
                    <article>

                        <div class="post-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>
                        @foreach ($item->categories as $cat)
                            <p class="post-category">{{ $cat->name}}</p>
                        @endforeach

                        <h2 class="title">
                        <a href="blog-details.html">{{ $item->title }}</a>
                        </h2>

                        <div class="d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                            <time datetime="{{ $item->created_at}}">{{ $item->created_at}}</time>
                            </p>
                        </div>
                        </div>

                    </article>
                @endforeach

            </div><!-- End post list item -->
          </div><!-- End recent posts list -->

        </div>
      </section><!-- End Recent Blog Posts Section -->

       <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num">4.</span>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num">5.</span>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

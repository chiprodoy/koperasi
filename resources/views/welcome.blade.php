<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
     <head>
          <meta charset="UTF-8" />
          <meta
               name="description"
               content="Website PA'KEPO : payo jadi keluargo polisi"
          />
          <meta
               name="viewport"
               content="width=device-width, initial-scale=1.0"
          />
          <meta property="og:title" content="PA'KEPO | Home" />
          <meta property="og:type" content="Government Website" />
          <meta name="theme-color" content="#0A64A4" />

          <title>PA'KEPO | Home</title>

          <link href="{{asset('dist/output.css')}}" rel="stylesheet" />
          <link rel="icon" href="{{asset('img/favicon.png')}}" />

          <link
               rel="stylesheet"
               href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
               integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
               crossorigin="anonymous"
               referrerpolicy="no-referrer"
          />

          <link
               rel="stylesheet"
               href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
               integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
               crossorigin="anonymous"
               referrerpolicy="no-referrer"
          />
     </head>

     <body>
          <!-- Navbar -->
          <header
               class="sticky top-0 bg-primary/50 backdrop-blur-md -mt-24 w-full z-10 px-5 lg:px-24"
          >
               <div class="container mx-auto">
                    <nav class="flex flex-stretch items-center py-3">
                         <div class="w-56 flex items-center">
                              <img src="{{asset('img/brand.png')}}" alt="PA'KEPO Brand" />
                              <span
                                   class="inline-block ml-3 font-bold text-white"
                              >
                                   PA'KEPO
                              </span>
                         </div>

                         <div class="w-full"></div>

                         <div class="w-auto">
                              <ul
                                   class="fixed bg-white inset-0 flex-col invisible items-center justify-center opacity-0 md:visible md:flex-row md:bg-transparent md:relative md:opacity-100 md:flex"
                              >
                                   <li class="mx-5 py-6 md:py-0">
                                        <a href="#home" class="text-slate-100"
                                             >Beranda</a
                                        >
                                   </li>

                                   <li class="mx-5 py-6 md:py-0">
                                        <a
                                             href="#feature"
                                             class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                             >Fitur</a
                                        >
                                   </li>

                                   <li class="mx-5 py-6 md:py-0">
                                        <a
                                             href="#download"
                                             class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                             >Download</a
                                        >
                                   </li>

                                   <li class="mx-5 py-6 md:py-0">
                                        <a
                                             href="#contact"
                                             class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                             >Kontak</a
                                        >
                                   </li>
                              </ul>
                         </div>

                         <div class="w-auto">
                              <ul class="flex items-center">
                                   <li class="ml-6 block md:hidden">
                                        <button
                                             class="menu-toggler relative flex items-center justify-center w-8 h-8 text-black hover:text-white focus:outline-none"
                                             id="burger_menu"
                                             title="burger menu"
                                        >
                                             <img
                                                  src="{{asset('img/burger_menu.svg')}}"
                                                  alt="burger menu"
                                             />
                                        </button>
                                   </li>
                              </ul>
                         </div>
                    </nav>
               </div>
          </header>
          <!-- End Navbar -->

          <!-- Mobile Navbar -->
          <div
               class="fixed z-50 inset-0 bg-gray-800 bg-opacity-90 transition-opacity px-5 lg:px-24 hidden md:invisible"
               id="mobile-menu"
          >
               <div class="container mx-auto">
                    <nav class="flex flex-stretch items-center py-3">
                         <div class="w-56 flex items-center">
                              <img src="img/brand.png" alt="PA'KEPO Brand" />
                              <span
                                   class="inline-block ml-3 font-bold text-white"
                              >
                                   PA'KEPO
                              </span>
                         </div>

                         <div class="w-full"></div>

                         <div class="w-auto">
                              <ul class="flex items-center">
                                   <li class="ml-6 block">
                                        <button
                                             class="menu-close relative flex items-center justify-center w-8 h-8"
                                             id="burger_close"
                                             title="burger close"
                                        >
                                             <img
                                                  src="{{asset('img/burger_close.svg')}}"
                                                  alt="burger close"
                                             />
                                        </button>
                                   </li>
                              </ul>
                         </div>
                    </nav>
               </div>

               <div class="w-auto">
                    <ul class="flex flex-col items-center justify-center">
                         <li class="items-center mx-5 py-6">
                              <a href="#home" class="text-slate-100">Beranda</a>
                         </li>

                         <li class="mx-5 py-6 md:py-0">
                              <a
                                   href="#feature"
                                   class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                   >Fitur</a
                              >
                         </li>

                         <li class="mx-5 py-6 md:py-0">
                              <a
                                   href="#download"
                                   class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                   >Download</a
                              >
                         </li>

                         <li class="mx-5 py-6 md:py-0">
                              <a
                                   href="#contact"
                                   class="text-slate-300 transition duration-300 ease-in-out hover:text-slate-100"
                                   >Kontak</a
                              >
                         </li>
                    </ul>
               </div>
          </div>
          <!-- End Mobile Navbar -->

          <!-- Hero -->
          <div
               class="hero w-full bg-primary px-5 lg:px-24 lg:py-12 bg-cover"
               style="background-image: url('{{asset('img/bg_hero.webp')}}')"
               id="home"
          >
               <div class="container mx-auto text-white">
                    <div class="flex flex-col md:flex-row items-center py-24">
                         <div class="w-full flex justify-center">
                              <img
                                   src="{{asset('img/hero.png')}}"
                                   class="w-3/4"
                                   alt="Logo PA'KEPO"
                              />
                         </div>

                         <div class="w-full text-center md:text-left lg:pr-8">
                              <h1 class="font-bold text-md md:text-lg">
                                   Dapatkan Semua Yang Kamu Butuh di PA’KEPO
                              </h1>

                              <p
                                   class="text-xs md:text-sm font-light mt-2 mb-8"
                              >
                                   Informasi pendaftaran, gallery, berita, forum
                                   tanya jawab, dan masih banyak lagi, download
                                   sekarang
                              </p>

                              <div class="flex md:justify-start justify-center">
                                   <a
                                        href="#feature"
                                        class="border-2 border-blue-50 px-2 lg:px-6 py-3 text-slate-100 rounded-lg transition duration-300 ease-in-out hover:border-yellow-400 hover:text-yellow-400 hover:shadow-xl inline-block mr-4"
                                   >
                                        Lebih Lanjut
                                   </a>

                                   <a
                                        href="#"
                                        target="_blank"
                                        class="inline-block transition duration-300 ease-in-out hover:shadow-xl"
                                   >
                                        <img
                                             src="{{asset('img/btn_download.png')}}"
                                             alt="download"
                                        />
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- End Hero -->

          <!-- Feature -->
          <div class="w-full bg-primary" id="feature">
               <div
                    class="rounded-t-3xl bg-slate-100 container mx-auto px-5 lg:px-24"
               >
                    <div class="flex flex-col md:flex-row pt-12 lg:pt-24">
                         <div class="w-full">
                              <h1
                                   class="text-primary text-sm md:text-md font-semibold"
                              >
                                   Fitur Aplikasi PA'KEPO
                              </h1>

                              <p
                                   class="text-gray-800 text-xs md:text-sm font-light"
                              >
                                   Dapatkan semua fitur dan informasi lengkap di
                                   PA'KEPO
                              </p>
                         </div>
                    </div>

                    <div
                         class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 mt-14"
                    >
                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i
                                        class="inline"
                                        data-feather="book-open"
                                   ></i>
                              </div>

                              <span class="block my-2"> Informasi Diktuk </span>
                         </div>

                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i class="inline" data-feather="monitor"></i>
                              </div>

                              <span class="block my-2"> Media KEPO </span>
                         </div>

                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i class="inline" data-feather="image"></i>
                              </div>

                              <span class="block my-2"> Gallery KEPO </span>
                         </div>

                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i
                                        class="inline"
                                        data-feather="message-square"
                                   ></i>
                              </div>

                              <span class="block my-2"> Forum KEPO </span>
                         </div>

                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i
                                        class="inline"
                                        data-feather="message-circle"
                                   ></i>
                              </div>

                              <span class="block my-2"> Bantuan </span>
                         </div>

                         <div class="text-center">
                              <div
                                   class="bg-primary inline-block p-6 rounded-full text-white"
                              >
                                   <i class="inline" data-feather="info"></i>
                              </div>

                              <span class="block my-2"> Saran </span>
                         </div>
                    </div>
               </div>
          </div>
          <!-- End Feature -->

          <!-- Feature -->
          <div class="w-full bg-slate-100">
               <div class="rounded-t-3xl container mx-auto px-5 lg:px-24">
                    <div class="flex flex-col md:flex-row pt-12 lg:pt-32">
                         <div class="w-full text-center">
                              <h1
                                   class="text-primary text-sm md:text-md font-semibold"
                              >
                                   Informasi Pendidikan Pembentukan
                              </h1>

                              <p
                                   class="text-gray-800 text-xs md:text-sm font-light"
                              >
                                   Semua informasi yang anda butuhkan tersedia,
                                   pengumuman, persyaratan, pendaftaran, sampai
                                   timeline
                              </p>
                         </div>
                    </div>

                    <div class="flex lg:flex-row flex-col mt-14 gap-6">
                         <div
                              class="bg-white flex w-full lg:w-1/3 p-4 rounded-lg"
                         >
                              <img
                                   src="{{asset('img/feature/akpol.png')}}"
                                   alt="akpol"
                                   class="inline-block w-1/3"
                              />

                              <div
                                   class="inline-block w-2/3 align-middle ml-4 my-auto"
                              >
                                   <span class="my-2 font-bold"> AKPOL </span>
                                   <span class="block my-2 text-slate-600">
                                        Akademi Kepolisian
                                   </span>
                              </div>
                         </div>

                         <div
                              class="bg-white flex w-full lg:w-1/3 p-4 rounded-lg"
                         >
                              <img
                                   src="{{asset('img/feature/sipss.png')}}"
                                   alt="sipss"
                                   class="inline-block w-1/3"
                              />

                              <div
                                   class="inline-block w-2/3 align-middle ml-4 my-auto"
                              >
                                   <span class="my-2 font-bold"> SIPSS </span>
                                   <span class="block my-2 text-slate-600">
                                        Sekolah Inspektur Polisi Sumber Sarjana
                                   </span>
                              </div>
                         </div>

                         <div
                              class="bg-white flex w-full lg:w-1/3 p-4 rounded-lg"
                         >
                              <img
                                   src="{{asset('img/feature/tamtama.png')}}"
                                   alt="tamtama"
                                   class="inline-block w-1/3"
                              />

                              <div
                                   class="inline-block w-2/3 align-middle ml-4 my-auto"
                              >
                                   <span class="my-2 font-bold"> TAMTAMA </span>
                                   <span class="block my-2 text-slate-600">
                                        Pangkat ketentaraan/kepolisian pertama
                                   </span>
                              </div>
                         </div>
                    </div>

                    <div
                         class="flex flex-col lg:flex-row justify-center mt-14 gap-6"
                    >
                         <div
                              class="bg-white flex w-full lg:w-1/3 p-4 rounded-lg"
                         >
                              <img
                                   src="{{asset('img/feature/cpns.png')}}"
                                   alt="cpns polri"
                                   class="inline-block w-1/3"
                              />

                              <div
                                   class="inline-block w-2/3 align-middle ml-4 my-auto"
                              >
                                   <span class="my-2 font-bold">
                                        CPNS POLRI
                                   </span>
                                   <span class="block my-2 text-slate-600">
                                        Bagian integral dari Kepolisian NKRI
                                   </span>
                              </div>
                         </div>

                         <div
                              class="bg-white flex w-full lg:w-1/3 p-4 rounded-lg"
                         >
                              <img
                                   src="{{asset('img/feature/bintara.png')}}"
                                   alt="bintara"
                                   class="inline-block w-1/3"
                              />

                              <div
                                   class="inline-block w-2/3 align-middle ml-4 my-auto"
                              >
                                   <span class="my-2 font-bold"> BINTARA </span>
                                   <span class="block my-2 text-slate-600">
                                        Tulang punggung kesatuan di militer
                                   </span>
                              </div>
                         </div>
                    </div>

                    <hr class="mt-32" />
               </div>
          </div>
          <!-- End Feature -->

          <!-- Download -->
          <div class="blog w-full bg-slate-100 lg:py-32 pb-12" id="download">
               <div class="container mx-auto px-5 lg:px-24">
                    <div
                         class="bg-primary rounded-xl text-white p-8 lg:p-28 bg-cover"
                         style="background-image: url('{{asset('img/bg_download.png')}}')"
                    >
                         <h1 class="font-bold text-center text-md md:text-lg">
                              Download Aplikasi
                              <br />
                              PA'KEPO Sekarang!
                         </h1>

                         <p
                              class="text-xs md:text-sm font-light mt-2 mb-8 lg:px-48 text-center"
                         >
                              Semua informasi mulai dari pendaftaran, gallery,
                              berita, hingga forum tanya jawab, tersedia untuk
                              kamu, download sekarang
                         </p>

                         <div class="flex mx-auto justify-center">
                              <a
                                   href="#home"
                                   class="border-2 border-blue-50 px-4 lg:px-8 py-3 text-slate-100 rounded-lg transition duration-300 ease-in-out hover:border-yellow-400 hover:text-yellow-400 hover:shadow-xl inline-block mr-4"
                              >
                                   Beranda
                              </a>

                              <a
                                   href="#"
                                   target="_blank"
                                   class="inline-block transition duration-300 ease-in-out hover:shadow-xl"
                              >
                                   <img
                                        src="{{asset('img/btn_download.png')}}"
                                        alt="download"
                                   />
                              </a>
                         </div>
                    </div>
               </div>
          </div>
          <!-- End Download -->

          <!-- Contact -->
          <div class="w-full bg-primary pb-24" id="contact">
               <div class="rounded-t-3xl container mx-auto px-5 lg:px-24">
                    <div class="flex flex-col md:flex-row pt-12 lg:pt-24">
                         <div class="w-full text-center">
                              <h1
                                   class="text-white text-sm md:text-md font-semibold"
                              >
                                   Sosial Media
                              </h1>

                              <p
                                   class="text-slate-100 text-xs md:text-sm font-light"
                              >
                                   Ikuti juga sosial media KEPO
                              </p>
                         </div>
                    </div>

                    <div
                         class="grid grid-cols-2 gap-8 lg:gap-12 md:grid-cols-4 lg:grid-cols-6 mt-14"
                    >
                         <a
                              href="https://www.polri.go.id"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/web.png')}}"
                                        alt="website"
                                   />
                                   <p class="block mt-2 text-center">Website</p>
                              </div>
                         </a>

                         <a
                              href="#"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/twitter.png')}}"
                                        alt="twitter"
                                   />
                                   <p class="block mt-2 text-center">Twitter</p>
                              </div>
                         </a>

                         <a
                              href="https://instagram.com/sdmpoldasumsel"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/instagram.png')}}"
                                        alt="instagram"
                                   />
                                   <p class="block mt-2 text-center">
                                        Instagram
                                   </p>
                              </div>
                         </a>

                         <a
                              href="#"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/facebook.png')}}"
                                        alt="facebook"
                                   />
                                   <p class="block mt-2 text-center">
                                        Facebook
                                   </p>
                              </div>
                         </a>

                         <a
                              href="https://youtube.com/@birosdmpoldasumsel8051"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/youtube.png')}}"
                                        alt="youtube"
                                   />
                                   <p class="block mt-2 text-center">Youtube</p>
                              </div>
                         </a>

                         <a
                              href="#"
                              target="_blank"
                              class="text-slate-800 hover:text-primary transition duration-300"
                         >
                              <div
                                   class="bg-slate-100 p-6 rounded-md grid justify-center"
                              >
                                   <img
                                        src="{{asset('img/socmed/tiktok.png')}}"
                                        alt="tiktok"
                                   />
                                   <p class="block mt-2 text-center">Tiktok</p>
                              </div>
                         </a>
                    </div>
               </div>
          </div>
          <!-- End Contact -->

          <!-- Footer -->
          <div class="blog w-full bg-secondary text-white py-6">
               <p class="text-center">
                    Program Kerja Sama
                    <a
                         href="https://www.binadarma.ac.id"
                         target="_blank"
                         class="font-bold hover:text-yellow-400 transition duration-300"
                    >
                         Universitas Bina Darma
                    </a>
               </p>
          </div>
          <!-- End Footer -->

          <!-- Web Resource -->
          <script
               src="https://code.jquery.com/jquery-3.6.0.min.js"
               integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
               crossorigin="anonymous"
          ></script>

          <script
               src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"
               integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g=="
               crossorigin="anonymous"
               referrerpolicy="no-referrer"
          ></script>

          <script
               src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
               integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
               crossorigin="anonymous"
               referrerpolicy="no-referrer"
          ></script>

          <script>
               const btn = document.querySelector(".menu-toggler");
               const btn2 = document.querySelector(".menu-close");
               const menu = document.querySelector("#mobile-menu");

               btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
               });

               btn2.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
               });
          </script>

          <script>
               $(".owl-carousel").owlCarousel({
                    loop: true,
                    margin: 20,
                    autoplay: true,
                    stagePadding: 50,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                         0: {
                              items: 1,
                         },
                         600: {
                              items: 2,
                         },
                         1000: {
                              items: 3,
                         },
                    },
               });

               const btn_owl = document.querySelectorAll(".owl-dot");

               for (i = 0; i < btn_owl.length; ++i) {
                    btn_owl[i].title = "button detail";
               }
          </script>

          <script>
               feather.replace();
          </script>
     </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manish Adhikari</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav class="nav-menu">
            <ul>
                <li><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                {{-- <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li> --}}
                <li><a href="#project"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
                {{-- <li><a href="#exprience"><i class="bx bx-server"></i> <span>exprience</span></a></li> --}}
                <li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    {{-- <style>
        #hero{
            background: url('{{ asset('{{ $asset('uploads/banner/' . $banner->image) }}');
        }
    </style> --}}
    <section id="hero" class="d-flex flex-column justify-content-center"
        style="background: url('{{ asset('uploads/banner/' . @$banner->image) }}')top right no-repeat;">

        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h2>It's Me</h2>
            <h1>Manish Adhikari</h1>
            <p>I'm <span class="typed" data-typed-items="Web application developer, Ethical Hacker, student"></span>
            </p>
            <div class="social-links">
                <a href={{ $settings['twitter'] }} target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href={{ $settings['facebook'] }} target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href={{ $settings['instagram'] }} target="_blank" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href={{ $settings['medium'] }} target="_blank" class="medium"><i class="bx bxl-medium"></i></a>
                <a href={{ $settings['hackerone'] }} target="_blank" class="medium"><i class="bx bxl-hackerone"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <div id="about" class="paddsection">
            <div class="container">
                <div class="section-title">
                    <h2>About</h2>
                </div>
                <div class="row justify-content-between">

                    <div class="col-lg-4 ">
                        <div class="div-img-bg">
                            <div class="about-img">
                                <img src={{ asset('uploads/about/' . @$about->image) }} class="img-responsive"
                                    alt="me">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-descr">

                            <p class="p-heading">LET’S
                                INTRODUCE ABOUT
                                MYSELF </p>
                            <p class="separator">{{ $about->description }}</p>

                        </div>

                    </div>
                </div>
            </div>
        </div><!-- End About Section -->


        </div>
        </section><!-- End About Section -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="row skills-content">
                    @foreach ($skills as $skill)
                        <div class="col-lg-6">

                            <div class="progress">
                                <span class="skill">{{ $skill->title }} <i
                                        class="val">{{ $skill->level }}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow={{ $skill->level }}
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    @endforeach


                </div>

            </div>
        </section><!-- End Skills Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="project" class="project section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Projects</h2>
                </div>

                <div class="row project-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ $project->link }}" target="_blank">
                                    <img src="{{ asset('uploads/project/' . @$project->image) }}" class="img-fluid"
                                        alt="">
                                </a>
                                <div class="portfolio-info">
                                    <a href=""></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><b>{{ $settings['location'] }}</b></p>

                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $settings['email'] }}</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>{{ $settings['contact'] }}</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        @include('common.flash-message')
                        <form action="{{ route('contact.save') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" name="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" name="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Manish Adhikari</h3>
            <p></p>
            <div class="social-links">
                <a href={{ $settings['twitter'] }} target="_blank" class="twitter"><i
                        class="bx bxl-twitter"></i></a>
                <a href={{ $settings['facebook'] }} target="_blank" class="facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href={{ $settings['instagram'] }} target="_blank" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href={{ $settings['medium'] }} target="_blank" class="medium"><i class="bx bxl-medium"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright@2023 <strong><span>Manish Adhikari</span></strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

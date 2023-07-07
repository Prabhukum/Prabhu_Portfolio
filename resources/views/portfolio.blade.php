<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prabhu's_Portfolio</title>
    {{-- bootstrap --}}
    <link href="{{asset('assets/bootstrap-5.3.0-dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>


<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-nav navbarScroll">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Prabhukumar J</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Projects</a>
                    </li>
                    <li class="nav-item button">
                        {{-- <a class="nav-link" href="#contact">Contact</a> --}}
                        <a class="nav-link" href="{{asset('assets/Prabhukumar_J.pdf')}}" download><strong> Download
                                CV</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                    <h2 class="hero_title">Hi, it's me Prabhu</h2>
                    <p class="hero_desc">I am a professional Full-Stack Developer in India.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="animate__animated animate__bounce text-center">About Me</h1>
            {{-- <hr style="color:black; border:12px"> --}}
            <div class="row mt-4">
                <div class="col-lg-6">
                    <img src="assets/images/Untitled.png" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-6">
                    <p> <strong>Hello</strong> there! My name is Prabhukumar J, and I am a passionate and dedicated
                        SOFTWARE ENGINEER. Ever since I started my career as a junior software developer at <a
                            href="https://stellaripl.com/" style="text-decoration: none; color:black; font-weight:500"
                            target="_blank"> <strong> Stellar Innovations PVT LTD.</strong></a> in 2022, I have embarked
                        on an exciting journey of continuous learning and growth.

                        From the very beginning, I was captivated by the world of full-stack development. I immersed
                        myself in the Laravel-PHP framework,
                        <section class="cv">
                            <h3 class="cv-title text-center">Education</h3>

                            <ul class="cv-txt text-center">
                                    <div>
                                        <span>2015-2019</span>
                                        <p>
                                            Bachelor of Engineering in Mechanical Engineering, St.Peter's University
                                            <br />
                                            of Avadi, Annanur.
                                        </p>
                                    </div>

                                    <div>
                                        <span>2012-2014</span>
                                        <p>High School Diploma, Vethathiri Maharishi Higher Secondary School.</p>
                                    </div>
                            </ul>
                        </section>

                        and it has become my foundation for creating robust and
                        scalable web applications. The power and flexibility of Laravel combined with the elegance of
                        PHP have allowed me to bring my ideas to life and provide seamless user experiences.

                        As a developer, I believe in the importance of staying ahead in the ever-evolving tech industry.
                        I constantly upskill myself,
                        Throughout my journey, I have had the opportunity to work on a variety of projects, both
                        independently and as part of a collaborative team.

                        <div class="row mt-2">
                            <div class="col-lg-6 p-2">
                              <ul>
                                <li><i class="bi bi-balloon-fill"></i> <strong>Birthday:</strong> <span>12 mar 1996</span></li>
                                <li><i class="bi bi-globe"></i> <strong>Website:</strong> <span>www.dream-dev.in</span></li>
                                <li><i class="bi bi-telephone-fill"></i> <strong>Phone:</strong> <span>+91 7418407250</span></li>
                                <li><i class="bi bi-geo-alt-fill"></i> <strong>City:</strong> <span>TamilNadu, India</span></li>
                              </ul>
                            </div>
                            <div class="col-lg-6 mb-2">
                              <ul>
                                <li><i class="bi bi-calendar2-week-fill"></i> <strong>Age:</strong> <span>27</span></li>
                                <li><i class="bi bi-mortarboard-fill"></i> <strong>Degree:</strong> <span>BE MECH</span></li>
                                <li><i class="bi bi-envelope-at-fill"></i> <strong>Email:</strong> <span>nelsonprabhu07088@gmail.com</span></li>
                                <li><i class="bi bi-briefcase-fill"></i> <strong>Freelance:</strong> <span>Available</span></li>
                              </ul>
                            </div>
                          </div>
                         I am a firm believer in the power of effective
                        communication and collaboration, which allows me to work seamlessly with cross-functional teams
                        and deliver exceptional outcomes.

                        I am excited to continue my journey as a software developer, embracing new challenges and
                        opportunities along the way. If you're looking for a dedicated full-stack developer with
                        expertise in Laravel-PHP, I would love to connect and discuss how I can contribute to your
                        projects.

                        Thank you for taking the time to get to know me. I look forward to connecting with you soon!
                    </p>
                    <div class="row mt-3">
                        {{-- <div class="col-md-12">
                            <ul>
                                <li>Name: PRABHUKUMAR J</li>
                                <li>Age: 28</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <ul>
                                <li>Name: David Parker</li>
                                <li>Age: 28</li>
                                <li>Occupation: Web Developer</li>

                            </ul>
                        </div>
                    </div> --}}
                        {{-- <div class="row mt-3">
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </p>
                    </div> --}}
                    </div>
                </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="container  mt-3">
            <h1 class="animate__animated animate__bounce text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3">Custom Web Development</h4>
                            <p class="card-text mt-3"> I provide tailored web development solutions to meet your
                                specific requirements. By leveraging the power of Laravel-PHP, I can create custom
                                websites from scratch, ensuring they are scalable, secure, and optimized for
                                performance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-layer-group'></i>
                            <h4 class="card-title mt-3">Responsive Design</h4>
                            <p class="card-text mt-3">I believe in the importance of responsive design. I ensure that
                                the websites I develop are visually appealing and seamlessly adapt to different devices
                                and screen sizes, providing an optimal user experience across platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fa-check-circle'></i>
                            <h4 class="card-title mt-3">E-commerce Development</h4>
                            <p class="card-text mt-3"> If you are looking to establish an online store, I can assist you
                                in building robust e-commerce platforms. From product catalog management and secure
                                payment gateways to inventory management and order tracking, I can create a feature-rich
                                e-commerce solution tailored to your business needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-search'></i>
                            <h4 class="card-title mt-3">Content Management Systems</h4>
                            <p class="card-text mt-3"> I have expertise in developing user-friendly content management
                                systems (CMS) that empower you to manage and update website content effortlessly. With
                                an intuitive interface and powerful functionality, I can create a CMS that streamlines
                                your content publishing process.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-shield-alt'></i>
                            <h4 class="card-title mt-3">Website Maintenance and Support</h4>
                            <p class="card-text mt-3">My commitment to client satisfaction extends beyond the initial
                                development phase. I offer ongoing website maintenance and support services to ensure
                                your website remains up to date, secure, and operates smoothly.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card shadow servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-wrench'></i>
                            <h4 class="card-title mt-3">API Integration</h4>
                            <p class="card-text mt-3"> I can seamlessly integrate third-party APIs to enhance the
                                functionality of your website. Whether it's integrating payment gateways, social media
                                platforms, or other external services, I ensure smooth data exchange and optimal
                                performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- project section-->

    <section id="portfolio">
        <div class="container mt-3">
            <h1 class="animate__animated animate__bounce text-center">Projects</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        {{-- <img class="card-img-top" src="assets/images/PLX-PartnerBenefits.png" alt="Card image"
                            style="width:100%" height="300px"> --}}
                        <div class="card-body">
                            <h4 class="card-title">Order Management System</h4>
                            <p class="card-text">Developed a powerful search feature for Proplogix, leveraging advanced
                                algorithms and data processing techniques to provide users with accurate and real-time
                                search results, enhancing the overall usability and efficiency of the platform.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        {{-- <img class="card-img-top"
                            src="assets/images/sri-rama-chicken-centre-gannavaram-vijayawada-fried-chicken-restaurants-1lzsr9mpio.png"
                            height="300px" alt="Card image" style="width:100%"> --}}
                        <div class="card-body">
                            <h4 class="card-title">Food Order Management</h4>
                            <p class="card-text">Created a dynamic website for ABC Chicken Center, featuring a
                                mouth-watering menu, online ordering system, and a responsive design to ensure a
                                delightful user experience. Implemented a robust backend to manage orders and deliveries
                                efficiently.</p>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card portfolioContent">
                        {{-- <img class="card-img-top" src="assets/images/pexels-yan-krukau-8866823.jpg"
                            alt="Card image" style="width:100%" height="300px"> --}}
                        <div class="card-body">
                            <h4 class="card-title">Admin Management System</h4>
                            <p class="card-text">Developed a modern and user-friendly website for Men's Look Home Salon,
                                offering a seamless online booking system, showcasing their services, and providing an
                                interactive gallery to highlight their expertise in men's grooming and hairstyling.</p>
                            <div class="text-center">
                                <a href="#"  class="btn btn-success">Get
                                    Page</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- certificate section --}}

    <div class="col-12  d-none d-lg-block " style="padding: 9%">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    {{-- <a href="https://certificates.ccbp.in/intensive/responsive-website?id=NO6ANEEF27" target="_blank"> --}}
                    <img class="card-img-top" src="{{asset('assets/Certificates/NO6ANEEF27.jpg')}}" alt="Card image"
                        style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
                <div class="carousel-item">
                    {{-- <a href="https://certificates.ccbp.in/intensive/static-website?id=7RBZSC3JPC" target="_blank"> --}}
                    <img class="card-img-top" src="{{asset('assets/Certificates/7RBZSC3JPC.jpg')}}" alt="Card image"
                        style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
                <div class="carousel-item">
                    {{-- <a href="https://certificates.ccbp.in/intensive/dynamic-web-application?id=RABR5S7CP9" target="_blank"> --}}
                    <img class="card-img-top" src="{{asset('assets/Certificates/RABR5S7CP9.jpg')}}" alt="Card image"
                        style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
                <div class="carousel-item">
                    {{-- <a href="https://certificates.ccbp.in/intensive/developer-foundations?id=EUDM4IXR45" target="_blank"> --}}
                    <img class="card-img-top" src="{{asset('assets/Certificates/EUDM4IXR45.jpg')}}" alt="Card image"
                        style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
                <div class="carousel-item">
                    {{-- <a href="https://certificates.ccbp.in/intensive/javascript-essentials?id=0OLX1QYAOJ" target="_blank"> --}}
                    <img class="card-img-top" src="{{asset('assets/Certificates/0OLX1QYAOJ.jpg')}}" alt="Card image"
                        style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
                <div class="carousel-item">
                    {{-- <a href="https://certificates.ccbp.in/intensive/responsive-website?id=SHWJT9BQR7" target="_blank"> --}}
                    <img class="card-img-top"
                        src="{{asset('assets/Certificates/UC-13babca4-c495-4d8a-8edf-23e54f5c0d1f.jpg')}}"
                        alt="Card image" style="width:100%" height="100%">
                    {{-- </a> --}}
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>

    </div>
    </div>


    {{-- sm-certificate section --}}
    <div class="d-lg-none">
        <section id="certificates">
            <div class="container mt-3">
                <h1 class="animate__animated animate__bounce text-center">Certificate</h1>
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/responsive-website?id=NO6ANEEF27"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/NO6ANEEF27.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/dynamic-web-application?id=RABR5S7CP9"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/RABR5S7CP9.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/static-website?id=7RBZSC3JPC"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/7RBZSC3JPC.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/developer-foundations?id=EUDM4IXR45"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/EUDM4IXR45.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/javascript-essentials?id=0OLX1QYAOJ"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/0OLX1QYAOJ.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/responsive-website?id=SHWJT9BQR7"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/SHWJT9BQR7.jpg')}}" alt="Card image"
                                    style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://www.udemy.com/certificate/UC-13babca4-c495-4d8a-8edf-23e54f5c0d1f/"
                                target="_blank"><img class="card-img-top" src="{{asset('assets/Certificates/.jpg')}}"
                                    alt="Card image" style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/responsive-website?id=SHWJT9BQR7"
                                target="_blank"><img class="card-img-top"
                                    src="{{asset('assets/Certificates/UC-13babca4-c495-4d8a-8edf-23e54f5c0d1f.jpg')}}"
                                    alt="Card image" style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div class=" portfolioContent">
                            <a href="https://certificates.ccbp.in/intensive/responsive-website?id=SHWJT9BQR7"
                                target="_blank"><img class="card-img-top" src="{{asset('assets/Certificates/.jpg')}}"
                                    alt="Card image" style="width:100%" height="300px"> </a>
                            {{-- <div class="">
                            <h4 class="card-title">Order Management System</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-success">Get Page</a>
                            </div>
                        </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    {{-- sm-certificate section ends--}}



    {{-- <div class="row">
        <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
                <img class="card-img-top" src="assets/images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Messaging Service</h4>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-success">Link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
                <img class="card-img-top" src="assets/images/portfolioImage1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Twitter Clone</h4>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-success">Link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-4">
            <div class="card portfolioContent">
                <img class="card-img-top" src="assets/images/portfolioImage4.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Blog App</h4>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-success">Link</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-1 contactContent">
            <h1 class="animate__animated animate__bounce text-center">Contact Me</h1>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div style="overflow:hidden;resize:none;max-width:100%;width:400px;height:300px;">
                        <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;">
                            <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/place?q=Kalaignar+Nagar,+Thiruttani,+Tamil+Nadu,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                        </div>
                        <a class="embed-map-html" href="https://www.bootstrapskins.com/themes"
                            id="get-data-for-map">premium bootstrap themes</a>
                        <style>
                            #canvas-for-googlemap img.text-marker {
                                max-width: none !important;
                                background: none !important;
                            }

                            img {
                                max-width: none
                            }

                        </style>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <!-- form fields -->
                    <form id="myForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" name="subject" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="project_details"
                                placeholder="Project Details"></textarea>
                        </div>
                        <button type="submit" id="button" class="btn btn-success mt-3">Send</button>
                 </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.linkedin.com/in/nelson-prabhu-86b988249" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                {{-- <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a> --}}
            </div>
        </div>
    </footer>
    {{-- @extends('footer') --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
{{-- <script src="{{asset('assets/bootstrap-5.3.0-dist/js/jquery.min.js')}}"></script> --}}
{{-- images --}}
<script src="{{asset('assets/images')}}"></script>
<!-- font awesome -->
<script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
<!-- load javascript after loading all html content -->
<script src="{{asset('assets/js/index.js')}}"></script>

{{-- sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- animate.css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script>
    // Add hover effect to portfolio cards
    const portfolioCards = document.querySelectorAll('.portfolioContent');

    portfolioCards.forEach(card => {
        card.addEventListener('mouseover', () => {
            card.classList.add('card-hover');
        });

        card.addEventListener('mouseout', () => {
            card.classList.remove('card-hover');
        });
    });
</script>

<script>
    // SWEETALERT for form submition
     // JavaScript code
    document.addEventListener('DOMContentLoaded', function() {
    // Get the form element and button element
    var myForm = document.getElementById('myForm');
    var sendButton = document.getElementById('button');

    // Add submit event listener to the form
    myForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Perform AJAX request to submit form data
        var formData = new FormData(myForm);
        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/contact/store');
        xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
            // Show SweetAlert on successful response
            Swal.fire(
                'Thank You!',
                'I will Contact You Soon!',
                'success'
            ).then((result) => {
                     window.location.href = "{{route('home') }}";
            });
            } else {
            // Show error message on failed response
            Swal.fire(
                'Error',
                'Something went wrong. Please try again.',
                'error'
            );
            }
        }
        };

        xhr.send(formData);
    });
    });
</script>


</html>

@extends('header')

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
                    {{-- <li class="nav-item button">
                        <a class="nav-link" href="{{asset('assets/PrabhuKumar.pdf')}}" download>Download CV</a>
                    </li> --}}
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
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col-lg-6 card shadow">
                    <img src="assets/images/Untitled.png" class="imageAboutPage" alt="">
                </div>

                <div class="col-lg-6">
                    <p> <strong>Hello</strong> there! My name is Prabhukumar J, and I am a passionate and dedicated
                        SOFTWARE ENGINEER. Ever since I started my career as a junior software developer at <a
                            href="https://stellaripl.com/" style="text-decoration: none; color:black; font-weight:500"
                            target="_blank"> <strong> Stellar Innovations PVT LTD.</strong></a> in 2022, I have embarked
                        on an exciting journey of continuous learning and growth.

                        From the very beginning, I was captivated by the world of full-stack development. I immersed
                        myself in the Laravel-PHP framework, and it has become my foundation for creating robust and
                        scalable web applications. The power and flexibility of Laravel combined with the elegance of
                        PHP have allowed me to bring my ideas to life and provide seamless user experiences.

                        As a developer, I believe in the importance of staying ahead in the ever-evolving tech industry.
                        I constantly upskill myself, dedicating time each day to expand my knowledge and sharpen my
                        skills. This commitment to continuous learning has enabled me to stay at the forefront of
                        industry trends and deliver cutting-edge solutions.

                        Throughout my journey, I have had the opportunity to work on a variety of projects, both
                        independently and as part of a collaborative team. These experiences have honed my ability to
                        understand client requirements, translate them into technical specifications, and deliver
                        high-quality results within deadlines. I am a firm believer in the power of effective
                        communication and collaboration, which allows me to work seamlessly with cross-functional teams
                        and deliver exceptional outcomes.

                        What truly excites me about software development is the ability to create tangible solutions
                        that make a positive impact on people's lives. Whether it's developing intuitive user
                        interfaces, optimizing backend processes, or improving overall system performance, I find
                        fulfillment in leveraging technology to solve real-world problems.

                        In addition to my technical skills, I value creativity, attention to detail, and a strong work
                        ethic. I approach every project with a sense of enthusiasm and determination, striving for
                        excellence in every line of code I write. I am also open to exploring new technologies and
                        frameworks, as I believe that versatility is key to staying adaptable in the ever-changing
                        landscape of software development.

                        When I'm not coding, you can often find me exploring new programming concepts, reading up on the
                        latest industry trends, or engaging in community-driven projects. I am passionate about sharing
                        my knowledge with others and contributing to the growth of the developer community.

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
        <div class="container">
            <h1 class="text-center">Services</h1>
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
            <h1 class="text-center">Projects</h1>
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
                                <a href="#" target="_blank" class="btn btn-success">Get Page</a>
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
                                <a href="#" target="_blank" class="btn btn-success">Get Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>
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
                <div class="col-lg-6">
                    <!-- form fields -->
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Name">
                        <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                        <input type="text" name="subject" class="form-control mt-3" placeholder="Subject">
                        <div class="mb-3 mt-3">
                            <textarea class="form-control" rows="5" id="comment" name="project_details"
                                placeholder="Project Details"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Send</button>
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
                <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/nelson-prabhu-86b988249" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                {{-- <a href="https://www.twitch.tv/" target="_blank"><i class="fab fa-twitch"></i></a> --}}
            </div>
        </div>
    </footer>
    {{-- @extends('footer') --}}

    <script>
        // add class navbarDark on navbar scroll
  const header = document.querySelector('.navbar');
    console.log(header)
    window.onscroll = function() {
        const top = window.scrollY;
        if(top >=100) {
            header.classList.add('navbarDark');
        }
        else {
            header.classList.remove('navbarDark');
        }
    }
    // collapse navbar after click on small devices
    const navLinks = document.querySelectorAll('.nav-item')
    const menuToggle = document.getElementById('navbarSupportedContent')

    navLinks.forEach((l) => {
        l.addEventListener('click', () => { new bootstrap.Collapse(menuToggle).toggle() })
    })
    </script>

</body>

</html>

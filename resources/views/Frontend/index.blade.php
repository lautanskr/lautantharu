<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lautan Tharu - Portfolio</title>

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">



    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/smooth-scrollbar.css">
    <link rel="stylesheet" href="assets/css/lightbox.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>


    <div class="page-loader">
        <div class="bounceball"></div>
    </div>

    <span class="icon-menu">
        <span class="bar"></span>
        <span class="bar"></span>
    </span>

    <div class="global-color">
        <span class="setting-toggle">
            <i class="las la-cog"></i>
        </span>
        <div class="inner">
            <div class="overlay"></div>
            <div class="global-color-option">
                <span class="close-settings">
                    <i class="las la-times"></i>
                </span>
                <h2>Configuration</h2>
                <div class="global-color-option-inner">
                    <p>Colors</p>
                    <div class="color-boxed">
                        <a href="#" class="clr-active" onclick="color1();"></a>
                        <a href="#" onclick="color2();"></a>
                        <a href="#" onclick="color3();"></a>
                        <a href="#" onclick="color4();"></a>
                        <a href="#" onclick="color5();"></a>
                        <a href="#" onclick="color6();"></a>
                        <a href="#" onclick="color7();"></a>
                        <a href="#" onclick="color8();"></a>
                    </div>

                    <p>THREE DIMENSIONAL SHAPES</p>
                    <ul class="themes">
                        <li><a href="home1.html">Earth Lines Sphere</a></li>
                        <li><a href="home2.html">3D Abstract Ball</a></li>
                        <li><a href="home3.html">Water Waves</a></li>
                        <li><a href="home4.html">Liquids Wavy</a></li>
                        <li><a href="home6.html">Solid Color</a></li>
                        <li><a href="home5.html">Simple Strings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="responsive-sidebar-menu">
        <div class="overlay"></div>
        <div class="sidebar-menu-inner">
            <div class="menu-wrap">
                <p>Menu</p>
                <ul class="menu scroll-nav-responsive d-flex">
                    <li>
                        <a class="scroll-to" href="#home">
                            <i class="las la-home"></i> <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#about">
                            <i class="lar la-user"></i> <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#resume">
                            <i class="las la-briefcase"></i> <span>Resume</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#services">
                            <i class="las la-stream"></i> <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#skills">
                            <i class="las la-shapes"></i> <span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#portfolio">
                            <i class="las la-grip-vertical"></i> <span>Portfolios</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#testimonial">
                            <i class="lar la-comment"></i> <span>Testimonial</span>
                        </a>
                    </li>
                    <li>
                        <a class="scroll-to" href="#contact">
                            <i class="las la-envelope"></i> <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="sidebar-social">
                <p>Social</p>
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="#"><i class="lab la-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="lab la-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <ul class="menu scroll-nav d-flex">
        <li>
            <a class="scroll-to" href="#home">
                <span>Home</span> <i class="las la-home"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#about">
                <span>About</span> <i class="lar la-user"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#resume">
                <span>Resume</span> <i class="las la-briefcase"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#services">
                <span>Services</span> <i class="las la-stream"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#skills">
                <span>Skills</span> <i class="las la-shapes"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#portfolio">
                <span>Portfolios</span> <i class="las la-grip-vertical"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#testimonial">
                <span>Testimonial</span> <i class="lar la-comment"></i>
            </a>
        </li>
        <li>
            <a class="scroll-to" href="#contact">
                <span>Contact</span> <i class="las la-envelope"></i>
            </a>
        </li>
    </ul>

    <div class="left-sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-between">
            <img src="assets/images/logo.png" alt="Logo" height="36px" width="128px">
            <span class="designation">Web Designer & Software Developer</span>
        </div>
        <img class="me" src="assets/images/me.jpg" alt="Me">
        <h2 class="email">contact@lautantharu.com</h2>
        <h2 class="address">Base in Nepalgunj, Nepal</h2>
        <p class="copyright">&copy; 2023 Lautan. All Rights Reserved</p>
        <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
            <li>
                <a href="https://twitter.com/TharuLautan"><i class="lab la-twitter"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/lautannn/"><i class="lab la-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/ltn_sukhariya/"><i class="lab la-instagram"></i></a>
            </li>
            <li>
                <a href="https://github.com/lautanskr"><i class="lab la-github"></i></a>
            </li>
        </ul>
        <a href="" class="theme-btn">
            <i class="las la-envelope"></i> Hire Me!
        </a>
    </div>

    <main class="drake-main">
        <div id="smooth-wrapper">
            <div id="smooth-content">

                <div class="left-sidebar">
                    <div class="sidebar-header d-flex align-items-center justify-content-between">
                        <img src="assets/images/logo.png" alt="Logo" hight="36px" width="128px">
                        <span class="designation">Web Designer & Software Developer</span>
                    </div>
                    <img class="me" src="assets/images/me.jpg" alt="Me">
                    <h2 class="email">contact@lautantharu.com</h2>
                    <h2 class="address">Base in Nepalgunj, Nepal</h2>
                    <p class="copyright">&copy; 2023 Lautan. All Rights Reserved</p>
                    <ul class="social-profile d-flex align-items-center flex-wrap justify-content-center">
                        <li>
                            <a href="https://twitter.com/TharuLautan"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/lautannn/"><i class="lab la-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ltn_sukhariya/"><i class="lab la-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/lautanskr"><i class="lab la-github"></i></a>
                        </li>
                    </ul>
                    <a href="#" class="theme-btn">
                        <i class="las la-envelope"></i> Hire Me!
                    </a>
                </div>

                <section class="hero-section page-section scroll-to-page" id="home">

                    <div class="custom-container">
                        <div class="hero-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-home"></i> Introduce
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Hey <span>There!</span>👋 I'm Lautan Tharu</h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">I'm a versatile full stack developer dedicated to delivering comprehensive solutions that encompass both the front-end and back-end realms of web development. With a passion for technology and an insatiable curiosity, I bring together the art of intuitive user interfaces and the science of robust server-side programming to create seamless digital experiences.</p>
                            <a href="#portfolio" 
                                class="go-to-project-btn scroll-to scroll-animation" 
                                data-animation="rotate_up">
                                <img src="assets/images/round-text.png" alt="Rounded Text">
                                <i class="las la-arrow-down"></i>
                            </a>
        
                            <div class="facts d-flex">
                                <div class="left scroll-animation" data-animation="fade_from_left">
                                    <h1>3+</h1>
                                    <p>Years of <br>Experience</p>
                                </div>
                                <div class="right scroll-animation" data-animation="fade_from_right">
                                    <h1>50+</h1>
                                    <p>projects completed over <br>Nepal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
                <section class="about-area page-section scroll-to-page" id="about">
                    <div class="custom-container">
                        <div class="about-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-user"></i> About
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Every great programmer comes with
                                    an even <span>better story</span></h1>
                            </div>
                            <p class="scroll-animation" data-animation="fade_from_bottom">Since beginning my journey as a Senior Developer at G.K. Group of Company nearly 3 years ago, 
                                I've done remote work for agencies, consulted for startups, and collaborated with 
                                talented people to create digital products for both business and consumer use. 
                                Later I got an opportunity to become CEO of G.K Group Of Company.</p>
                        </div>
                    </div>
                </section>
        
        
                <section class="resume-area page-section scroll-to-page" id="resume">
                    <div class="custom-container">
                        <div class="resume-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-briefcase"></i> Resume
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Education & <span>Experience</span></h1>
                            </div>
        
                            <div class="resume-timeline">
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2022 - Present</span>
                                    <h2>Master in E-Governance</h2>
                                    <p>Nepal Open University</p>
                                    <h2>Web Designer</h2>
                                    <p>Vue Js</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2016 - 2020</span>
                                    <h2>Bachelor in Computer Science and Information Technology</h2>
                                    <p>Banke Bageshwori Campus(TU)</p>
                                    <h2>CEO at G.K. Group of Company</h2>
                                    <p>G.k. Group of Company</p>
                                    <h2>Senior Developer</h2>
                                    <p>PHP Framework Laravel</p>
                                </div>
                                <div class="item scroll-animation" data-animation="fade_from_right">
                                    <span class="date">2013 - 2016</span>
                                    <h2>+2 at Science</h2>
                                    <p>Mahendra Model Higher Secondary School</p>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="services-area page-section scroll-to-page" id="services">
                    <div class="custom-container">
                        <div class="services-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-stream"></i> Services
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Specializations</span></h1>
                            </div>
        
                            <div class="services-items">
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>Web Application</h2>
                                    <p>I created applocations with unique ideas to solve real problems.</p>
                                    <span class="projects">35+ Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-code"></i>
                                    <h2> Website Design</h2>
                                    <p>I build website go live with Bootstrap, Vue Js, Laravel, Wordpress</p>
                                    <span class="projects">20+ Projects</span>
                                </div>
                                <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-bezier-curve"></i>
                                    <h2>SEO/Marketing</h2>
                                    <p>Increase the traffic for your website with SEO optimized</p>
                                    <span class="projects">30+ Projects</span>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="skills-area page-section scroll-to-page" id="skills">
                    <div class="custom-container">
                        <div class="skills-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-shapes"></i> my skills
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Advantages</span></h1>
                            </div>
        
                            <div class="row skills text-center">
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/figma.png" alt="Figma">
                                            <h1 class="percent">60%</h1>
                                        </div>
                                        <p class="name">Figma</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/bootstrap.png" alt="bootstrap" height="60px" width="60px">
                                            <h1 class="percent">85%</h1>
                                        </div>
                                        <p class="name">Bootstrap</p>
                                    </div>
                                </div>
                               
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/vueJs.png" alt="Vue Js" height="60px" width="60px">
                                            <h1 class="percent">75%</h1>
                                        </div>
                                        <p class="name">Vue Js</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/wordpress.png" alt="WordPress">
                                            <h1 class="percent">86%</h1>
                                        </div>
                                        <p class="name">WordPress</p>
                                    </div>
                                </div>
                                <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="skill">
                                        <div class="skill-inner">
                                            <img src="assets/images/laravel.png" alt="Laravel/PHP">
                                            <h1 class="percent">90%</h1>
                                        </div>
                                        <p class="name">Laravel/PHP</p>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="portfolio-area page-section scroll-to-page" id="portfolio">
                    <div class="custom-container">
                        <div class="portfolio-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-grip-vertical"></i> portfolio
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                            </div>
        
                            <div class="row portfolio-items">
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-full">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/work1.jpg" data-lightbox="example-1">
                                                <img src="assets/images/work1.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="#">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="#">Laravel</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bootstrap</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">BAS - An NGO Website</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/work2.jpg" data-lightbox="example-1">
                                                <img src="assets/images/work2.jpg" alt="Portfolio">
                                            </a>

                                            <img src="assets/images/work2.jpg" alt="Portfolio">
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="#">Laravel/PHP</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bootstrap/CSS/JS</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">A messaging system for local government</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-6 scroll-animation" data-animation="fade_from_right">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/work3.jpg" data-lightbox="example-1">
                                                <img src="assets/images/work3.jpg" alt="Portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="#">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="#">Laravel/PHP</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">A Complete Hospital Management System</a></h2>
                                    </div>
                                </div>
        
                                <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                    <div class="portfolio-item portfolio-half">
                                        <div class="portfolio-item-inner">
                                            <a href="assets/images/work4.jpg" data-lightbox="example-1">
                                                <img src="assets/images/work4.jpg" alt="portfolio">
                                            </a>
        
                                            <ul class="portfolio-categories">
                                                <li>
                                                    <a href="#">Figma</a>
                                                </li>
                                                <li>
                                                    <a href="#">Laravel/PHP</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2><a href="#">Identity Card Management System for Local Government</a></h2>
                                    </div>
                                </div>
        
                                
                            </div>
        
                        </div>
                    </div>
                </section>
        
        
                <section class="testimonial-area page-section scroll-to-page" id="testimonial">
                    <div class="custom-container">
                        <div class="testimonial-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="lar la-comment"></i> testimonial
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered Clients</span></h1>
                            </div>
        
                            <div class="clients-logos">
                                <h4 class="scroll-animation" data-animation="fade_from_bottom">work with 60+ brands worldwide</h4>
                                <div class="row align-items-center">
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client1.jpg" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client2.jpg" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client4.jpg" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client3.jpg" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                        <img src="assets/images/client5.jpg" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                                        <img src="assets/images/client-6.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                                        <img src="assets/images/client-7.png" alt="client">
                                    </div>
                                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                                        <img src="assets/images/client-8.png" alt="client">
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </section>
        
        


                <section class="contact-area page-section scroll-content" id="contact">
                    <div class="custom-container">
                        <div class="contact-content content-width">
                            <div class="section-header">
                                <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                                    <i class="las la-dollar-sign"></i> contact
                                </h4>
                                <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>
                            </div>
                            <h3 class="scroll-animation" data-animation="fade_from_bottom">contact@lautantharu.com</h3>
                            <p id="required-msg">* Marked fields are required to fill.</p>

                            <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="https://wpriverthemes.com/HTML/drake/mailer.php">
                                <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="full-name">full Name <sup>*</sup></label>
                                            <input type="text" name="full-name" id="full-name" placeholder="Your Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="email">Email <sup>*</sup></label>
                                            <input type="email" name="email" id="email" placeholder="Your email adress">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="phone-number">phone <span>(optional)</span></label>
                                            <input type="text" name="phone-number" id="phone-number" placeholder="Your number phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="subject">subject <sup>*</sup></label>
                                            <select name="subject" id="subject">
                                                <option value="">Select a subject</option>
                                                <option value="Web Design">Web design</option>
                                                <option value="Web Application">Web Application</option>
                                                <option value="Marketing">Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="budget">your budget <span>(optional)</span></label>
                                            <input type="number" name="budget" id="budget" placeholder="A range budget for your project">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <label for="message">message</label>
                                            <textarea name="message" id="message" placeholder="Wrire your message here ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group upload-attachment">
                                            <div>
                                                <label for="upload-attachment">
                                                    <i class="las la-cloud-upload-alt"></i> add an attachment
                                                    <input type="file" name="file" id="upload-attachment">
                                                </label>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group submit-btn-wrap">
                                            <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    
    <script src="assets/js/main.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/color.js"></script>

</body>
</html>
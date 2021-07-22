<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles -->
    <link rel="stylesheet" href="css/styles2.css">

    <!-- <style>
        html,
        body {
            background-image: url("https://images.unsplash.com/photo-1547516508-e910d368d995?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style> -->
</head>

<!-- <body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="animate__animated animate__fadeInBottomRight animate__slower ">
                <div class="title m-b-md">
                    Smart Plant
                </div>
            </div>

        </div>
    </div>
</body> -->

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    <li class="nav-item"> @if (Route::has('login'))
                        @auth
                        @else
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                        @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                {{-- <h1 class="mx-auto my-0 text-uppercase">Smart Plant</h1>
                <h2 class=" mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2> --}}
                {{-- <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a> --}}
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class=" mb-4">Plant Kawaii Project</h2>
                    <p class="text-50">
                        เป็นโปรเจคที่จัดทำขึ้น เพื่อให้การปลูกต้นไม้เป็นเรื่องสนุก เพราะเราสามารถรับรู้สุขภาพของกับไม้ได้ เปรียบเสมือนการสื่อสารกับต้นไม้ของเรา
                         และเราต้องหมั่นสังเกตและดูแลน้องๆของเราด้วยว่าน้องต้องการอะไร ดูแลน้องๆให้สุดยอดและพาน้องเข้าไปจัดอันดับต้นไม้สุดยอดสุขภาพดีเลย!!
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="/img/pot.jpg"/>
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <h5 class="section-title h1">PlantCharacter</h5>

            <div class="row">
                <!-- Animation1 -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/img/seed_1.png"></p>
                                        <h4 class="card-title">Model1</h4>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">น้อง Seed Kawaii</h4>
                                        <p class="card-text">น้อง Seed Kawaii เป็นเมล็ด 
                                            เกิดเมื่อผู้ใช้หย่อนเมล็ดลงกระถาง
                                            น้องจะใช้เวลาโตแป๊บเดียวถ้าดูแลน้องดีๆ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Animation2 -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/img/seed_2.png" alt="card image"></p>
                                        <h4 class="card-title">Model2</h4>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">น้อง Sprout Kawaii</h4>
                                        <p class="card-text">น้อง Sprout Kawaii เป็นต้นอ่อน 
                                            เกิดเมื่อผู้ใช้หย่อนต้นอ่อน ลงกระถาง
                                            น้องจะใช้เวลาโตนิสนึง และน้องค่อนข้างบอบบาง
                                            เพราะฉนั้นแล้วต้องหมั่นดูแลน้องบ่อยๆนะ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Animation3 -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/img/seed_3.png" alt="card image"></p>
                                        <h4 class="card-title">Model3</h4>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">น้อง Buds Kawaii</h4>
                                        <p class="card-text">น้อง Buds เติบโตมาจาก น้อง Sprout Kawaii น้องจะสูงเร็ว ถ้าได้รับ
                                            แสงแดดและน้ำเพียงพอ น้องชอบอากาศสบายๆ ไม่ร้อนและหนาวเกินไป
                                            และน้องม่ชอบที่ร่มๆเท่าไหร่</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Animation4 -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="/img/seed_4.png" alt="card image"></p>
                                        <h4 class="card-title">Model4</h4>
                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">น้อง Blooming Kawaii</h4>
                                        <p class="card-text">น้องเกิดจาก น้อง Buds Kawaii ที่ได้รับการดูแลมาอย่างดี
                                            ถ้าน้องมีสุขภาพดีและอารมณ์ดี น้องจะมีดอกไม้บนศรีษะ
                                            น้องชอบแดดมาก แต่ไม่ชอบอากาศร้อนนะ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                    <form class="form-inline d-flex">
                        <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" type="email" placeholder="Enter email address..." />
                        <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">4923 Market Street, Orlando FL</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">hello@yourdomain.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container">Copyright © Your Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
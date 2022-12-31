<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Linear Regression</title>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header class="header">
        <nav class="navbar container">
            <a href="" class="nav-logo">Prediksi Saham</a>
            <div class="nav-menu" id="navMenu">
                <ul class="nav-list grid">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-estate nav-icon"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-user-exclamation nav-icon"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-presentation-lines-alt nav-icon"></i> Presentation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-clipboard-notes nav-icon"></i> How it work
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-chart-line nav-icon"></i> Predict
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="uil uil-comments nav-icon"></i> Contact
                        </a>
                    </li>
                </ul>

                <i class="uil uil-times nav-close" onclick="navClose()"></i>
            </div>
            <div class="nav-toggle" onclick="navToggle()">
                <i class="uil uil-apps"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!-- ============== HOME START ============== -->
        <section class="home section" id="home">
            <div class="home-container container grid">
                <div class="home-content grid">
                    <!-- Icon Media Social Start-->
                    <div class="home-social">
                        <a href="" class="home__social-icon" target="_blank">
                            <i class="uil uil-instagram"></i>
                        </a>
                        <a href="" class="home__social-icon" target="_blank">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        <a href="" class="home__social-icon" target="_blank">
                            <i class="uil uil-dribbble"></i>
                        </a>
                    </div>
                    <!-- Icon Media Social End-->

                    <!-- Profile Image Start -->
                    <div class="home-img">
                        <img src="{{asset('frontend/assets/img/home.png')}}" alt="">
                    </div>
                    <!-- Profile Image End -->

                    <!-- Data Start -->
                    <div class="home-data">
                        <h1 class="home-title">
                            Implementation of the linear regression algorithm
                        </h1>
                        <h3 class="home-subtitle">Developer by Andris</h3>
                        <p class="home-description">
                            I'm creative web developer in indonesian, and I'am very passionate
                            and dedicated to my work.
                        </p>

                        <a href="#contact" class="button button--flex">
                            Get started
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" data-name="Layer 1" viewBox="0 0 24 24" class="button__icon">
                                <path fill="var(--container-color)" d="M17.71,11.29a1,1,0,0,0-1.42,0L13,14.59V7a1,1,0,0,0-2,0v7.59l-3.29-3.3a1,1,0,0,0-1.42,1.42l5,5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l5-5A1,1,0,0,0,17.71,11.29Z"/>
                            </svg>

                        </a>
                    </div>
                    <!-- Data End -->
                </div>

                <!-- Scroll Start -->
                <div class="home-scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <svg
                            width="32px"
                            height="32px"
                            class="home__scroll-mouse"
                            viewBox="0 0 247 390"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 1.5;
                            "
                        >
                            <path
                            class="wheel"
                            d="M123.359,79.775l0,72.843"
                            style="
                                fill: none;
                                stroke: var(--title-color);
                                stroke-width: 20px;
                            "
                            ></path>
                            <path
                            id="mouse"
                            d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                            style="
                                fill: none;
                                stroke: var(--title-color);
                                stroke-width: 20px;
                            "
                            ></path>
                        </svg>
                        <span class="home__scroll-name">Scroll Down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
                <!-- Scroll End -->
            </div>
        </section>
        <!-- ============== HOME END ============== -->

        <!-- ============== ABOUT START ============== -->
        <section class="about section" id="about">
            <h2 class="section__title">
                About Me
            </h2>
            <span class="section__subtitle">My introduction</span>
            <div class="about__container container grid">
                <img src="{{asset('frontend/assets/img/profile.png')}}" alt="" class="about__img">

                <div class="about__data">
                    <div class="about__info grid">
                        <div class="about__box">
                            <i class="bx bx-award about__icon"></i>
                            <h3 class="about__title">Experience</h3>
                            <span class="about__subtitle">2 Years Working</span>
                        </div>
                        <div class="about__box">
                            <i class="bx bx-briefcase-alt about__icon"></i>
                            <h3 class="about__title">Completed</h3>
                            <span class="about__subtitle">10 + Projects</span>
                        </div>
                        <div class="about__box">
                            <i class="bx bx-support about__icon"></i>
                            <h3 class="about__title">Support</h3>
                            <span class="about__subtitle">Online 24/7</span>
                        </div>
                    </div>

                    <p class="about__description">
                        Hi, my name is Andris Eka Adi Saputra. I am currently studying
                        for my undergraduate degree at Nahdlatul Ulama Islamic University,
                        Jepara. I majored in Informatics Engineering and I am very happy to
                        learn new knowledge in the world of IT.
                    </p>
                    <p class="about__description">
                        This is my final peoject to
                        get bachelor degree in computer. Thank you to the lecturers and friends
                        who have helped me. So that I can complete this system.
                    </p>
                </div>
            </div>
        </section>
        <!-- ============== ABOUT END ============== -->

        <!-- ============== PRESENTATION START ============== -->
        <section class="presentation section">
            <h2 class="section__title">
                Presentation
            </h2>
            <span class="section__subtitle">General description</span>
            <div class="presentation__container container grid">
                <div class="presentation__data">
                    <p class="presentation__description">
                        In making a system, it must be preceded by a background and a
                        formulation of the problem so that the goal is achieved in
                        making a system. In this case, the maker will present the
                        system that has been made. So that users can understand the reason for
                        making this system.
                    </p>
                    <a href="https://docs.google.com/presentation/d/1rkPf6usK7-aHN3IstVXONvSClZE8KxDk/edit?usp=sharing&ouid=100631256416131361658&rtpof=true&sd=true" class="presentation__button button button--flex" target="_blank">
                        View presentation <i class="uil uil-meeting-board presentation__button-icon"></i>
                    </a>
                </div>
                <img src="{{asset('frontend/assets/img/presentation.png')}}" alt="" class="presentation__img">
            </div>
        </section>
        <!-- ============== PRESENTATION END ============== -->

        <!-- ============== HOW IT WORK START ============== -->
        <section class="work section">
            <h2 class="section__title">
                How it work
            </h2>
            <span class="section__subtitle">Flow for sistem</span>
        </section>
        <!-- ============== HOW IT WORK END ============== -->

        <!-- ============== PREDICT START ============== -->
        <section class="predict section">
            <h2 class="section__title">
                Predict
            </h2>
            <span class="section__subtitle">Import your data</span>
            <div class="presentation__container container grid">
                <img src="{{asset('frontend/assets/img/presentation.png')}}" alt="" class="presentation__img">
                <div class="presentation__data">
                    <p class="presentation__description">
                        In making a system, it must be preceded by a background and a
                        formulation of the problem so that the goal is achieved in
                        making a system. In this case, the maker will present the
                        system that has been made. So that users can understand the reason for
                        making this system.
                    </p>
                    <a href="javascript:void(0)" class="presentation__button button button--flex" onclick="predictModal()">
                        Import data <i class="uil uil-import presentation__button-icon"></i>
                    </a>
                </div>
                {{-- Modal Import --}}
                <div class="predict__modal" id="modal-show">
                    <div class="predict__modal-content">
                        <i class="uil uil-times predict__modal-close" onclick="modalHide()"></i>
                        <h3 class="predict__modal-title">Import Data Saham</h3>
                        <form action="">
                            <input type="file" name="file">
                            <button type="submit" class="btn">Import</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="presentation__container container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Open</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Close</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2345</td>
                                <td>2500</td>
                                <td>2300</td>
                                <td>2550</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2345</td>
                                <td>2500</td>
                                <td>2300</td>
                                <td>2550</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2345</td>
                                <td>2500</td>
                                <td>2300</td>
                                <td>2550</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>2345</td>
                                <td>2500</td>
                                <td>2300</td>
                                <td>2550</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>2345</td>
                                <td>2500</td>
                                <td>2300</td>
                                <td>2550</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="predict__col presentation__container container">
                <div class="predict__card">
                    <div class="predict__card-body">
                        <h3>Close</h3>
                        <div class="predict__card-result">
                            <h2>24000</h2>
                            <div class="predict__card-icon">
                                <i class="uil uil-arrow-down"></i>
                                10%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="predict__card">
                    <div class="predict__card-body">
                        <h3>Korelasi</h3>
                        <div class="predict__card-result">
                            <h2>24000</h2>
                            <div class="predict__card-icon">
                                <i class="uil uil-arrow-down"></i>
                                10%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="predict__card">
                    <div class="predict__card-body">
                        <h3>RMSE</h3>
                        <div class="predict__card-result">
                            <h2>24000</h2>
                            <div class="predict__card-icon">
                                <i class="uil uil-arrow-down"></i>
                                10%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="presentation__container container">
                <h2>Kesimpulan Hasil</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                </p>
            </div>
        </section>
        <!-- ============== PREDICT END ============== -->

    </main>



    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Main Js -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>


            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <link rel="preconnect" href="https://fonts.googleapis.com" />
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                    <link
                        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
                        rel="stylesheet"
                    />
                    <link rel="stylesheet" href="css/font-awesome.css" />
                    <link rel="stylesheet" href="css/bootstrap.css" />
                    <link rel="stylesheet" href="css/styles.css" />
                    <link rel="icon" href="images/favicon.png" />
                    <title>Soran LMS</title>
                </head>
                <body id="home">
                    <!---------------------------- Navigation ---------------------------->
                    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                        <div class="container">
                            <a href="index.html" class="navbar-brand">
                                <img src="images/soranbanner.png" alt="" width="50bit" />
                            </a>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                            >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#home"
                                            >Home</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#discover">Discover</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#summary">Summary</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#takeaways">Takeaways</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#subscribe">Subscribe</a>
                                    </li>
                                </ul>
                                <span class="nav-item">
                                    <span class="fa-stack">
                                        <a href="#">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i
                                                class="fab fa-facebook-f fa-stack-1x text-white"
                                            ></i>
                                        </a>
                                    </span>
                                </span>
                                <span class="nav-item">
                                    <span class="fa-stack">
                                        <a href="#">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i
                                                class="fab fa-twitter fa-stack-1x text-white"
                                            ></i>
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </nav>

                    <!---------------------------- Header ---------------------------->
                    <!-- vh-100 wata barzyakay 100% heighte brasaraka dabet -->
                    <header class="header py-7 vh-100">
                        <div class="container">
                            <div class="row mb-5 text-center">
                                <div class="col-12 text-container">
                                    <h1 class="display-2 text-white mt-3">
                                        Explore Our Training and Seminar Videos
                                    </h1>
                                    <p class="lead text-white w-75 m-auto mb-4">
                                        Whether you're a beginner or an experienced
                                        professional, our carefully curated content will
                                        empower you to enhance your skills and expand your
                                        knowledge
                                    </p>
                                    @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth


                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-outline-light text-uppercase">Log in</a>

                                            @if (Route::has('register'))
                                                 <a
                                                 href="{{ route('register') }}"
                                                class="btn btn-primary text-uppercase"
                                            >Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <!-- Image Slider -->
                                    <div
                                        id="slider"
                                        class="carousel slide"
                                        data-bs-ride="carousel"
                                    >
                                        <div class="carousel-indicators">
                                            <button
                                                class="active"
                                                type="button"
                                                data-bs-slide-to="0"
                                                data-bs-target="#slider"
                                                aria-current="true"
                                                aria-label="Slide 1"
                                            ></button>
                                            <button
                                                type="button"
                                                data-bs-slide-to="1"
                                                data-bs-target="#slider"
                                                aria-label="Slide 2"
                                            ></button>
                                            <button
                                                type="button"
                                                data-bs-slide-to="2"
                                                data-bs-target="#slider"
                                                aria-label="Slide 3"
                                            ></button>
                                        </div>
                                        <div class="carousel-inner rounded-5">
                                            <div class="carousel-item active">
                                                <img
                                                    src="images/header-slide-1.jpg"
                                                    alt=""
                                                    class="d-block w-100 rounded-5"
                                                />
                                            </div>
                                            <div class="carousel-item">
                                                <img
                                                    src="images/header-slide-2.jpg"
                                                    alt=""
                                                    class="d-block w-100 rounded-5"
                                                />
                                            </div>
                                            <div class="carousel-item">
                                                <img
                                                    src="images/header-slide-3.jpg"
                                                    alt=""
                                                    class="d-block w-100 rounded-5"
                                                />
                                            </div>
                                        </div>
                                        <!-- Buttons -->
                                        <button
                                            class="carousel-control-prev"
                                            type="button"
                                            data-bs-slide="prev"
                                            data-bs-target="#slider"
                                        >
                                            <span class="carousel-control-prev-icon"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button
                                            class="carousel-control-next"
                                            type="button"
                                            data-bs-slide="next"
                                            data-bs-target="#slider"
                                        >
                                            <span class="carousel-control-next-icon"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <!---------------------------- Register ---------------------------->
                    <section class="register bg-primary py-6 overflow-hidden">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h2>Unlock Your Potential with Engaging Content</h2>
                                    <p>
                                        Our wide range of training and seminar videos are
                                        designed to empower you with valuable knowledge and
                                        skills.
                                    </p>

                                    <!-- list-unstyled: bullet point nahele lagall default padding browser -->
                                    <!-- vstack gap-3: bo dawa daman nawa space drust be lanewan li kan -->
                                    <ul class="list-unstyled vstack gap-3">
                                        <li>
                                            <i class="fas fa-square"></i>
                                            <strong>Gain Expertise:</strong> Our videos
                                            provide in-depth insights and practical tips to
                                            enhance your expertise in various domains.
                                        </li>
                                        <li>
                                            <i class="fas fa-square"></i>
                                            <strong>Stay Updated:</strong> Stay up-to-date
                                            with the latest industry trends and advancements
                                            through our informative and up-to-date videos.
                                        </li>
                                        <li>
                                            <i class="fas fa-square"></i>
                                            <strong>Expand Your Network:</strong> Connect
                                            with like-minded individuals and industry
                                            experts, fostering new connections and
                                            opportunities.
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 p-4">
                                    <form>
                                        <div class="my-4">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg rounded-0 border-0"
                                                placeholder="Enter name"
                                            />
                                        </div>
                                        <div class="my-4">
                                            <input
                                                type="email"
                                                class="form-control form-control-lg rounded-0 border-0"
                                                placeholder="Enter email"
                                            />
                                        </div>
                                        <div class="my-4">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg rounded-0 border-0"
                                                placeholder="Enter phone number"
                                            />
                                        </div>
                                        <div class="form-check">
                                            <input
                                                type="checkbox"
                                                class="form-check-input"
                                                value=""
                                            />
                                            <label for="terms" class="form-check-label">
                                                I agree to the terms and conditions
                                            </label>
                                        </div>

                                        <!-- d-grid: lera bo awaya block button drust bkain wata 12 colome dager bkat yan tawawe widthaka -->
                                        <div class="d-grid mt-4">
                                            <button class="btn btn-outline-dark">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Details 1 ---------------------------->

                    <section id="discover" class="details py-6 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img
                                        src="images/instructor.jpg"
                                        alt=""
                                        class="img-fluid rounded-5 mb-4"
                                    />
                                </div>
                                <div
                                    class="col-lg-6 d-flex flex-column justify-content-center"
                                >
                                    <h2>
                                        Enhance Your Skills with Engaging Training Videos
                                    </h2>
                                    <p>
                                        Our extensive collection of training videos is
                                        designed to help you enhance your skills and excel
                                        in your chosen field. Whether you're looking to
                                        improve your technical expertise or develop
                                        essential soft skills, our videos provide valuable
                                        insights and practical knowledge.
                                    </p>
                                    <p>
                                        With expert instructors and comprehensive content,
                                        you'll gain the confidence and competence to tackle
                                        challenges and achieve success.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Points ---------------------------->

                    <section class="points pb-5">
                        <div class="container">
                            <div class="row text-center mb-5">
                                <div class="col-md-8 offset-md-2">
                                    <h2>
                                        Unlock Your Potential with Engaging Training Videos
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                            >
                                                1
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Enhance Your Skills</h3>
                                            <p>
                                                Our training videos provide comprehensive
                                                insights and practical tips to help you
                                                enhance your skills in various domains. From
                                                technical expertise to soft skills, we've
                                                got you covered.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                                >2</span
                                            >
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Stay Updated</h3>
                                            <p>
                                                Keep pace with the latest industry trends
                                                and advancements through our informative and
                                                up-to-date videos. Stay ahead of the curve
                                                and broaden your knowledge.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                                >3</span
                                            >
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Connect with Experts</h3>
                                            <p>
                                                Our platform allows you to connect with
                                                like-minded individuals and industry
                                                experts. Expand your network, foster new
                                                connections, and unlock new opportunities.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                                >4</span
                                            >
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Flexible Learning</h3>
                                            <p>
                                                Our training videos are available on-demand,
                                                allowing you to learn at your own pace and
                                                convenience. Access the content anytime,
                                                anywhere, and tailor your learning
                                                experience.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                                >5</span
                                            >
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Practical Knowledge</h3>
                                            <p>
                                                Gain practical knowledge and apply it
                                                directly to real-world scenarios. Our videos
                                                offer hands-on insights and practical tips
                                                to help you succeed in your professional
                                                endeavors.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="d-flex gap-3">
                                        <div class="number">
                                            <span
                                                class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                                >6</span
                                            >
                                        </div>
                                        <div>
                                            <h3 class="fs-4">Continuous Learning</h3>
                                            <p>
                                                Lifelong learning is key to personal and
                                                professional growth. Explore a vast
                                                collection of training videos and embark on
                                                a journey of continuous learning and
                                                self-improvement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Course Summary ---------------------------->

                    <!-- m-auto margin auto wadakat bcheta nawand -->
                    <section id="summary" class="summary bg-light mt-5 w-75 m-auto">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center mb-5">Course Summary</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-white p-5">
                                        <ul class="list-unstyled">
                                            <li class="border-bottom pb-3">
                                                <h5>1. Comprehensive Training</h5>
                                                <p>
                                                    Our courses provide comprehensive
                                                    training in a wide range of topics. From
                                                    beginner-level fundamentals to advanced
                                                    concepts, we offer in-depth content to
                                                    cater to learners of all levels.
                                                </p>
                                            </li>
                                            <li class="border-bottom pb-3 pt-5">
                                                <h5>2. Expert Instructors</h5>
                                                <p>
                                                    Learn from industry experts who bring
                                                    years of experience and expertise to the
                                                    table. Our instructors are passionate
                                                    about sharing their knowledge and
                                                    helping you succeed.
                                                </p>
                                            </li>
                                            <li class="pb-3 pt-5">
                                                <h5>3. Practical Application</h5>
                                                <p>
                                                    We believe in practical learning that
                                                    goes beyond theory. Our courses focus on
                                                    real-world application, equipping you
                                                    with the skills and knowledge needed to
                                                    excel in your field.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Details 2 ---------------------------->

                    <section class="details py-6 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img
                                        src="images/audience.jpg"
                                        alt=""
                                        class="img-fluid rounded-5 mb-4"
                                    />
                                </div>
                                <div
                                    class="col-lg-6 d-flex flex-column justify-content-center"
                                >
                                    <h2>
                                        Elevate Your Learning Journey with Expert Seminars
                                    </h2>
                                    <p>
                                        Join our expert-led seminars and unlock new
                                        possibilities in your personal and professional
                                        development. Our seminars cover a diverse range of
                                        topics, from leadership and innovation to personal
                                        growth and productivity.
                                    </p>
                                    <p>
                                        Immerse yourself in engaging discussions,
                                        interactive workshops, and valuable networking
                                        opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Invitation ---------------------------->

                    <section class="invitation mb-5 bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="invitation-bg text-center py-6 rounded-5">
                                        <div class="text-white w-75 m-auto">
                                            <h2 class="display-5 fw-bold">
                                                Join Us On December 22nd
                                            </h2>
                                            <p>
                                                We cordially invite you to attend a seminar
                                                on December 22nd, where we will explore
                                                various topics and insights related to
                                                <strong>advertising and marketing</strong>.
                                                It will be an engaging session where you can
                                                gain valuable knowledge about. Don't miss
                                                out on this opportunity to enhance your
                                                skills and broaden your horizons. Join us
                                                and be a part of this enriching experience!
                                            </p>
                                            <a
                                                href="#register"
                                                class="btn btn-primary btn-lg"
                                            >
                                                Register Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Takeaways ---------------------------->
                    <section id="takeaways" class="takeaways my-5 bg-light">
                        <div class="container">
                            <div class="row text-center mb-5">
                                <div class="col-md-8 offset-md-2">
                                    <h2>Key Takeaways</h2>
                                    <p class="lead">
                                        Here are some of the takeaways and benefits you can
                                        expect from our programs.
                                    </p>
                                </div>
                            </div>

                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-atom fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">Scientific Insights</h5>
                                            <p class="card-text">
                                                Explore the latest scientific research and
                                                gain valuable insights into various
                                                subjects, from physics to biology.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-key fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">
                                                Cybersecurity Awareness
                                            </h5>
                                            <p class="card-text">
                                                Discover the importance of cybersecurity and
                                                learn how to protect yourself and your
                                                digital assets from cyber threats.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-newspaper fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">Industry Updates</h5>
                                            <p class="card-text">
                                                Stay informed about the latest news and
                                                updates in your industry, keeping you ahead
                                                of the curve and facilitating professional
                                                growth.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Row -->
                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-users fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">
                                                Collaborative Networking
                                            </h5>
                                            <p class="card-text">
                                                Connect with professionals from diverse
                                                backgrounds and industries to foster
                                                collaboration and expand your professional
                                                network.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-handshake fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">
                                                Partnership Opportunities
                                            </h5>
                                            <p class="card-text">
                                                Discover potential partnership opportunities
                                                with like-minded individuals and
                                                organizations, opening doors to new
                                                collaborations and ventures.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card mb-4 rounded-0 border-0 p-3">
                                        <div class="card-body text-center">
                                            <i
                                                class="fas fa-chart-bar fa-3x text-primary bg-light rounded-circle p-3 my-4"
                                            ></i>
                                            <h5 class="card-title">Data-driven Insights</h5>
                                            <p class="card-text">
                                                Leverage data analytics to gain valuable
                                                insights and make informed decisions,
                                                unlocking new possibilities for growth and
                                                success.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Subscribe Form ---------------------------->
                    <section id="subscribe" class="subscribe my-5">
                        <div class="container">
                            <div class="row">
                                <!-- am coloma la medium basarawa 6 colom wardagre u dacheta nawandesh bahoy offset-md-3 chunka dalle la mediumawa 3 colom lay chap u 3 colome rast batall bka -->
                                <div class="col-md-6 offset-md-3 text-center">
                                    <h2>
                                        Subscribe to our email list and get updates from the
                                        experts
                                    </h2>
                                    <form>
                                        <div class="my-4">
                                            <input
                                                type="email"
                                                class="form-control form-control-lg"
                                                placeholder="Enter email"
                                            />
                                            <div class="form-text">
                                                We will never share your email address
                                            </div>
                                        </div>
                                        <!-- d-grid bo awaya buttonaka 12 colom dager kat yan bllen waku block elemente lebet -->
                                        <div class="d-grid">
                                            <button class="btn btn-primary">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!---------------------------- Footer ---------------------------->
                    <footer class="footer mt-4 text-bg-dark py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Lorem Ipsum</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing
                                        elit. Eos possimus aliquid omnis commodi.
                                        Dignissimos, quam obcaecati? Fugit non ex
                                        repellendus?
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h3>Quick Links</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#discover">Discover</a></li>
                                        <li><a href="#summary">Summary</a></li>
                                        <li><a href="#takeaways">Takeaways</a></li>
                                        <li><a href="#subscribe">Subscribe</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5>Connect</h5>
                                    <div class="d-flex gap-3">
                                        <a href="#"
                                            ><i class="fab fa-facebook fa-3x text-white"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fab fa-twitter fa-3x text-white"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fab fa-linkedin fa-3x text-white"></i
                                        ></a>
                                        <a href="#"
                                            ><i
                                                class="fab fa-instagram fa-3x text-white"
                                            ></i
                                        ></a>
                                        <a href="#"
                                            ><i class="fab fa-youtube fa-3x text-white"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>

                    <script src="js/bootstrap.bundle.min.js"></script>
                    <script src="js/script.js"></script>
                </body>
            </html>

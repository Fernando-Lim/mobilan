@extends('layouts.app')

@section('title', 'Mobilan - Driving School')

@section('content')
    <!-- Hero Start -->
    <div id="home" class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/main-content.jpg" alt="Mobilan driving course student" fetchpriority="high">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-6 animated slideInDown">Move Forward With Skill,
                                        Drive With Confidence</h1>
                                    <p class="hero-copy mx-auto mb-4">Practical driving lessons, patient instructors, and training cars prepared for confident everyday driving.</p>
                                    <a href="#booking" class="btn btn-primary py-sm-3 px-sm-5">Book Now</a>
                                    <a href="#courses" class="btn btn-light py-sm-3 px-sm-5 ms-3">Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Feature Strip Start -->
    <div class="container-fluid feature-strip py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-card bg-white shadow d-flex align-items-center h-100 p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Learn With Ease</h5>
                                <span>Build driving skills quickly</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-card bg-white shadow d-flex align-items-center h-100 p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Qualified Instructors</h5>
                                <span>Guiding you toward confident driving</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-card bg-white shadow d-flex align-items-center h-100 p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Get Your Driving License</h5>
                                <span>Prepare with comprehensive guidance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Strip End -->


    <!-- About Us Start -->
    <div id="about" class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-image-frame position-relative overflow-hidden ps-5 pt-5 h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" alt="Mobilan instructor guiding a driving student" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-4">Helping You Become a Skilled Driver on the Road.</h1>
                        <p>Welcome to Mobilan, the right place to learn driving and improve your skills behind the wheel.
                            We are committed to delivering high-quality lessons, focused guidance, and an enjoyable learning
                            experience for everyone who wants to master safe and confident driving.</p>
                        <p class="mb-4">We believe strong driving skills are the key to safety and confidence on the road.
                            That is why we offer comprehensive learning programs tailored to each student's needs and skill level.
                        </p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Qualified
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Safety Focused
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Affordable Fees
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Best Instructors
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    @include('components.schedule-modal')

    <!-- Courses Start -->
    <div id="courses" class="container-xxl course-section my-6 py-6 pb-0">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Courses</h6>
                <h1 class="display-6 mb-4">Become a Reliable Driver With Our Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-card d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 600.000,-</div>
                            <h5 class="mb-3">Package A</h5>
                            <p class="package-copy-spacious">In this package, you will receive the right guidance and instruction
                                to begin your driving journey.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner
                                </li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>7
                                    Sessions</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-1.jpg" alt="Package A driving course" loading="lazy">
                            <div class="course-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Package A Class Schedule", ["Mon","Tue","Wed"])'>Class
                                    Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-card d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 900.000,-</div>
                            <h5 class="mb-3">Package B</h5>
                            <p>In this package, you will learn more advanced driving techniques combined with a deeper
                                understanding of traffic rules.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i
                                        class="fa fa-signal text-primary me-2"></i>Intermediate</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>12
                                    Sessions</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-2.jpg" alt="Package B driving course" loading="lazy">
                            <div class="course-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Package B Class Schedule", ["Mon", "Tue", "Wed", "Sat", "Sun"])'>Class
                                    Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-card d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Rp 1.200.000,-</div>
                            <h5 class="mb-3">Package C</h5>
                            <p>In this package, you will learn advanced driving techniques, including how to handle complex
                                situations and drive in various road conditions.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Expert
                                </li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>20
                                    Sessions</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/courses-3.jpg" alt="Package C driving course" loading="lazy">
                            <div class="course-overlay">
                                <a class="btn btn-outline-primary border-2" onclick='openScheduleModal("Package C Class Schedule", ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"])'>Class
                                    Schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="booking" class="col-lg-8 my-6 mb-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="booking-panel text-center p-5">
                        <h1 class="mb-4">Make an Appointment</h1>
                        <form onsubmit="sendEmail(event)">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name"
                                            placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email"
                                            placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating position-relative">
                                        <select class="form-control border-0" id="course" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Package A">Package A</option>
                                            <option value="Package B">Package B</option>
                                            <option value="Package C">Package C</option>
                                        </select>
                                        <label for="course">Course Type</label>
                                        <span class="dropdown-arrow"></span>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-floating position-relative">
                                        <select class="form-control border-0" id="car" required>
                                            <option value="" disabled selected>Select</option>
                                            <option value="Veloz">Veloz</option>
                                            <option value="Xenia">Xenia</option>
                                            <option value="Brio">Brio</option>
                                            <option value="Ignis">Ignis</option>
                                            <option value="March">March</option>
                                            <option value="GO+ Panca">GO+ Panca</option>
                                            <option value="Mobilio">Mobilio</option>
                                            <option value="Sigra">Sigra</option>
                                        </select>
                                        <label for="car">Car</label>
                                        <span class="dropdown-arrow"></span>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control appointment-message border-0" placeholder="Leave a message here" id="message" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn-form btn-dark w-100 py-3" type="submit">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Instructors Start -->
    <div id="instructors" class="container-xxl py-6">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Our Instructors</h6>
                <h1 class="display-6 mb-4">Our Instructors Are Experienced and Have Successfully Taught Many Students
                </h1>
            </div>
            <div class="row g-0 profile-grid">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/valerie.jpg" alt="Instructor Valerie" loading="lazy">
                            <div class="profile-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Facebook Valerie"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Twitter Valerie"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Instagram Valerie"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Valerie</h5>
                            <span>Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/anthony.jpg" alt="Instructor Anthony" loading="lazy">
                            <div class="profile-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Facebook Anthony"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Twitter Anthony"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Instagram Anthony"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Anthony</h5>
                            <span>Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/jenny.jpg" alt="Instructor Jenny" loading="lazy">
                            <div class="profile-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Facebook Jenny"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Twitter Jenny"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Instagram Jenny"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Jenny</h5>
                            <span>Instructor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/chris.jpg" alt="Instructor Chris" loading="lazy">
                            <div class="profile-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Facebook Chris"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Twitter Chris"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href="#" aria-label="Instagram Chris"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Chris</h5>
                            <span>Instructor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructors End -->

    <!-- Cars Start -->
    <div id="cars" class="container-xxl py-6">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Training Cars</h6>
                <h1 class="display-6 mb-4">All of Our Cars Are Maintained Regularly.</h1>
            </div>
            <div class="row g-0 profile-grid">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/veloz.png" alt="Veloz training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Veloz</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/xenia.jpg" alt="Xenia training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Xenia</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/brio.jpeg" alt="Brio training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Brio</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/ignis.jpeg" alt="Ignis training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Ignis</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/march.jpg" alt="March training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">March</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/go.jpg" alt="GO+ Panca training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">GO+ Panca</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/mobilio.jpg" alt="Mobilio training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Mobilio</h5>
                            <span>Automatic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="profile-card position-relative">
                        <div class="position-relative">
                            <img class="img-fluid training-car-image" src="img/sigra.jpg" alt="Sigra training car" loading="lazy">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Sigra</h5>
                            <span>Manual</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cars End -->

@endsection

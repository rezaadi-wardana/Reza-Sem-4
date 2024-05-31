<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Company</title>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="#"><img src="image/logo.png" class=""
                    style="height: 1.8em; margin-top: -15px;" alt="..."><span class="text-danger"> CV. Rama
                    Citra</span> Indo Furniture</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="about">About Us</a></li>
                            <li><a class="dropdown-item" href="team">Team</a></li>
                            <li>
                                <a class="dropdown-item" href="testimonials">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder active" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- breadcumbs  -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Contact</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->
    <div class="contact mb-5">
        <div class="maps">
            {{-- <iframe
                src="https://www.google.com/maps/embed?pb={{$contact->maps_embed}}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1497.6555606665565!2d110.70511946708326!3d-6.659657632484682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70e07358180fd1%3A0xe351d8b7eee4449!2sCv.RCIF!5e0!3m2!1sid!2sid!4v1716781021970!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Location</h4>
                                        <p class="ms-5">{{ $contact->alamat }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Email</h4>
                                        <p class="ms-5">{{ $contact->email }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Phone</h4>
                                        <p class="ms-5">{{ $contact->telepon }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body px-4">
                            <?php if(!empty($statusMsg)){ ?>
                            <p class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></p>
                            <?php } ?>
                            <form action="" method="post">
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <textarea name="message" id="" cols="30" rows="10" class="form-control"
                                            placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <button type="submit" name="submit" class="btn btn-submit">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5 ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">{{ $contact->name }}</h2>
                            <p>
                                {{ $contact->description }}
                            </p>
                            <strong>Phone</strong> : <span>{{ $contact->telepon }} </span>
                            <br />
                            <strong>Email</strong> : <span>{{ $contact->email }} </span>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Our Services</h2>
                            <ul class="list-group list-unstyled">
                                @foreach ($services as $service)
                                    <li class="list-item">
                                        <a href="" class="text-decoration-none text-white">
                                            <i class="fa fa-chevron-right primary"></i>
                                            {{ $service->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                    <div class="col-md-2">
                        <h4 class="fw-bold">Useful Links</h2>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Portfolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none text-white">
                                        <i class="fa fa-chevron-right primary"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="fw-bold">Join Our Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                                <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                                    Subscribe
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="copyright">
                            &copy; Copyright <strong>Company</strong>. All Right Reserved
                        </div>
                        <div class="credits">
                            Design by me
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-links float-end">
                            <a href="" class="mx-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer  -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    </body>

</html>

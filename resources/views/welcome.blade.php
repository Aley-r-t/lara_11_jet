<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
        <!-- Bootstrap icons-->
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
                    
                        <nav class="navbar navbar-light bg-light static-top">
                            <div class="container">
                                
                         
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </nav>
                    

                    <header class="masthead" style="background-image: url('/assets/img/co_tipos/doblepuerta.jpg')">
                        <div class="container position-relative">
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <div class="text-center text-white">
                                        <!-- Page heading-->
                                        <h1 class="mb-5">Bienvenido a YouContainer</h1>
                                        <!-- Signup form-->
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- * * SB Forms Contact Form * *-->
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- This form is pre-integrated with SB Forms.-->
                                        <!-- To make this form functional, sign up at-->
                                        <!-- https://startbootstrap.com/solution/contact-forms-->
                                        <!-- to get an API token!-->
                                        <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                            <!-- Email address input-->
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                                </div>
                                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    <p>To activate this form, sign up at</p>
                                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>


                    <main>
                        <section class="features-icons bg-light text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                                            <h3>Fully Responsive</h3>
                                            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                                            <h3>Bootstrap 5 Ready</h3>
                                            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                                            <h3>Easy to Use</h3>
                                            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Image Showcases-->
                        <section class="showcase">
                            <div class="container-fluid p-0">
                                <div class="row g-0">
                                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/co_tipos/doblepuerta.jpg')"></div>
                                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                        <h2>Fully Responsive Design</h2>
                                        <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/co_tipos/cisterna.jpg')"></div>
                                    <div class="col-lg-6 my-auto showcase-text">
                                        <h2>Updated For Bootstrap 5</h2>
                                        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/co_tipos/estandar.png')"></div>
                                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                        <h2>Easy to Use & Customize</h2>
                                        <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Testimonials-->
                        <section class="testimonials text-center bg-light">
                            <div class="container">
                                <h2 class="mb-5">What people are saying...</h2>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                                            <h5>Margaret E.</h5>
                                            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                                            <h5>Fred S.</h5>
                                            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                                            <h5>Sarah W.</h5>
                                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Call to Action-->
                        <section class="call-to-action text-white text-center" id="signup">
                            <div class="container position-relative">
                                <div class="row justify-content-center">
                                    <div class="col-xl-6">
                                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                                        <!-- Signup form-->
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- * * SB Forms Contact Form * *-->
                                        <!-- * * * * * * * * * * * * * * *-->
                                        <!-- This form is pre-integrated with SB Forms.-->
                                        <!-- To make this form functional, sign up at-->
                                        <!-- https://startbootstrap.com/solution/contact-forms-->
                                        <!-- to get an API token!-->
                                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                                            <!-- Email address input-->
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                                </div>
                                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                            </div>
                                            <!-- Submit success message-->
                                            <!---->
                                            <!-- This is what your users will see when the form-->
                                            <!-- has successfully submitted-->
                                            <div class="d-none" id="submitSuccessMessage">
                                                <div class="text-center mb-3">
                                                    <div class="fw-bolder">Form submission successful!</div>
                                                    <p>To activate this form, sign up at</p>
                                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                                </div>
                                            </div>
                                            <!-- Submit error message-->
                                            <!---->
                                            <!-- This is what your users will see when there is-->
                                            <!-- an error submitting the form-->
                                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>





                        
                    </main>

                    <footer class="py-16 text-center text-sm text-black">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

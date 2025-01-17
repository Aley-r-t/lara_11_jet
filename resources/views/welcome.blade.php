<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link href="/assets/img/logo.png" rel="icon" type="img/png">

        <!-- Fonts -->
       

         <!-- Favicon-->
         <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
         <!-- Bootstrap icons-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
         <!-- Google fonts-->
         <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
         <!-- Core theme CSS (includes Bootstrap)-->
         <link href="/assets/css/styles.css" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased">
         <!-- Navigation-->
         <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
              
            </div>
        </nav>
        <!-- Masthead-->
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                       
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
                                
                <section class="relative custom-section">
                    <div class="absolute top-4 right-4">
                        <button class="custom-button py-2 px-4 rounded-lg">
                            <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>
                        </button>
                    
                            <button class="custom-button py-2 px-4 rounded-lg">
                         @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                            </button>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </div>
                </section>
                                    

                                   
                    </header>
                
                    <style>
                        .custom-button{
                            background: linear-gradient(45deg, #adc8ff, #7aa6f4);
                            border: 2px solid #ffffff;
                            box-shadow: 0 4px 6px rgba(110, 233, 206, 0.1);
                            transition: all 0.3s ease;
                    
                        }
                        a{
                            text-decoration: none;
                        }
                        .custom-button:hover {
                            background: linear-gradient(45deg, #ccdfff, #ffdbbd);
                            transform: translateY(-3px);
                            box-shadow: 0 8px 12px rgba(255, 252, 252, 0.818);
                        }
                        a:hover{
                            text-decoration: none;
                        }
                        .custom-section {
                            background-image: url('assets/img/portada.jpg');
                            background-size: cover;
                            background-position: center;
                            width: 100%;
                            height: 90vh; 
                        }
                    </style>
<br>
                    <section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('assets/img/co_tipos/estandar.png')">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                            <div class="text-center text-white p-6 rounded-lg">
                                <h2 class="text-4xl font-bold mb-4">A L M A C E N A</h2>
                                <p class="text-lg">Almacena </p>
                            </div>
                        </div>
                    </section>
                        
                    <section class="features-icons bg-light text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="testimonials bg-light">
                                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                        <img  src="/assets/img/co_tipos/estandar.png" alt="..." />
                                                        <h3>Contenedor Estándar</h3>
                                        <p class="lead mb-0">Suele ser de acero corrugado y estándar en dimensiones (20 pies o 40 pies de largo aprox.). Transporta gama de mercancías no perecederas.</p>
                                        <p class="lead mb-1">Accede y reserva su espacio<ion-icon name="caret-forward-circle-outline"></ion-icon></p>
                                                    </div>
                                                </div>
                                                </div>
                                                            <div class="col-lg-4">
                                    <div class="testimonials bg-light">
                                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                        <img  src="/assets/img/co_tipos/refrigerado.jpeg" alt="..." />
                                                        <h3>Contenedor Refrigerado</h3>
                                                        <p class="lead mb-0">Sistema de refrigeración integrado para una temperatura controlada dentro del contenedor. Transporta productos perecederos, alimentos congelados o frescos.</p>
                                                        <p class="lead mb-1">Accede y reserva su espacio<ion-icon name="caret-forward-circle-outline"></ion-icon></p>
                                                </div>
                                                </div>
                                            </div>
                                                <div class="col-lg-4">
                                                    <div class="testimonials bg-light">
                                                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                                        <img  src="/assets/img/co_tipos/ventilado.jpg" alt="..." />
                                                                        <h3>Contenedor Ventilado</h3>
                                        <p class="lead mb-0">Con aberturas para permitir la circulación de aire y evitar la condensación. Para frutas, verduras, etc.</p>
                                        <p class="lead mb-1">Accede y reserva su espacio<ion-icon name="caret-forward-circle-outline"></ion-icon></p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="testimonials bg-light">
                                                                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                                                        <img  src="/assets/img/co_tipos/cisterna.jpg" alt="..." />
                                                                                        <h3>Contenedor Cisterna</h3>
                                                                                        <p class="lead mb-0">Indicado para el transporte de líquidos, productos químicos, vinos, aceites, etc. Herméticamente sellados para evitar fugas</p>
                                                                                        <p class="lead mb-1">Accede y reserva su espacio<ion-icon name="caret-forward-circle-outline"></ion-icon></p>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="testimonials bg-light">
                                                                                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                                                                                        <img  src="/assets/img/co_tipos/doblepuerta.jpg" alt="..." />
                                                                                                        <h3>Contenedor Doble Puerta</h3>
                                                                                                        <p class="lead mb-0">Puertas en ambos extremos.</p>
                                                                                                        <p class="lead mb-1">Accede y reserva su espacio<ion-icon name="caret-forward-circle-outline"></ion-icon></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Image Showcases-->
                    <section class="showcase">
                        <div class="container-fluid p-0">
                            <div class="row g-0">
                                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                                    <h2>Fully Responsive Design</h2>
                                    <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                                <div class="col-lg-6 my-auto showcase-text">
                                    <h2>Updated For Bootstrap 5</h2>
                                    <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
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
                                        <img class="img-fluid rounded-circle mb-3" src="/assets/img/testimonials-1.jpg" alt="..." />
                                        <h5>Margaret E.</h5>
                                        <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                        <img class="img-fluid rounded-circle mb-3" src="/assets/img/testimonials-2.jpg" alt="..." />
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

                     <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


            
    
    </body>
</html>
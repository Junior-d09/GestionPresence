<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    
<!-- Mirrored from coderthemes.com/ubold/layouts/default/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 08:26:09 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Se connecter  Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('storage/assets/images/favicon.ico')}}">

		<!-- Theme Config Js -->
		<script src="{{asset('storage/assets/js/head.js')}}"></script>

		<!-- Bootstrap css -->
		<link href="{{asset('storage/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{asset('storage/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="../{{asset('storage/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-brand">
                                
                                <a href="{{ route('login.create') }}" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('storage/assets/images/logoo.png')}}" alt="" height="45">
                                    </span>
                                </a>
                                
                                <a href="{{ route('login.create') }}" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('storage/assets/images/logoo.png')}}" alt="" height="45">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Se Connecter</h4>
                        <p class="text-muted mb-4">Entrez votre adresse email et votre mot de passe pour accéder à votre compte.</p>

                        <!-- form -->
                        <form method="POST" action="{{ route('login.store') }}">
                            @csrf

                            @if(session('danger'))
                                {{session( 'danger' )}}
                            @endif
                            
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Addresse Email</label>
                                <input class="form-control" name="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Mot de passe oublié ?</small></a>
                                <label for="password" class="form-label">Mot de passe</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                         <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div> -->
                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit">Se connecter </button>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">S'inscrire</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <!-- <footer class="footer footer-alt">
                            <p class="text-muted">Don't have an account? <a href="auth-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </footer> -->

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <h2 class="mb-3 text-white">développeurs web: L'architectes numériques!</h2>
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i>L'informatique est devenue un pilier essentiel pour les entreprises dans le monde moderne. Les développeurs informatiques jouent un rôle crucial en créant des solutions sur mesure qui répondent aux besoins spécifiques de chaque entreprise. Leur expertise permet d'automatiser des processus, d'améliorer l'efficacité opérationnelle, et de développer des produits innovants. Grâce à leur travail, les entreprises peuvent rester compétitives, s'adapter rapidement aux changements du marché et offrir des expériences clients de qualité. En somme, les développeurs informatiques sont les architectes numériques qui façonnent l'avenir des entreprises.              <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <h5 class="text-white">
                        - CITECH-SARL (Gestion De Présence)
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- Authentication js -->
        <script src="{{asset('storage/assets/js/pages/authentication.init.js')}}"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/default/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 08:26:09 GMT -->
</html>
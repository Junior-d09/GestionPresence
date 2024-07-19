<div class="navbar-custom">
                    <div class="topbar">
                        <div class="topbar-menu d-flex align-items-center gap-1">

                            <!-- Topbar Brand Logo -->
                            <div class="logo-box">
                                <!-- Brand Logo Light -->
                                <a href="index.html" class="logo-light">
                                    <img src="{{ asset('storage/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
                                    <img src="{{ asset('storage/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                                </a>

                                <!-- Brand Logo Dark -->
                                <a href="index.html" class="logo-dark">
                                    <img src="{{ asset('storage/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
                                    <img src="{{ asset('storage/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
                                </a>
                            </div>

                            <!-- Sidebar Menu Toggle Button -->
                            <button class="button-toggle-menu">
                                <i class="mdi mdi-menu"></i>
                            </button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown d-none d-xl-block">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    Nouvelle Création
                                    <i class="mdi mdi-chevron-down ms-1"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <!-- item-->
                                    <a href="{{ route('etudiants.create') }}" class="dropdown-item">
                                        <i class="fe-briefcase me-1"></i>
                                        <span>Nouveau Etudiant</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('formateur.create') }}" class="dropdown-item">
                                        <i class="fe-user me-1"></i>
                                        <span>Nouveau Formateur</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('program.create') }} " class="dropdown-item">
                                        <i class="fe-bar-chart-line- me-1"></i>
                                        <span>Ajouter Programme</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('filiere.create') }}" class="dropdown-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Ajouter Filiere</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="fe-headphones me-1"></i>
                                        <span>Help & Support</span>
                                    </a>

                                </div>
                            </div>

                            <!-- Mega Menu Dropdown -->
                           
                        </div>

                        <ul class="topbar-menu d-flex align-items-center">
                            <!-- Topbar Search Form -->
                            

                            <!-- Fullscreen Button -->
                          

                            

                            <!-- Language flag dropdown  -->
                            

                            <!-- Notofication dropdown -->
                            

                            <!-- Light/Darj Mode Toggle Button -->
                            <li class="d-none d-sm-inline-block">
                                <div class="nav-link waves-effect waves-light" id="light-dark-mode">
                                    <i class="ri-moon-line font-22"></i>
                                </div>
                            </li>

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('storage/assets/images/users/admin.jpg') }}" alt="user-image" class="rounded-circle">
                                    <span class="ms-1 d-none d-md-inline-block">
                                    {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Bienvenu !</h6>
                                    </div>

                                    <!-- item-->

                                    <!-- item-->

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                            <!-- Right Bar offcanvas button (Theme Customization Panel) -->
                            <li>
                                <a class="nav-link waves-effect waves-light" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                    <i class="fe-settings font-22"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
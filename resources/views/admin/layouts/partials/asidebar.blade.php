<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <ul class="menu">
                <li class="menu-item">
                <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> TABLEAU DE BORD </span>
                    <span class="badge bg-success rounded-pill ms-auto"></span>
                </a>
                <div class="collapse" id="menuDashboards">
                    <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ route('index')}}" class="menu-link">
                        <span class="menu-text">TABLEAU DE BORD 1</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </li>

                <li class="menu-item">
                <a href="#menuTables" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="grid"></i></span>
                    <span class="menu-text"> PROGRAMMES </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuTables">
                    <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ route('program.index')}}" class="menu-link">
                        <span class="menu-text">Voir</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </li>
                <li class="menu-item">
                <a href="#menuTables" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="grid"></i></span>
                    <span class="menu-text"> PRESENCE </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuTables">
                    <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="{{ route('home.index1')}}" class="menu-link">
                        <span class="menu-text">Liste de Présence</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </li>
            
                <!-- Ajoutez les autres éléments de menu ici -->

                <li class="menu-item">
                                    <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link">
                                        <span class="menu-icon"><i data-feather="bar-chart-2"></i></span>
                                        <span class="menu-text"> ETUDIANT </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuCharts">
                                        <ul class="sub-menu">
                                        <li class="menu-item">
                                                <a href="{{ route('etudiant.index')}}" class="menu-link">
                                                    <span class="menu-text">LISTE des Etudiants</span>
                                                </a>
                                            </li>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ route('etudiants.create') }}" class="menu-link">
                                                    <span class="menu-text">Ajouter Etudiant</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <!-- Ajoutez les autres éléments de menu ici -->

                                <li class="menu-item">
                                    <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link">
                                        <span class="menu-icon"><i data-feather="map"></i></span>
                                        <span class="menu-text"> FORMATEUR </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMaps">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{ route('formateur.index')}}" class="menu-link">
                                                    <span class="menu-text">Liste des Formateur</span>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{route('formateur.create')}}" class="menu-link">
                                                    <span class="menu-text">Ajouter Formateur</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                    <!-- Ajoutez les autres éléments de menu ici -->
                                    
                                <li class="menu-item">
                                    <a href="#menuMultilevel" data-bs-toggle="collapse" class="menu-link">
                                        <span class="menu-icon"><i data-feather="share-2"></i></span>
                                        <span class="menu-text"> FILIERE </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="menuMultilevel">
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{ route('filiere.index')}}"  class="menu-link">
                                                    <span class="menu-text"> Liste des Filieres </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                            </li>    
                                        </ul>
                                    </div>
                                </li>

                                <li class="menu-item">
                            <a href="#menuForms" data-bs-toggle="collapse" class="menu-link">
                                <span class="menu-icon"><i data-feather="bookmark"></i></span>
                                <span class="menu-text"> ADMINISTRATEUR </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="menuForms">
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="{{route('admin.index2')}}" class="menu-link">
                                            <span class="menu-text">Liste des Administrareurs</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('admins.create')}}" class="menu-link">
                                            <span class="menu-text">Ajouter  un Administrateur</span>
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </li>

         </ul>
    </div>
  </div>
</div>

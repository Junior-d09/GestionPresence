@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">LISTE DES ETUDIANTS</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                <a href="{{ route('etudiants.create')}}"class="btn btn-info mb-5 d-right">AJOUTER UN ETUDIANT</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Filtrage</h4>
                        <p class="sub-header">
                            Filtrez la liste.
                        </p>

                        <div class="mb-2">
                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                <div class="col-12 text-sm-center">
                                    <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                        <option value="">Voir tout</option>
                                        <option value="actif">Actifs</option>
                                        <option value="inactif">Inactif</option>
                                        <option value="suspended">Filieres</option>
                                        <option value="suspended">Année</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input id="demo-foo-search" type="text" placeholder="Rechercher" class="form-control form-control-sm" autocomplete="on">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th>N° MATRICULES</th>
                                        <th>NOMS ET PRENOMS</th>
                                        <th>EMAIL</th>
                                        <th>PHONE</th>
                                        <th>ETAT</th>
                                        <th>FILIERES</th>
                                        <th>ANNEE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($etudiants as $index=> $etudiant)
                                        <tr>
                                            <td>{{ $etudiant->num_matri }}</td>
                                            <td>{{ $etudiant->name}}</td>
                                            <td>{{ $etudiant->email }}</td>
                                            <td>{{ $etudiant->tel }}</td>
                                            <td>{{ $etudiant->status == true ? 'actif' : 'inactif' }}</td>
                                            <td>{{ $etudiant->filiere->label }}</td>
                                            <td>{{ $etudiant->an_c }}</td>

                                            <td>
                                                <a href="{{ route('etudiant.edit', $etudiant)}}" class="btn btn-sm btn-warning">Modifier</a>
                                                <a href="{{ route('etudiant.state', $etudiant)}}" class="btn btn-sm btn-{{ $etudiant->status == true ? 'danger' : 'success' }}" onClick="return confirm('Voulez-vous vraiment {{ $etudiant->status == true ? 'désactivé' : 'activé' }} cet étudiant ?')">
                                                    {{ $etudiant->status == true ? 'Désactiver' : 'Activer' }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->

@endsection
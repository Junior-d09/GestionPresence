@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">LISTE DES FORMATEURS</h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{route('formateur.create')}}"class="btn btn-info mb-5 d-right">AJOUTER UN FORMATEUR</a>
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
                                                        <option value="active">Activés</option>
                                                        <option value="disabled">Désactivés</option>
                                                        <option value="suspended">Suspendus</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <thead>
                                                    <tr>
                                                        <th>N° MATRICULES</th>
                                                        <th>EMAIL</th>
                                                        <th>NOMS ET PRENOMS </th>
                                                        <th>PHONE</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($formateurs as $index=> $formateur)
                                                        <tr>
                                                            <td>{{$formateur->num_matri}}</td>
                                                            <td>{{$formateur->email}}</td>
                                                            <td>{{$formateur->name}}</td>
                                                            <td>{{$formateur->tel}}</td>

                                                            <td>
                                                                <a href="{{ route('formateur.edit', $formateur)}}" class="btn btn-sm btn-warning">Modifier</a>
                                                                
                                                                <a href="{{ route('formateur.state', $formateur)}}" class="btn btn-sm btn-{{ $formateur->status == true ? 'danger' : 'success' }}" 
                                                                    onClick="return confirm('Voulez-vous vraiment {{ $formateur->status == true ? 'désactivé' : 'activé' }} cet étudiant ?')">
                                                                    {{ $formateur->status == true ? 'Désactiver' : 'Activer' }}
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
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection

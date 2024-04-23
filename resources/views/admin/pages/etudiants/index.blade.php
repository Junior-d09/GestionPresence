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
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMAIL</th>
                                                <th>NOM  </th>
                                                <th>PRENOMS</th>
                                                <th>N° MATRICULE</th>
                                                <th>ANNEE D'ETUDE</th>
                                                <th>TELEPHONE</th>
                                                <th>FILIERE ID</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($etudiants as $etudiant)
                                            <tr>
                                                <td>{{$etudiant->id}}</td>
                                                <td>{{$etudiant->email}}</td>
                                                <td>{{$etudiant->nom_etu}}</td>
                                                <td>{{$etudiant->pre_etu}}</td>
                                                <td>{{$etudiant->num_matri}}</td>
                                                <td>{{$etudiant->an_c}}</td>
                                                <td>{{$etudiant->tel}}</td>
                                                <td>{{$etudiant->filiere->label}}</td>

                                                <td>
                                                    <a href="{{ route('etudiant.edit', $etudiant)}}" class="btn btn-warning">M</a>
                                                    <a href="{{ route('etudiant.destroy', $etudiant)}}" class="btn btn-danger" onClick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">S</a>
                                                </td>
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
@endsection
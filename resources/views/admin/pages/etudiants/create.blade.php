@extends('admin/layouts/master')
@section('content')

<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">AJOUT D'ETUDIANT</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                    <a href="{{ route('etudiants.add') }}"class="btn btn-info mb-5 d-right">AJOUTER ETUDIANT</a>
                                    </div>
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Nom Etudiant</th>
                                                <th>Prenom Etudiant</th>
                                                <th>N° Matricule</th>
                                                <th>Année en cours</th>
                                                <th>Telephone</th>
                                                <th>Filière Id</th>
                                                <th>Action</th>
                                            
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($etudiants as $index=> $etudiants)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$etudiants->label}}</td>
                                                <td>{{$etudiants->created_at}}</td>
                                                <td>{{$etudiants->updated_at}}</td>
                                            </tr>

                                                
                                                    
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
@endsection
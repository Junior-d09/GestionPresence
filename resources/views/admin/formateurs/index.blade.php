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
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMAIL</th>
                                                <th>NOM  </th>
                                                <th>PRENOMS</th>
                                                <th>Telephone</th>
                                                <th>N° MATRICULE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($formateurs as $formateur)
                                            <tr>
                                                <td>{{$formateur->id}}</td>
                                                <td>{{$formateur->email}}</td>
                                                <td>{{$formateur->nom_for}}</td>
                                                <td>{{$formateur->pre_for}}</td>
                                                <td>{{$formateur->tel}}</td>
                                                <td>{{$formateur->num_matri}}</td>

                                                <td>
                                                    <a href="{{ route('formateur.edit', $formateur)}}" class="btn btn-warning">M</a>
                                                    <a href="{{ route('formateur.destroy', $formateur)}}" class="btn btn-danger" onClick="return confirm('Voulez-vous vraiment supprimer ce formateur ?')">S</a>
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
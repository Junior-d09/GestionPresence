@extends('admin/layouts/master')
@section('content')
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">LISTE DE PRESENCE</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                    <a href="#"class="btn btn-info mb-5 d-right">PLUS DE DETAILS</a>
                                    </div>
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DATE</th>
                                                <th>HEURE DEBUT</th>
                                                <th>HEURE FIN</th>
                                                <th>ID ETUDIANTS</th>
                                                <th>ID FORMATEURS</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admines as $admines)
                                            <tr>
                                                <td>{{$admines->id}}</td>
                                                <td>{{$admines->label}}</td>
                                                <td>{{$admines->created_at}}</td>
                                                <td>{{$admines->updated_at}}</td>

                                                <td>
                                                    <a href="" class="btn btn-warning">Modifier</a>
                                                    <a href="" class="btn btn-danger" onClick="return confirm('Voulez vous vraiment supprimer cette categorie!')">Supprimer</a>
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
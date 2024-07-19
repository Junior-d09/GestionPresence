@extends('admin/layouts/master')
@section('content')
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">LISTE DES FILIERES</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                    <a href="{{route('filiere.create')}}"class="btn btn-info mb-5 d-right">AJOUTER UNE FILIERE</a>
                                    </div>
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>LABEL</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($filieres as $index=> $filiere)
                                            <tr>
                                                <td>{{$index+1}}</td>
                                                <td>{{$filiere->label}}</td>
                                                

                                                <td>
                                                    <a href="{{ route('filiere.edit', $filiere)}}" class="btn btn-warning">Modifier</a>
                                                    <a href="{{ route('filiere.destroy', $filiere)}}" class="btn btn-danger" onClick="return confirm('Voulez-vous vraiment supprimer cette filiere ?')">Supprimer</a>
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
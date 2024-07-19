@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
             <div class="card-header">
                <h5 class="card-title mb-0">PROGRAMMES DE COURS</h5>
                </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('program.create')}}"class="btn btn-info mb-5 d-right">AJOUTER UN PROGRAMME</a>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="mt-0">EMPLOI MODIFIABLE</h5>
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0" id="inline-editable">
                                                <thead>
                                                    <tr>
                                                        <th>Date de debut</th>
                                                        <th>Date de fin</th>
                                                        <th>Matieres</th>
                                                        <th>Formateurs</th>
                                                        <th>Sales</th>
                                                        <th>Filieres</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($programs as $program)
                                                        <tr>
                                                            <td>{{$program->date_deb}}</td>
                                                            <td>{{$program->date_fin}}</td>
                                                            <td>{{matiere($program->matiere_id)->label }}</td>
                                                            <td>{{formateur($program->formateur_id)->name }}</td>
                                                            <td>{{$program->sale}}</td>
                                                            <td>{{filiere($program->filiere_id)->label }}</td>

                                                            <td>
                                                                <a href="{{ route('program.destroy', $program) }}" class="btn btn-danger" onClick="return confirm('Voulez vous vraiment supprimer cette categorie!')">S</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection
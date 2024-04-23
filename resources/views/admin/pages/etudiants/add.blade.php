@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{route('etudiants.add')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="basiInput">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">Nom Etudiant</label>
                                <input type="text" name="nom_etu" class="form-control" id="basiInput">
                            </div>
                         </div>
                         <div class="col-xxl-3 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">PRENOMS Etudiant</label>
                                <input type="text" name="pre_etu" class="form-control" id="basiInput">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">Année d'Etude</label>
                                <input type="text" name="an_c" class="form-control" id="basiInput">
                            </div>
                        </div> 
                        <div class="col-xxl-3 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">telephone</label>
                                <input type="text" name="tel" class="form-control" id="basiInput">
                            </div>
                        </div>
                            <div>
                                <label for="basiInput" class="form-label">Filiere Id</label>
                                <select name="filiere_id" id="">
                                    @foreach($filieres as $filiere)
                                    <option value="{{ $filiere->id}}"> {{$filiere->label}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                                <input type="reset" class="form-control btn btn-dark" value="Annuler" >
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                                <input type="submit"  class="form-control btn btn-warning" value="Ajouter" >
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    </form>
                    <!--end row-->
                </div>
                
            </div>
        </div>
    </div>
    <!--end col-->
</div>
@endsection
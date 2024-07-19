@extends('admin/layouts/master')
@section('content')
<div class="row mt-5">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <form action=" {{route('program.store')}} " method="POST">
                    {{ csrf_field() }}
                    <div class="row gy-4">
                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">DATE DE DEBUT</label>
                                <input type="date" name="date_deb" class="form-control" id="basiInput" required>
                            </div>
                            @error('date_deb')
                                <span class="text-danger"> {{ $message}}</span>
                            @enderror
                         </div>
                         <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">DATE DE FIN</label>
                                <input type="date" name="date_fin" class="form-control" id="basiInput" required>
                            </div>
                            @error('Ddate_fin')
                                <span class="text-danger"> {{ $message}}</span>
                            @enderror
                        </div>

                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">MATIERES</label>
                                <select name="matiere_id" class="form-control" required>
                                    @foreach($programe as $matiere)
                                    <option value="{{ $matiere->id}}"> {{$matiere->label}}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div> 

                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">FORMATEURS</label>
                                <select name="formateur_id" class="form-control" required>
                                    @foreach($programs as $formateur)
                                    <option value="{{ $formateur->id}}"> {{$formateur->name}} </option>
                                    @endforeach
                                </select>
                             </div>
                        </div> 
                        
                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">SALES</label>
                                <input type="number" name="sale" class="form-control" id="basiInput" required>
                            </div>
                            @error('sale')
                                <span class="text-danger"> {{ $message}}</span>
                            @enderror
                        </div> 

                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">FILIERES</label>
                                <select name="filiere_id" class="form-control" required>
                                    @foreach($program as $filiere)
                                    <option value="{{ $filiere->id}}"> {{$filiere->label}}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div> 
                        
                        <div class="col-md-2">
                            <input type="reset" class="form-control btn btn-sm btn-dark" value="Annuler" >
                        </div>
                        <div class="col-md-2">
                            <input type="submit"  class="form-control btn btn-sm btn-warning" value="Ajouter" >
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
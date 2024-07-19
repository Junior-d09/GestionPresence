@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('etudiant.update', $etudiant) }}" method="POST">
                       <!-- {{csrf_field() }} -->
                       <!-- {{method_field('PUT') }} -->
                       @csrf
                       @method('PUT')
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="basiInput" value="{{ $etudiant->email }}">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">NOM ET PRENOMS</label>
                                <input type="text" name="name" class="form-control" id="basiInput" value="{{ $etudiant->name }}">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">ANNEE D'ETUDE</label>
                                <input type="text" name="an_c" class="form-control" id="basiInput" value="{{ $etudiant->an_c }}">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label">TELEPHONE</label>
                                <input type="text" name="tel" class="form-control" id="basiInput" value="{{ $etudiant->tel }}">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                            </div>
                             <input type="reset" class="form-control btn btn-dark" value="Annuler" >
                            </div>

                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                                <input type="submit"  class="form-control btn btn-warning" value="Modifier" >
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

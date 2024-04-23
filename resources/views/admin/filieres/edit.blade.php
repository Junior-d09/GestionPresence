@extends('admin/layouts/master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{ route('filiere.update', $filiere) }}" method="POST">
                       <!-- {{csrf_field() }} -->
                       <!-- {{method_field('PUT') }} -->
                       @csrf
                       @method('PUT')
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-md-12">
                            <div>
                                <label for="basiInput" class="form-label"></label>
                                <input type="text" name="label" class="form-control" id="basiInput" value="{{ $filiere->label }}">
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="form-floating">
                                <input type="reset" class="form-control btn btn-dark" value="Annuler" >
                            </div>
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
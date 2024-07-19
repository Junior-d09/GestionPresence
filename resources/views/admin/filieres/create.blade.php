@extends('admin/layouts/master')
@section('content')
<div class="row mt-5">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <div class="live-preview">
                    <form action="{{route('filiere.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row gy-4">
                        <div class="col-xxl-6 col-md-8">
                            <div>
                                <label for="basiInput" class="form-label">Label</label>
                                <input type="text" name="label" class="form-control" id="basiInput" required>
                            </div>
                            @error('label')
                                <span class="text-danger"> {{ $message}}</span>
                            @enderror
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
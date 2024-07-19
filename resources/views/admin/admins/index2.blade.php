@extends('admin/layouts/master')
@section('content')
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">LISTE DES ADMINISTRATEUR</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                    <a href="{{route('admins.create')}}"class="btn btn-info mb-5 d-right">AJOUTER UN ADMINISTRATEUR</a>
                                    </div>
                                    
                                    <table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admins as $index=> $admin)
                                            <tr>
                                                 <td>{{$index+1}}</td>
                                                 <th>{{$admin->email}}</th>
                                                 <td>{{$admin->name}}</td>
                                                 
                                                

                                                <td>
                                                    <a href="{{ route('admins.edit', $admin)}}" class="btn btn-sm btn-warning">Modifier</a>
                                                    <a href="{{ route('admin.state', $admin)}}" class="btn btn-sm btn-{{ $admin->status == true ? 'danger' : 'success' }}" onClick="return confirm('Voulez-vous vraiment {{ $admin->status == true ? 'désactivé' : 'activé' }} cet étudiant ?')">
                                                        {{ $admin->status == true ? 'Désactiver' : 'Activer' }}
                                                    </a>
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
@extends('admin/layouts/master')
@section('content')
<div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">LISTE DE PRESENCE</h5>
                                </div>
                                <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Filtrage</h4>
                                        <p class="sub-header">
                                            Filtrez les résultats par date, heure ou noms.
                                        </p>

                                        <div class="mb-2">
                                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                                <div class="col-12 text-sm-center">
                                                    <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                                        <option value="">Voir tout</option>
                                                        <option value="active">Heure</option>
                                                        <option value="disabled">Date</option>
                                                        <option value="suspended">N°matricules</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input id="demo-foo-search" type="text" placeholder="Rechercher" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <thead>
                                                <tr>
                                                    <th>N° MATRICULES</th>
                                                    <th>DATES</th>
                                                    <th>NOMS ET PRENOMS</th>
                                                    <th>HEURE </th>
                                                    <th>PROFESSIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                            @foreach($presences as $presence)
                                            <tr>
                                                <td>{{$presence->num_matri}}</td>
                                                <td>{{$presence->date}}</td>
                                                <td>{{$presence->name}}</td>
                                                <td>{{$presence->heure}}</td>
                                                <td>{{$presence->profession}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                           </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
@endsection

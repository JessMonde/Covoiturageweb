@extends('Personne.accueil')
@section('content')
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bienvenue sur Notre site de Covoiturage</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <p class="card-text">Liste des Trajets</p>
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Trajets</th>
                                                <th>Lieu Depart</th>
                                                <th>Lieu Arrivee</th>
                                                <th>Heure</th>
                                                <th>Place</th>
                                                <th>N* Voiture</th>
                                                <th>Prix</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($datas as $item)
                                          <tr>
                                            <td>{{$item->Nom_trajet}}</td>
                                            <td>{{$item->ville_depart}}</td>
                                            <td>{{$item->ville_Arrive}}</td>
                                            <td>{{$item->Heure_depart}}</td>
                                            <td>{{$item->Nbr_Place_dispo}}</td>
                                            <td>{{$item->voiture}}</td>
                                            <td>{{$item->Prix}}</td>
                                            <td>{{$item->Date}}</td>
                                            <td>
                                                <button>editer</button>
                                            </td>
                                          </tr>
                                          @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="/app-assets/js/scripts/datatables/datatable.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
@endsection
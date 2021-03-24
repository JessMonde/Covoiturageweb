@extends('Personne.accueil')
@section('content')
    <section id="number-tabs">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Proposer un Trajet</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                                <form action="{{route('ProposerTrajet.store')}}" method="post" class="number-tab-steps wizard-circle">
                                    {{ csrf_field() }}
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label >Nom du Trajet</label>
                                                        <input type="text" class="form-control" name="Nom_trajet">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >N* Matricule de la voiture</label>
                                                            <input type="number" class="form-control" name="voiture">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label >Lieu de depart</label>
                                                        <input type="text" class="form-control" name="ville_depart">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Nombre de Place disponible</label>
                                                            <select class="custom-select form-control" name="Nbr_Place_dispo">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                            <!-- Step 2 -->
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label >Lieu d'arrivé</label>
                                                            <input type="text" class="form-control" name="ville_Arrive">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Heure de depart</label>
                                                            <input type="number" class="form-control" name="Heure_depart">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>Date de depart</label>
                                                            <input type="date" class="form-control" name="Date">
                                                        </div>
                                                        <div class="form-group">
                                                                <label >Heure d'arrivé</label>
                                                                <input type="number" class="form-control" name="Heure_Arrive">
                                                        </div>
                                                        <div class="form-group">
                                                            <label >Prix</label>
                                                            <input type="number" class="form-control" name="Prix">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <button type="button" href="" class="btn btn-outline-primary mr-1 mb-1">Accueil</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button type="submit"  class="btn btn-outline-success mr-1 mb-1">Valider</button>
                                                </div>
                                            </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
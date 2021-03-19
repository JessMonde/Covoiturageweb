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
                                <form action="#" class="number-tab-steps wizard-circle">
                                            <!-- Step 1 -->
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="firstName1">Nom du Trajet</label>
                                                        <input type="text" class="form-control" name="firstName1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">N* Matricule de la voiture</label>
                                                            <input type="text" class="form-control" name="lastName1">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress1">Lieu de depart</label>
                                                        <input type="email" class="form-control" name="emailAddress1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="location1">Nombre de Place disponible</label>
                                                            <select class="custom-select form-control" name="">
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                                <option value="">3</option>
                                                                <option value="">4</option>
                                                                <option value="">5</option>
                                                                <option value="">6</option>
                                                                <option value="">7</option>
                                                                <option value="">8</option>
                                                                <option value="">9</option>
                                                                <option value="">10</option>
                                                                <option value="">11</option>
                                                                <option value="">12</option>
                                                                <option value="">13</option>
                                                                <option value="">14</option>
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
                                                            <label for="proposalTitle1">Lieu d'arrivé</label>
                                                            <input type="text" class="form-control" name="proposalTitle1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jobtitle">Heure de depart</label>
                                                            <input type="text" class="form-control" name="jobtitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription1">Date de depart</label>
                                                            <input type="text" class="form-control" name="jobtitle">
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="eventName1">Heure d'arrivé</label>
                                                                <input type="text" class="form-control" name="eventName1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <button type="button" href="" class="btn btn-outline-primary mr-1 mb-1">Accueil</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button type="button" href="" class="btn btn-outline-success mr-1 mb-1">Success</button>
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
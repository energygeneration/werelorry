@extends('layouts.public')

@section('content')

              <div class="container">
                  <div class="row">
                  <div class="col-md-6 mx-auto">
                    <h3 class="text-center fw-bold mt-5 mb-4 ">Bienvenue sur la page d’inscription</h3>
                    <div class="card w-100  shadow " >
                        <div class="card-body">
                            <form action="/inscription" method="post">

                                {{ csrf_field() }}

                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Nom</label>
                                    <input type="text" name="nom" class="form-control " id="InputName"  required="" placeholder="Veuillez entrer votre nom">
                                </div>
                                <div class="mb-3">
                                    <label for="InputFirstName" class="form-label">Prénom</label>
                                    <input type="text" name="prenom" class="form-control" id="InputFirstName" required="" placeholder="Veuillez entrer votre prénom">
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="InputEmail" required="" placeholder="Veuillez entrer votre mail">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Numéro</label>
                                    <input type="number" name="numero" class="form-control"  required="" placeholder="Veuillez entrer le numéro">
                                </div>
                                <div class="mb-3">
                                    <label for="InputNumberWhatsap" class="form-label">Mot de passe</label>
                                    <input type="number" name="mot_de_passe" class="form-control" id="InputNumberWhatsap" required="" placeholder="Veuillez entrer votre nom">
                                </div>
                                <div class="me-auto">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary boutton ms-4">S'INSCRIRE</button>
                                      </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  </div>
              </div>

              @endsection

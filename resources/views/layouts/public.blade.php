<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet-soutenance</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.min.css')}}">
  </head>
  <body>

    <div class="page">
        <div class="bg-color">
               <div class="container">
                   <div class="d-flex flex-row-reverse ">
                       <div class="p-2 "> <img src="assets/img/Facebook.png" alt=""> </div>
                       <div class="p-2 "> <img src="assets/img/Linkedin.png" alt=""> </div>
                       <div class="p-2 "> <img src="assets/img/WhatsApp.png" alt=""> </div>
                   </div>
               </div>
           </div>
           <nav class=" navbar navbar-expand-lg bg-light shadow ">
               <div class="container">

                   <a class="navbar-brand logo" href="#">WÉRÉLORRY</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                       <ul class="navbar-nav mx-auto mb-2  mb-lg-0">
                           <li class="nav-item">
                           <a class="nav-link " href="#">ACCEUIL</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link "href="#team">FONCTIONNEMENT</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link " href="#">APROPOS</a>
                           </li>
                           <li class="nav-item">
                           <a class="nav-link " href="#contact">CONTACT</a>
                           </li>
                       </ul>
                       <form class="d-flex">
                           <button class="btn btn-outline-success boutton" type="submit"> <a href=""></a> S'INSCRIRE</button>
                           <button type="button" class="btn btn-primary boutton ms-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">CONNECTER</button>
                           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Authentification</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                            <div class="mb-3">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Veuillez entrer votre mail">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pass" class="col-form-label">Mot de passe</label>
                                                <input type="password" class="form-control" id="pass" placeholder="Veuillez entrer votre mot de passe">
                                            </div>
                                            </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary boutton">Envoyer</button>
                                     </div>
                                 </div>
                               </div>
                            </div>
                      </form>
                   </div>
               </div>
          </nav>
   </div>

   @yield('content')

        <div class="footer" id ="contact">
            <div class="container-fluid bg-color-cover-bleue h-50 mt-5 py-5">
                  <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">À DÉCOUVRIR</h4>
                          <p>Destination  Tchamba</p>
                          <p>Destination Lomé</p>
                          <p>Destination sokodé</p>
                          <>Destination kara</p>
                        </div>
                        <div class="col-md-4 ">
                          <h4 class= "mb-3">TRAJETS LES PLUS DEMANDÉS</h4>
                          <p>Tickets Tchamba-Lomé</p>
                          <p>Tickets  Lomé-Tchamba</p>
                          <p>Tickets  Sokodé-Lomé</p>
                          <p>Tickets  Lomé-Sokodé</p>
                          <p>Tickets Kara-Lomé</p>
                          <p>Tickets Lomé-Kara</p>
                        </div>
                        <div class="col-md-4">
                          <h4 class= "mb-3">CONTACTEZ-NOUS</h4>
                        <form>
                          <div class="form-group">
                            <input type="email" class="form-control shadow" id="email" placeholder="Veuillez entrer votre nom">
                          </div>
                          <div class="form-group mt-3  shadow">
                            <input type="password" class="form-control" id="password" placeholder="Veuillez entrer votre mail">
                          </div>
                          <div class="form-group mt-3 shadow">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Veuillez entrer votre message"></textarea>
                          </div>
                        <div class="text-center">
                          <button type="submit" class="btn btn-success btn-block btn-lg cherchez-un mt-3">Envoyer</button>
                        </div>
                      </form>
                    </div>
                    <p class='text-center text-white mt-4'>© Copyright 2022 </p>
                  </div>
              </div>
            </div>
        </div>

       <script src="./acceuil.js"></script>
  <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>

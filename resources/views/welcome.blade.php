<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GlowGardens</title>
  </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
            <div class="navbar-brand">
                  <h3 class="pb-2 mt-4 mb-2">
                    <svg  style="color:#317343" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
                        <path d="M7 13h2v3H7v-3z"/>
                      </svg>
                      <span style="color:#54a169">GLOW GARDENS</span> <small>Votre guide de plantation</small>
                    </h3>
            </div>
            <a href="{{ url('/homeVisitor') }}" role="button" class="btn btn-success" style="background-color:#54a169">Continuer en tant que visiteur</a>
            </div>
          </nav>


          <div class="jumbotron" style="width:100% ;margin:auto;text-align: center;">
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6" style="background-image: url(https://images.all-free-download.com/images/graphiclarge/gardening_work_background_working_people_icons_cartoon_design_6837751.jpg);"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3>Passez en mode administrateur</h3>
                        
                        <p>Avec ce mode vous serez en charge de fiabiliser le site contre un revenu mensuel de 150 € <br>(Corriger des potentiels erreurs de plantations , Ajouter d'autres plantes et fleurs et même en supprimer si cela s'avère nécessaire)</p>
                    <p>Devenez admin en créant votre compte dès maintenant</p>
                    <div class="flex-center position-ref full-height">
                      @if (Route::has('login'))
                          <div class="top-right links">
                              @auth
                                  <a href="{{ url('/home') }}" role="button" class="btn btn-success" style="background-color: #54a169">Vous etes déjà connecté en mode admin, Cliquez ici pour continuer</a>
                              @else
                                  <a href="{{ route('login') }}" role="button" class="btn btn-success" style="background-color:#54a169">Se connecter</a>
          
                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" role="button" class="btn btn-success" style="background-color:#54a169">Creer un compte</a>
                                  @endif
                              @endauth
                          </div>
                      @endif
                  </div>
                    <hr>   
                    <div class="alert alert-success" role="alert">
                        Profitez des services de cette plateforme dès maintenant !
                      </div>
                      <p>Tous les végétaux sont recensés ici, afin de vous aider à connaitre toutes leurs caractéristiques : nom botanique, descriptif, exposition et sol adaptés, variétés, soins, maladies...</p>
                    </div>
            </div>
            <div style="height:10px"></div>
            </div>
          </div>
    </body>
</html>

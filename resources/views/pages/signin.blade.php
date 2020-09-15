@extends('/layouts/layoutstruct')
   {{-- LA SECTION DES TITRES --}}
     @section('title')
        Sign-in
     @stop


   {{-- LA SECTION DES STYLES  --}}
     @section('style')
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="/app/w3.css">
     @stop


   {{-- LA SECTION DES HEADERS --}}
     @section('header')
            
     @stop


   {{-- LA SECTION DES MAIN--}}
     @section('main')
        <div class="container">
            <!--Grid row-->
            <div class="row py-5">
                <div class="col-md-3">
          
                </div>
                <div class="col-md-6 w3-border w3-round-xlarge">
                    <h2 style="text-align: center; background-color: green;">Login</h2>
                    <form class="p-5 pink-text" action="" method="get">
                        <div class="md-form form-sm"> 
                            <label for="email" ><span style="color: green; font-weight: ; ">Votre addresse E-mail</span></label>:
                            <input type="email" id="email" class="form-control form-control-sm" required autofocus>
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="mdp"><span style="color: green; font-weight: ;" >Mot de passe</span></label>:
                            <input type="password" id="mdp" class="form-control form-control-sm" required>
                            
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-success">Envoyer<i class="far fa-paper-planeml-1"></i></button>
                        </div>
                    </form>
          
                </div>
                <div class="col-md-3">
          
                </div>
              
            </div>
            <!--Grid row-->
        </div>
     @stop


   {{-- LA SECTION DES  FOOTERS--}}
     @section('footer')

     @stop
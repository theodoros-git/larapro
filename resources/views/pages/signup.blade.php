@extends('layouts/layoutstruct', ['title' => 'Sign-Up'])
   


   {{-- LA SECTION DES STYLES  --}}
     @section('style')
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      
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
                    <h2 style="text-align: center; background-color: green;">Sign Up</h2>
                    <form class="p-5 pink-text" action="signup" method="post">
                        {{ csrf_field() }}
                        <div class="md-form form-sm"> 
                            <label for="name" ><span style="color: green; font-weight: ; ">Noms</span></label>:
                            <input type="text"  name="name" id="name" class="form-control form-control-sm" required autofocus>
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="prename" ><span style="color: green; font-weight: ; ">Prénoms</span></label>:
                            <input type="text" name="prename" id="prename" class="form-control form-control-sm" required autofocus>
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="phone" ><span style="color: green; font-weight: ; ">Téléphone</span></label>:
                            <input type="tel" name="phone" id="phone" class="form-control form-control-sm" required autofocus>
                        </div>
                        <div class="md-form form-sm">                       
                            <p class="text-center">
                                <label for="pays"><span style="color: green; font-weight: ; ">Niveau D'etude</span></label><br />
                                <select name="niveau" id="niveau">
                                    <optgroup label="Secondaire">
                                        <option value="1cycle">1er cycle</option>
                                        <option value="2cycle">2nd cycle</option>
                                    </optgroup>
                                    <optgroup label="Supérieur">
                                        <option value="bac">BAC</option>
                                        <option value="licence">Licence</option>
                                        <option value="master">Master</option>
                                        <option value="doctorat">Doctorat</option>
                                    </optgroup>
                                    
                                </select>
                            </p>
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="email" ><span style="color: green; font-weight: ; ">Votre addresse E-mail</span></label>:
                            <input type="email" name="email" id="email" class="form-control form-control-sm" required autofocus>
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="mdp"><span style="color: green; font-weight: ;" >Mot de passe</span></label>:
                            <input type="password" name="mdp" id="mdp" class="form-control form-control-sm" required>
                            
                        </div>
                        <div class="md-form form-sm"> 
                            <label for="cmdp"><span style="color: green; font-weight: ;" >Confirmer Mot de passe</span></label>:
                            <input type="password" name="cmdp" id="cmdp" class="form-control form-control-sm" required>
                            
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
        <?php
            if (isset($_POST['prename']) AND isset($_POST['name'])) // On a le nom
//et le prénom
                {
                    echo 'Bonjour ' . $_POST['prename'] . ' ' . $_POST['name'] . ' !';
                }
            else // Il manque des paramètres, on avertit le visiteur
                {
                    echo 'Il faut renseigner un nom et un prénom !';
                } 
        ?>
     @stop


   {{-- LA SECTION DES  FOOTERS--}}
     @section('footer')

     @stop
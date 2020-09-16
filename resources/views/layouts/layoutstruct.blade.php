<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ page_title($title ?? '') }} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/mdb.min.css">
        <link rel="stylesheet" href="/mdb.css">
        <link rel="stylesheet" type="text/css" href="/app/w3.css">
        @yield('style')
        <style >
            
        </style>
    </head>
    <body style="background: url('https://pixabay.com/illustrations/monitor-binary-binary-system-1307227/');">
        <header>
             <div class="container-fluid">
                 <div class="row" style="margin-left: 50px;  ">
                     <img src="/image/logoforadis.png" class="w3-circle img-fluid col-md-1 animated heartBeat infinite" style="height: 100px; width: 125px;border-radius: 10px / 10px; ">     
                     <h1 class="col-md-10" style="padding-top: 10px; color: green; font-weight: bold; text-align: center;">MobiWeb Formation</h1>
                      <!-- <marquee><h3><span style="text-decoration: underline; color: green; font-weight: bold; font-style: italic;">Make your dream be done</span></h3></marquee> -->                 
                 </div>
             </div>
             <div  class="w3-bar w3-green container w3-border  ">
                    <a  class=" {{ set_active_route('accueil_path') }} w3-mobile w3-bar-item  w3-button hover w3-white w3-hover-text-blue "   href="accueil"><i class="fa fa-home"></i>  Accueil</a>
                    <a class=" {{ set_active_route('signup_path') }} w3-mobile w3-bar-item  w3-button hover w3-hover-white w3-hover-text-blue w3-right"    href="signup">S'inscrire</a>
                    <a class=" {{ set_active_route('signin_path') }} w3-mobile w3-bar-item  w3-button hover w3-hover-white w3-hover-text-blue w3-right "    href="signin"><i class="fa fa-sign-in"></i>Se connecter</a>
                    
             </div>           
            @yield('header')
        </header>
        <main>
            @yield('main')
            @yield('content')
        </main>
        <!-- <footer class="bg-light text-center text-lg-left">
  
  <div class="container p-4">
    
    <div class="row">
      
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0 w3-border w3-round-xlarge">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      

      
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0 w3-border w3-round-xlarge">
        <h5 class="text-uppercase">Footer text</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
          aliquam voluptatem veniam, est atque cumque eum delectus sint!
        <
      </div>
      
    </div>
    
  </div>
  
  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="">mobiweb.bj</a>
  </div>
  
</footer> -->
<footer class="bg-light text-center text-lg-left " style="background-color: grey;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 w3-border w3-round-xlarge">
        <h5 class="text-uppercase text-center w3-green">About Us</h5>
        <P>"MOBIWEB" est un centre de formation professionnelle et pratique ayant pour objectifs de former des leadres capables de pouvoir s'entreprendre dans les domaines de formations tels que l'informatique, le graphisme etc... </P>
      </div>
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 w3-border w3-round-xlarge">
        <h5 class="text-uppercase mb-0 text-center w3-green">Contactez-Nous</h5>

        <ul class="list-unstyled">
          <li>
            <h4 ><strong style="text-decoration: underline;">Téléphone:</strong>   97227987</h4>
          </li>
          <li>
            <h4 ><strong style="text-decoration: underline;">Email:</strong>   kossitheodore@gmail.com</h4>
          </li>
          <li>
            
          </li>
          <li>
            
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-4 col-md-4 mb-4 mb-md-0 w3-border w3-round-xlarge">
        <h5 class="text-uppercase text-center w3-green">Newsletter</h5>

            <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2"><strong>S'inscrire à la newsletter</strong></p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control" />
            <label class="form-label" for="email">Addresse Email</label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button type="submit" class="btn btn-success mb-4">
            Abonnez-vous
          </button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="mobiweb.bj">Mobiweb</a>
  </div>
  <!-- Copyright -->
</footer>

        @yield('script')

    </body>
</html>

@extends('layouts/layoutstruct', ['title' => 'Accueil'])

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
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <h1 style="background-color: green; text-align: center;">Présentation de la formation</h1>
                    <p>"MobiWeb Formation" est un centre de formation à distance(c'est-à-dire en ligne) dans des modules variés tels que: l'informatique, la gestion et le management, le marketing et la communication, les langues , la santé et paramédical.... etc </p>
                </div>
                <div class="col-md-3">
                    
                </div>
                
            </div>
         
        </div>
        <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner container">
              <div class="row">
                
                <div class="carousel-item active col-md-4" data-interval="2000">
                     <img src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05ddb1c5bef8.03164818.png" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black;">Webmaster Junior</h1>
                        <p style="color: black;">Avoir un site internet est de nos jours incontournable pour les entreprises, ainsi le métier de webmaster est très demandé. En tant que spécialiste de la création et de la gestion de sites internet, vous pourrez exercer votre métier dans de nombreuses structures : agence, SSII, service informatique d’une entreprise, organisme public… Vous pourrez également choisir d’exercer en tant que freelance (à votre propre compte).</p>
                     </div>
                </div>
                <div class="carousel-item col-md-4" data-interval="2000">
                     <img src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05de06486054.95907685.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black;">Développeur Android</h1>
                        <p></p>
                     </div>
                </div>
                <div class="carousel-item col-md-4" data-interval="2000 ">
                     <img src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05debc985dd4.97485008.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <h1 style="color: black;">Programmation informatique</h1>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
            </a>
        </div> -->
        <div class="container">

    <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://cdn.pixabay.com/photo/2015/04/20/13/17/work-731198__340.jpg" class="card-img-top" alt="">
              <div class="mask rgba-pink-light"></div>
              <h4 class="my-4 font-weight-bold pink text-center">MODULE D'INFORMATIQUE</h4>
            
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
                  <ol class="carousel-indicators">
                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="5"></li>
                  </ol>
    <!--/.Indicators-->
    <!--Slides-->
                  <div class="carousel-inner" role="listbox">
      <!--First slide-->
                      <div class="carousel-item active" data-interval="2000">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536__340.jpg" alt="First slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Webmaster Junior</h1>
                          </div>
                      </div>
      <!--/First slide-->
      <!--Second slide-->
                      <div class="carousel-item" data-interval="2000">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05de06486054.95907685.jpg" alt="Second slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Développeur Android</h1>
                          </div>
                      </div>
      <!--/Second slide-->
      <!--Third slide-->
                      <div class="carousel-item" data-interval="2000">
                            <div class="view overlay z-depth-1-half">
                                <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05debc985dd4.97485008.jpg" alt="Third slide">
                                <div class="mask rgba-pink-light"></div>
                                <h1 class="text-center pink">Programmation Informatique</h1>
                            </div>
                      </div>
                      <div class="carousel-item" data-interval="2000">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2014/10/23/14/34/network-cables-499792_960_720.jpg" alt="Four slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Administrateur Réseau</h1>
                          </div>
                      </div>
                      <div class="carousel-item" data-interval="2000">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/08/09/11/03/look-881402__340.jpg" alt="Five slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Graphisme</h1>
                          </div>
                      </div>
                      <div class="carousel-item" data-interval="2000">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b099a6fb00786.30703777.jpg" alt="Six slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Webmaster Senior</h1>
                          </div>
                      </div>
      <!--/Third slide-->
                  </div>
    <!--/.Slides-->
    <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
    <!--/.Controls-->
            </div>
        </div>
        <!--Grid column-->

      </div>
    </div>  <br><br>

<!-- autre section -->

    <div class="container">

    
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://cdn.pixabay.com/photo/2018/04/05/02/25/analytics-3291738__340.jpg" class="card-img-top" alt="">
              <div class="mask rgba-pink-light"></div>
              <h4 class="my-4 font-weight-bold pink text-center">MODULE DE GESTION ET DE MANAGEMENT</h4>
            
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
                  <ol class="carousel-indicators">
                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                  </ol>
    <!--/.Indicators-->
    <!--Slides-->
                  <div class="carousel-inner" role="listbox">
      <!--First slide-->
                      <div class="carousel-item active" data-interval="1500">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b05d35245eb93.64756020.png" alt="First slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Comptabilité</h1>
                          </div>
                      </div>
      <!--/First slide-->
      <!--Second slide-->
                      <div class="carousel-item" data-interval="1500">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2019/12/06/15/50/business-4677631__340.jpg" alt="Second slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Gestion des ressources humaines</h1>
                          </div>
                      </div>
      <!--/Second slide-->
      <!--Third slide-->
                      <div class="carousel-item" data-interval="1500">
                            <div class="view overlay z-depth-1-half">
                                <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/10/10/21/49/laptop-2838939__340.jpg" alt="Third slide">
                                <div class="mask rgba-pink-light"></div>
                                <h1 class="text-center pink">Entrepreneur Web</h1>
                            </div>
                      </div>
                      
      <!--/Third slide-->
                  </div>
    <!--/.Slides-->
    <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
    <!--/.Controls-->
            </div>
        </div>
        <!--Grid column-->

      </div>
    </div><br> <br>




      <!-- autre section -->



      <div class="container">

    
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <div class="view overlay z-depth-1-half">
            <img src="https://cdn.pixabay.com/photo/2016/02/19/11/15/american-1209605__340.jpg" class="card-img-top" alt="">
              <div class="mask rgba-pink-light"></div>
              <h4 class="my-4 font-weight-bold pink text-center">LANGUES</h4>
            
          </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
                  <ol class="carousel-indicators">
                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                  </ol>
    <!--/.Indicators-->
    <!--Slides-->
                  <div class="carousel-inner" role="listbox">
      <!--First slide-->
                      <div class="carousel-item active" data-interval="1500">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/09/07/10/07/english-2724442__340.jpg" alt="First slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Anglais</h1>
                          </div>
                      </div>
      <!--/First slide-->
      <!--Second slide-->
                      <div class="carousel-item" data-interval="1500">
                          <div class="view overlay z-depth-1-half">
                              <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b067d1698fe72.13094899.png" alt="Second slide">
                              <div class="mask rgba-pink-light"></div>
                              <h1 class="text-center pink">Chinois</h1>
                          </div>
                      </div>
      <!--/Second slide-->
      <!--Third slide-->
                      <div class="carousel-item" data-interval="1500">
                            <div class="view overlay z-depth-1-half">
                                <img class="d-block w-100" src="http://formationadistance.mobiweb.bj/uploads/admin/formation/images/form_5b067e2fd366d2.29824979.png" alt="Third slide">
                                <div class="mask rgba-pink-light"></div>
                                <h1 class="text-center pink">Espagnol</h1>
                            </div>
                      </div>
                      
      <!--/Third slide-->
                  </div>
    <!--/.Slides-->
    <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
    <!--/.Controls-->
            </div>
        </div>
        <!--Grid column-->

      </div>
    </div>
    <div class="container">
        <div class="row">
            <style > .liens:hover{ color: green; }</style>
            <div class="col-lg-6">
                <a href="signup" class="liens"><p style="text-align: center; font-weight: bold; font-size: 20px; text-decoration: none;">S'inscrire pour une formation</p></a>
            </div>
            <div class="col-lg-6">
                <a href="formation" class="liens"><p style="text-align: center; font-weight: bold; font-size: 20px; text-decoration: none;">Voir plus sur les formations disponibles</p></a>
            </div>
        </div>
        
    </div>

    <!--<script>
        $('.carousel').carousel({
          interval: 500,
         })
    </script> -->
     @stop


   {{-- LA SECTION DES  FOOTERS--}}
     @section('footer')

     @stop
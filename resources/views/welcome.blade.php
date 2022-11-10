@extends('layouts.app')

@section('content')
<!-- banner -->
<section class="banner_main">
    <div class="container">
       <div class="row">
          <div class="col-md-8">
             <div class="text-bg">
                <h1> <span class="blodark"> SOFTDEMY</span> <br>Since 2020</h1>
                <p>
                    <span> Apprendre c'est avoir un projet,</span> <br>
                    <span>c'est se projeter différent dans l'avenir</span>
                </p>
                {{-- <a class="read_more" href="">En Savoir plus</a> --}}
             </div>
          </div>
          <div class="col-md-4">
             <div class="ban_img">
                <figure><img src="assets/images/icon_car_h.png" alt="#"/></figure>
             </div>
          </div>
       </div>
    </div>
</section>
<!-- end banner -->

<!-- six_box section -->
 <div class="six_box">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 col-sm-4 pa_left">
                <div class="six_probpx bluedark_bg">
                   <a href="#news">
                      <span><br></span>
                   </a>
                </div>
            </div>

           <div class="col-md-2 col-sm-2 pa_left">
                <div class="six_probpx yellow_bg">
                    <a href="#description">
                        <span>DESCRIPTION</span>
                    </a>
                </div>
            </div>

          <div class="col-md-2 col-sm-4 pa_left">
             <div class="six_probpx bluedark_bg">
                <a href="#notreVision">
                   <span>NOTRE VISION</span>
                </a>
             </div>
          </div>


          <div class="col-md-2 col-sm-4 pa_left">
             <div class="six_probpx yellow_bg">
                <a href="#atouts">
                   <span>LES ATOUTS</span>
                </a>
             </div>
          </div>

          <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx bluedark_bg">
               <a href="#news">
                  <span>Actualité</span>
               </a>
            </div>
         </div>

         <div class="col-md-2 col-sm-4 pa_left">
            <div class="six_probpx yellow_bg">
               <a href="#notreVision">
                  <span><br></span>
               </a>
            </div>
         </div>

       </div>
    </div>
 </div>
<!-- end six_box section -->
 <style>
    .blue_bge {
       background-color: #0df32f;
       padding: 5px 0;
    }
    .blue_bge .titlepage {
       text-align: center;
    }
 </style>

     <!-- Description Tags -->
    <div class="custom-container" id="description" style="margin-top: 25px;">
        <div class="sub-page-inner">
            <div class="news-sub__list__item">
                <div class="news-sub__list__img">
                    <img src="{{ asset('assets/icon/logo.jpg') }}" alt="" width="30%" >
                </div>
                <div class="news-sub__list__content">
                    <div class="news-sub__list__title" style="font-size: 25px; text-decoration: overline; padding-bottom: 10px;"> Description </div>

                    <div class="news-sub__list__txt">
                        La société Softdemy center est une entreprise qui voit le jour en Setptembre 2021 et qui a pour vocation de donner à son personnel un cadre non exhaustif mais essentiel aux règles d'engagement des traitements des flux d'information liés à
                        la réalisation de son objet social, aux travers de ses différentes fonctions.
                        <br> Softdemy center est subdivisé selon plusieurs branches, autrement dit : <br>
                        👉 Imprimerie <br>
                        👉 Secretariat <br>
                        👉 Prestation de services e-commerce <br>
                        👉 Formation <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre vision tags -->
    <div class="custom-container" id="notreVision" style="margin-top: 25px;">
        <div class="sub-page-inner">
            <div class="news-sub__list__item">
                <div class="news-sub__list__img wow fadeInRight animated animated" data-wow-delay=".9s"
                    style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInRight;">
                    <img src="{{ asset('assets/images/capture.png') }}" alt="" width="1419" height="1132">
                </div>

                <div class="news-sub__list__content">
                    <div class="news-sub__list__title"
                        style="font-size: 25px; text-decoration: overline; padding-bottom: 10px;">
                        Notre vision
                    </div>

                    <div class="news-sub__list__txt">
                        Devenir le Fournisseur par Excellence, offrant des accès de grandes capacités et fournisseur
                        de services innovants pour les Entreprises, Institutions
                        nationales et internationales au Cameroun et dans l'afrique centrale.
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--
 <div id="admission">
    <div class="blue_bge">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage">
                   <h2>ADMISSION</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
    <style>
       .card-header {
          border-top: 3px solid #00ff77;
          height: 55px;
          background-color: white;
          }
    </style>
    <div class="card">
       <div class="card-body">
          <div class="row">
             <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                   <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                      <div class="card-header">
                         <h4 class="card-title w-100">
                            Admission cour du jour
                         </h4>
                      </div>
                   </a>
                   <div id="collapseOne" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                         <p>L’admission au Collège du Levant De Ngodi-Bakoko se fait sur concours et/ou étude de dossiers</p>
                         <br>
                         <h2>Constitution du dossier</h2>
                         <ul>
                            <li>. Bulletins de note de l’année écoulée</li>
                            <li>. Photocopie d’acte de naissance</li>
                            <li>. Livret scolaire ou 500F</li>
                            <li>. 2 chemises cartonnées ou 200F</li>
                            <li>. 1000F pour 4 photos 4×4</li>
                            <li>. Carnet médical 1000F</li>
                            <li>. VMS 1000F</li>
                         </ul>
                         <span>
                            <strong><em>NB :</em></strong>
                            <em>
                               Les concours sont gratuits et se
                               dérouleront tous les samedis à 8h00 dès le 01er aout 2022.
                            </em>

                         </span>

                      </div>
                   </div>
                </div>
                <br>
                <div class="card card-primary card-outline">
                   <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                      <div class="card-header">
                         <h4 class="card-title w-100">
                         Admission cour du soir
                         </h4>
                      </div>
                   </a>
                   <div id="collapseTwo" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                         <p>L’admission au Cours Du Soir du Levant se fait sur étude de dossiers</p>
                         <br>
                         <h2>Constitution du dossier</h2>
                         <ul>
                            <li>. Bulletins de note de l’année écoulée</li>
                            <li>. Photocopie d’acte de naissance</li>
                            <li>. Livret scolaire ou 500F</li>
                            <li>. 2 chemises cartonnées ou 200F</li>
                            <li>. 1000F pour 4 photos 4×4</li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


 <div id="uniforme">
    <div class="blue_bge">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage">
                   <h2>UNIFORMES</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="card ">
       <div class="card-body">
          <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
             <div class="col">
                <div class="card">
                   <div class="card-body">
                      <h3 class="card-title">Fille</h3>
                      <img  src="assets/images/news_img1.jpg" alt="#"/>
                      <div class="card bg-warning">
                      <div class="card-body">
                         <h4 class="card-title text-dark">TENUE ORDINAIRE+ 2 écussons </h4>
                         <p class="card-text text-dark">Jupe évasée(après le genou) Ou pantalon droit kaki et veste bleu ciel : modèle disponible à l’établissement</p>
                         <hr>
                         <h4>COIFFURE</h4>
                         <p class="card-text text-dark">Nattes (8 nattes au maximum) ou tête rasée</p>
                      </div>
                   </div>
                   </div>
                </div>
             </div>
             <div class="col">
                <div class="card">
                   <div class="card-body">
                      <h3 class="card-title">Garçon</h3>
                      <img  src="assets/images/tisat4.png" alt="#"/>
                      <div class="card bg-info">
                      <div class="card-body">
                         <h4 class="card-title text-white">Special title treatment</h4>
                         <p class="card-text text-white">Pantalon droit kaki et veste bleu ciel : modèle disponible à l’établissement</p>
                         <hr>
                         <h4 class="card-text text-white">COIFFURE</h4>
                         <p class="card-text text-white">Tête rasée(toujours inférieur à 3mm)</p>
                      </div>
                   </div>

                   </div>
                </div>
             </div>
             <div class="col">
                <div class="card">
                   <div class="card-body">
                      <h3 class="card-title">Cour du Soir Fille/Garçon</h3>
                      <img  src="assets/images/tisat2.png" alt="#"/>
                      <div class="card bg-success text-white">
                         <div class="card-body">
                            <h4 class="card-title text-white">La tenue de fréquentation est un polo portant le logo du Cours Du Soir Du Levant</h4>
                            <p class="card-text">NB : Les pantalons slimés, « destroys » et les tenues serrées sont strictement interdits</p>
                            <hr>
                         <h4 class="card-text text-white">COIFFURE</h4>
                         <p class="card-text text-white">Pas de coiffure fantésiste ni extravagante</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <hr class="border-top" /> --}}

 <div id="atouts">

    <div class="card">
       <div class="card-body">
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
             <div class="col">
                <div class="card bg-primary">
                   <div class="card-body">
                      <ul class="list-group list-group-flush">
                         <h1 class="text-white">Nos Atouts | Engagements</h1>
                         <li class="list-group-item bg-transparent text-warning">
                            <div><i class="fa fa-star text-white m-1"></i>La qualité de service</div>
                            <div>Réseau Stable, Fiable et Sécurisé.</div>
                         </li>
                         <li class="list-group-item bg-transparent text-white">
                            <div><i class="fa fa-check-circle text-white m-1"></i>la gestion de la relation client</div>
                            <div>Interaction, Proximité et Réactivité.</div>
                        </li>
                        <li class="list-group-item bg-transparent text-white">
                            <div><i class="fa fa-check-circle text-white m-1"></i>L'innovation</div>
                            <div>Plus de créativité pour un meilleur confort.</div>
                        </li>
                        <li class="list-group-item bg-transparent text-warning">
                            <div><i class="fa fa-star text-white m-1"></i>Sens des responsabilités</div>
                            <div>Respect des engagements.</div>
                        </li>
                         <li class="list-group-item bg-transparent text-white">
                            <div><i class="fa fa-check-circle text-white m-1"></i>Le contrôle & Maintenance</div>
                            <div>Contrôle régulier du réseau et maintenance de vos appareils.</div>
                        </li>
                        <li class="list-group-item bg-transparent text-white">
                            <div><i class="fa fa-star text-white m-1"></i>L'éthique</div>
                            <div>Des valeurs, pour le respect de vos intérets commun.</div>
                        </li>
                         <li class="list-group-item bg-transparent text-warning"><i class="fa fa-check-circle text-white m-1"></i>Une photocopieuse disponible et gratuite pour les apprenants</li>
                         <li class="list-group-item bg-transparent text-white"><i class="fa fa-star text-white m-1"></i>Une Salle multimédia pour des cours vidéos via un projecteur</li>
                         <li class="list-group-item bg-transparent text-white"><i class="fa fa-check-circle text-white m-1"></i>Une salle d’informatique </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

{{--
 <hr class="border-top" />
<!-- fashion section -->
 <div class="fashion">
    <img src="assets/images/fashion.jpg" alt="#"/>
 </div> --}}
<!-- end fashion section -->

<!-- news section -->
 <div class="news" id="news">
    <div class="container">

       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Letest News</h2>
             </div>
          </div>
       </div>
       <div class="row">
        @foreach ($news as $item)
        <div class="col-md-12 margin_top40">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="news_img">
                        <figure>
                            <img src="{{ asset('image/'.$item->image)}}">
                        </figure>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="news_text">
                        <h3>{{$item->titre}}</h3>
                        <span> {{$item->date}} </span>
                        <div class="date_like">
                            <span> </span>
                            <a href="/contact">
                                <span class="pad_le">Comment</span>
                            </a>
                        </div>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
       </div>
    </div>
 </div>
<!-- end news section -->

<!-- three_box section -->
 {{-- <div class="three_box">
    <div class="container">
       <div class="row">

          <div class="col-md-4">
             <div class="gift_box">
                <i><img src="assets/images/icon_mony.png"></i>
                <span>Money Back</span>
             </div>
          </div>

          <div class="col-md-4">
             <div class="gift_box">
                <i><img src="assets/images/icon_gift.png"></i>
                <span>Special Gift</span>
             </div>
          </div>

          <div class="col-md-4">
             <div class="gift_box">
                <i><img src="assets/images/icon_car.png"></i>
                <span>Free Shipping</span>
             </div>
          </div>

       </div>
    </div>
 </div> --}}
<!-- End three_box section -->

@endsection






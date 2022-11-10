@extends('layouts.app')

@section('content')

    <!-- banner -->
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nos Intervention</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/app1.jpg')}}" data-speed="0.7">
        <div class="section-inner pad-top-200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt30 wow text-center">
                        <h2 class="section-heading">Nos interventions</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="welcome">
        <div class="section-inner nopaddingbottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="lead">
                            Multi-Cargo Solutions est là pour répondre à tous vos problèmes, n'hésitez pas à nous écrire.
                        </p>
                        <p class="lead">Vous avez des problèmes avec vos caméras et autres ...</p>
                        <p class="lead">Envoyez - nous du courriel .</p>
                        <video src="assets/video//MCS_1.mp4" autoplay width="100%" loop></video>
                    </div>

                    <div class="col-md-6">
                        <form method="POST">
                            <center><img class="mb-4" src="assets/icons/logo_MCS_5.png" width="20%"></center>
                            <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nom" required data-validation-required-message="Please enter your name." name="nom">
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Société / Particulier" required data-validation-required-message="Please enter the name of your entreprise." name="société">
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email" data-validation-required-message="Please enter your email address." name="email">
                            </div>
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="Téléphone" name="tel">
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Objet" data-validation-required-message="Please enter the title of your problem." name="objet">
                            </div>
                            <div class="textarea">
                                <textarea name="message" class="form-control" cols="50" rows="10" placeholder="Exprimez-vous ici !! 😃😃"></textarea>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit" style="color: #5CAB70; margin-bottom: 10px;" >Envoyer</button>
                        </form>
                        <?php
                            if(isset($_POST['message'])){
                                $entete  = 'MIME-Version: 1.0' . "\r\n";
                                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                $entete .= 'From: ' . $_POST['email'] . "\r\n";

                                $message = '<h1>Message envoyé depuis la page Contact de multi-cargo-solutions.com</h1>
                                <p><b>Nom : </b>' . $_POST['nom'] . '<br>
                                <p><b>Nom : </b>' . $_POST['société'] . '<br>
                                    <b>Email : </b>' . $_POST['email'] . '<br>
                                    <b>Email : </b>' . $_POST['objet'] . '<br>
                                <b>Message : </b>' . $_POST['message'] . '</p>';

                                $retour = mail('info@multi-cargos.com', 'Envoi depuis page Contact', $message, $entete);
                                if($retour) {
                                    echo '<p>Votre message a bien été envoyé.</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

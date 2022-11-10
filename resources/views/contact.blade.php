@extends('layouts.app')

@section('content')
    <!-- banner -->
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="m-1">
        <div class="news-detail__header">
            <div style="color: #1D426E;">
                <span ><i class="bi-diagram-2-fill"></i></span>
                <span style="font-size: 30px;" class="titlepage m-4">Nos Agences</span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-1 d-flex justify-content-between row-cols-lg-2 row-cols-xl-3 m-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="news-detail__header">
                            <div class="news-detail__date">
                                <span class="news-detail__date-txt"> SOFDEMY </span>
                            </div>
                        </div>
                        <p>
                            <span>
                                <i class="bi-geo"></i>
                            </span>
                            <span>
                            Douala-Yassa
                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="bi-telephone"></i>
                            </span>
                            <span>
                                680 500 189 | 659 310 923
                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </span>
                            <span>
                                info@sofdemy.com
                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>
                                Lundi à Vendredi 08h - 17h
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="news-detail__header">
                            <div class="news-detail__date">
                                <span class="news-detail__date-txt"> New Word Business </span>
                            </div>
                        </div>
                        <p>
                            <span>
                                <i class="bi-geo"></i>
                            </span>
                            <span>
                                Douala-Yassa

                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="bi-telephone"></i>
                            <span>
                            </span>
                                680 500 189 | 659 310 923
                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="fa fa-at" aria-hidden="true"></i>
                            </span>
                            <span>
                                info@kfnewbusiness.com
                            </span>
                        </p>
                        <p>
                            <span>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>
                                Lundi à Vendredi 08h - 17h
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Formulaire de contact -->
    <div class="card">
        <div class="card-body">
            <div class="news-detail__header">
                <div style="color: #1D426E;">
                    <span ><i class="bi-diagram-2-fill"></i></span>
                    <span style="padding-right: 3px; font-size: 30px;" > Prendre un Rendez-Vous</span>
                </div>
            </div>
            <form action="{{route('sendMail')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="inputName">Name <span class="text-danger">*</span></label>
                    <input type="text" id="inputName" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label for="inputEmail">E-Mail <span class="text-danger">*</span></label>
                    <input type="email" id="inputEmail" class="form-control"  name="email" />
                </div>
                <div class="form-group">
                    <label for="inputSubject">Subject <span class="text-danger">*</span></label>
                    <input type="text" id="inputSubject" class="form-control" name="subject" />
                </div>
                <div class="form-group">
                    <label for="inputMessage">Message <span class="text-danger">*</span></label>
                    <textarea id="inputMessage" class="form-control" name="message" rows="4"></textarea>
                </div>
                <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Send message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection


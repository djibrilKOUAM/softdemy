@extends('layouts.app')

@section('content')

    <!-- banner -->
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>News/ Actualités/ événements</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news section -->
    <div class="news">
        <div class="container">
            <div class="row">
                @foreach ($news as $item)
                    <div class="col-md-12 margin_top40">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="news_img">
                                    <figure>
                                        <img src="{{ asset('image/'.$item->image)}}">
                                    </figure>
                                    {{-- <video src=""></video> --}}
                                    <iframe src="{{ asset('image/'.$item->image)}}" frameborder="0"></iframe>
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
@endsection

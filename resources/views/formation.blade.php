@extends('layouts.app')

@section('content')

    <!-- banner -->
    <div class="blue_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Nos formations</h2>
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
                    @foreach ($formations as $item)
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                            <div class="card-header">
                                <h4 class="card-title w-100">
                                    {{$item->module}}
                                </h4>
                            </div>
                            </a>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <br>
                                    <h2>{{$item->sousmodule}}</h2><br>
                                    <h3>{{$item->description}}</h3>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach
              </div>
           </div>
        </div>
     </div>


 @endsection

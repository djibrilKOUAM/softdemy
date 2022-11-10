@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>News</h1>
                            <a href="{{route('news.index')}}" class="btn btn-success my-3">Voir les nouvelles</a>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="mb-1" for="val-username">Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" value="{{old('titre')}}" class="form-control" id="val-username" name="titre" placeholder="Enter a title.." >
                                @error('titre')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1" for="val-username">Date
                                    <span class="text-danger">*</span>
                                </label>
                                    <input type="date" value="{{old('date')}}" class="form-control" id="val-username" name="date" >
                                @error('date')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="val-suggestions">Description <span
                                        class="text-danger">*</span>
                                </label>
                                    <textarea class="form-control" value="{{old('description')}}" id="val-suggestions" name="description" placeholder="Enter description" ></textarea>
                                @error('description')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="val-username">Image
                                    <span class="text-danger">*</span>
                                </label>
                                    <input type="file" onchange="loadFile(event)" value="{{old('image')}}" class="form-control" id="upload" name="image" >
                                @error('image')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                                <div>
                                    <img src="" class="image" style="width: 100px; height: 100px; border:1px solid #0000;" id="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary form-control" value="Submit" name="createnews">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

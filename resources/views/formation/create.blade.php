@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>formations</h1>
                            <a href="{{route('formations.index')}}" class="btn btn-success my-3">Voir les formations</a>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="{{route('formations.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="mb-1" for="val-username">Entrez le Module
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" value="{{old('module')}}" class="form-control" id="val-username" name="module" placeholder="Enter a title.." >
                                @error('module')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="mb-1" for="val-suggestions">Entrez les Sous modules <span
                                        class="text-danger">*</span>
                                </label>
                                    <textarea class="form-control" value="{{old('sousmodule')}}" id="val-suggestions" name="sousmodule" placeholder="Enter sousmodule" ></textarea>
                                @error('sousmodule')
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
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary form-control" value="Submit" name="createformations">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

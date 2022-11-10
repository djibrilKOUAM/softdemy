@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Etablissement du bilan</h1>
                            <a href="{{route('formations.index')}}" class="btn btn-success my-3">See a formations</a>
                        </div>
                        <form method="POST" action="{{route('formations.update',$formations->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="m-1" for="val-username">Entrez le module
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" value="{{$formations->module }}" class="form-control" id="val-username" name="module" placeholder="Enter a title..">
                                @error('module')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="m-1" for="val-suggestions">Entrez les Sous Modules <span
                                        class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="val-suggestions" name="sousmodule" rows="5" placeholder="Enter sousmodule">{{$formations->sousmodule }}</textarea>
                                @error('sousmodule')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="m-1" for="val-suggestions">Description <span
                                        class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="Enter description">{{$formations->description }}</textarea>
                                @error('description')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" class="submit" name="createformations">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Etablissement du bilan</h1>
                            <a href="{{route('bilans.index')}}" class="btn btn-success my-3">Voir le bilan</a>
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form method="post" action="{{route('bilans.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group p-2">
                                <label for="title">Designation <span class="text-danger">*</span></label>
                                <textarea name="designation" class="form-control" id="designation" >{{old('designation')}}</textarea>
                                @error('designation')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group p-2">
                                <label for="title">Montant <span class="text-danger">*</span></label>
                                <input type="number" class="form-control"  name="montant" id="montant" value="{{old('montant')}}">
                                @error('montant')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            @error('montant')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group p-2">
                                <button type="submit" class="btn btn-success">Enregister le bilan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

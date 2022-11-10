@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Etablissement du bilan</h1>
                            <a href="{{route('index')}}" class="btn btn-success my-3">Voir le bilan</a>
                        </div>
                        <form method="POST" action="{{route('bilans.update',$bilans->id)}}">
                            @csrf
                            @method('put')

                            <div class="form-group p-2">
                                <label for="designation">Designation <span class="text-danger">*</span></label>
                                <textarea   name="designation" class="form-control" id="designation"  >{{$bilans->designation }}</textarea>
                                @error('designation')
                                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                            <div class="form-group p-2">
                                <label for="montant">Montant <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="montant" id="montant"   value="{{$bilans->montant }}">
                                @error('montant')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

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

@extends('layouts.app')

@section('content')
    <div class="container m-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1>Etablissement du bilan</h1>
                            <a href="{{route('news.index')}}" class="btn btn-success my-3">See a news</a>
                        </div>
                        <form method="POST" action="{{route('news.update',$news->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="m-1" for="val-username">Titre
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" value="{{$news->titre }}" class="form-control" id="val-username" name="titre" placeholder="Enter a title..">
                                @error('titre')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="m-1" for="val-username">Date
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="date" value="{{$news->date }}" class="form-control" id="val-username" name="date">
                                @error('date')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="m-1" for="val-suggestions">Description <span
                                        class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="Enter description">{{$news->description }}</textarea>
                                @error('description')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            {{-- <div class="form-group ">
                                <label class="m-1" for="val-username">Image
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file" onchange="newloadFile(event)" value="{{ $news->image }}" class="form-control" id="upload" name="image"/>
                                <div>
                                    <a href="{{route('delete.image',$news->id)}}" class="btn btn-outline-danger">Supprimer l'image du livre</a>
                                    <img src="{{!empty($news->image) ? asset('image/'.$news->image) : ''}}" class="img-rounded" style="width: 80px; height: 80px; border:1px solid #000;" id="imagedit">
                                </div>
                                @error('image')
                                    <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" class="submit" name="createnews">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

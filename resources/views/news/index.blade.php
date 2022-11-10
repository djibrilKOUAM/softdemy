@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body m-4">
            <h1 class="text-center">News</h1>
            <div class="d-flex justify-content-center">
                <a href="{{route('news.create')}}" class="btn btn-success my-4">Nouvel actualité</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->titre }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{-- <img src="{{!empty($item->livre->image) ? asset('image/'.$item->imag):''}}" class="img-circle" style="width: 80px; height: 80px;" alt="Book Image"/> --}}
                            @if (!empty($item->image))
                                <img src="{{ asset('image/'.$item->image)}}" class="img-rounded img-circle" style="width: 80px; height: 80px; border:1px solid #0000;"/>
                            @endif
                        </td>
                        <td>

                            <a href="{{route('news.edit',$item->id)}}" class="btn btn-warning">Modifier</a>
                            <a href="{{route('deletenews',$item->id)}}" id="delete" title="delete" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;font-size: 20px">Aucune actualité enregistré</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection

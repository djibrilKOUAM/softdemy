@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body m-4">
            <h1 class="text-center">Bilan</h1>
            <div class="d-flex justify-content-center">

                <a href="{{route('bilans.create')}}" class="btn btn-success m-4">Créer un article</a>

                {{-- <a href="#news" class="btn btn-success m-4">See a news</a> --}}

                {{-- <a href="#formations" class="btn btn-success m-4">Toutes les formations</a> --}}

                <h1 class="btn btn-success m-4">Total : {{$bilan_total}} Fcfa</h1>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Disignation</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Crée le</th>
                        <th scope="col">Modifié le</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($bilans as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->designation }}</td>
                        <td>{{ $item->montant }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>

                            <a href="{{route('bilans.edit',$item->id)}}" class="btn btn-warning">Modifier</a>
                            {{-- <a href="{{route('delete',$item->id)}}" id="delete" title="delete" class="btn btn-danger btn-sm">Supprimer</a> --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;font-size: 20px">Bilan vide</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>

    <div class="card" id="news">
        <div class="card-body m-4">
            <h1 class="text-center">Actualité| News| événement</h1>
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
                        <td colspan="8" style="text-align:center;font-size: 20px">Bilan vide</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>

    <div class="card" id="formations">
        <div class="card-body m-4">
            <h1 class="text-center">Nos formations</h1>
            <div class="d-flex justify-content-center">
                <a href="{{route('formations.create')}}" class="btn btn-success my-4">Nouvel formation</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Module</th>
                        <th scope="col">Sous Module</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($formations as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->module }}</td>
                        <td>{{ $item->sousmodule }}</td>
                        <td>{{ $item->description }}</td>

                        <td>

                            <a href="{{route('formations.edit',$item->id)}}" class="btn btn-warning">Modifier</a>
                            <a href="{{route('formations.delete',$item->id)}}" id="delete" title="delete" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;font-size: 20px">Aucune Formation enregistrer</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection

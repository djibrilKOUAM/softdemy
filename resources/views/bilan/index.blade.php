@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body m-4">
            <h1 class="text-center">Bilan</h1>
            <div class="d-flex justify-content-center">

                <a href="{{route('bilans.create')}}" class="btn btn-success m-4">Créer un article</a>

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
@endsection

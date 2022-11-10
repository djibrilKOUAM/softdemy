@extends('layouts.app')

@section('content')

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

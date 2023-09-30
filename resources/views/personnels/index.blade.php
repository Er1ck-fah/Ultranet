@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produits Service Table</h3>
            <div class="card-tools">
                <a href="{{ route('personnels.create') }}" class="btn btn-primary"><i class="bi bi-shield-plus"></i> Nouveau Personnel</a>
            </div>
        </div>

        <div class="card-body table-responsive p-0 table-striped table-hover">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name and Surname</th>
                        <th>Date and place of birth</th>
                        <th>Date creation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($personnels as $personnel)
                        <tr>
                            <td>{{ $personnel->id }}</td>
                            <td>{{ $personnel->matricule }}</td>
                            <td>{{ $personnel->nom }} {{ $personnel->prenom }}</td>
                            <td>{{ $personnel->datenaisse }} à {{ $personnel->lieunaisse }}</td>
                            <td>{{ $personnel->created_at }}</td>
                            <td>
                                <a href="{{ route('personnels.show', $personnel->id) }}" class="btn btn-sm btn-success mb-2"><i class="bi bi-eyeglasses"></i></a>
                                <a href="{{ route('personnels.edit', $personnel->id) }}" class="btn btn-sm btn-warning mb-2"><i class="bi bi-pen"></i></a>
                                <form method="POST" action="{{ route('personnels.destroy', $personnel->id) }}">
                                    @csrf
                                    @method('put')
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm mb-2"
                                    data-toggle="tooltip" title='Delete'><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td><i class="bi bi-folder2-open"></i> No Record found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Affectation Service Table</h3>
            <div class="card-tools">
                <a href="{{ route('personneldepartement.create') }}" class="btn btn-primary"><i class="bi bi-shield-plus"></i> Nouvelle Affectation</a>
            </div>
        </div>

        <div class="card-body table-responsive p-0 table-striped table-hover">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Services</th>
                        <th>Personnel</th>
                        <th>Date Affectation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($affectations as $affectation)
                        <tr>
                            <td>{{ $affectation->id }}</td>
                            <td>{{ $affectation->lib_departement }}</td>
                            <td>{{ $affectation->nom }} {{ $affectation->prenom }}</td>
                            <td>{{ $affectation->affectation }}</td>
                            <td>
                                <a href="{{ route('personneldepartement.show', $affectation->id) }}" class="btn btn-sm btn-success mb-2"><i class="bi bi-eyeglasses"></i></a>
                                <a href="{{ route('personneldepartement.edit', $affectation->id) }}" class="btn btn-sm btn-warning mb-2"><i class="bi bi-pen"></i></a>
                                <form method="POST" action="{{ route('personneldepartement.destroy', $affectation->id) }}">
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

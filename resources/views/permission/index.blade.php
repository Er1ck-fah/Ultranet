@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Permission Table</h3>
            <div class="card-tools">
                <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="bi bi-shield-plus"></i> Creer
                    nouvelle permission</a>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date creation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->created_at }}</td>
                            <td>
                                <a href="{{ route('permission.edit', $permission->id) }}"
                                    class="btn btn-sm btn-warning">Modifier Permission</a>
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

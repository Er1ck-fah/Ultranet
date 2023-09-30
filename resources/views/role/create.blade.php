@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creer Role</h3>
            <div class="card-tools">
                <a href="{{ route('roles.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Role</a>
            </div>
        </div>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="name" class="form-label">Libelle Role</label>
                    <input type="text" name="name" id="name" class="form-control rounded-0"
                        value="{{ old('name') }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Enregister
                    Role</button>
            </div>
        </form>

    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creer permission</h3>
            <div class="card-tools">
                <a href="{{ route('permission.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    permissions</a>
            </div>
        </div>

        <form action="{{ route('permission.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="name" class="form-label">Libelle Permission</label>
                    <input type="text" name="name" id="name" class="form-control rounded-0"
                        value="{{ old('name') }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Enregister
                    Permission</button>
            </div>
        </form>

    </div>
@endsection

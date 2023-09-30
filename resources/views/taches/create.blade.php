@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creer tache
                
            </h3>
            <div class="card-tools">
                <a href="{{ route('taches.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Taches</a>
            </div>
        </div>

        <form action="{{ route('taches.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_tache" class="form-label">Code  Tache *</label>
                    <input type="text" name="code_tache" id="code_tache" class="form-control rounded-0"
                        value="{{old('code_tache') }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_tache" class="form-label">Libelle Tache   *</label>
                    <input type="text" name="lib_tache" id="lib_tache" class="form-control rounded-0"
                        value="{{ old('lib_tache') }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_tache" class="form-label">Description Tache </label>
                    <textarea name="designation_tache" id="designation_tache" class="form-control rounded-0">
                        {{ old('designation_tache') }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Enregister
                    Tache</button>
            </div>
        </form>

    </div>
@endsection

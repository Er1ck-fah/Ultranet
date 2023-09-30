@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Taches</h3>
            <div class="card-tools">
                <a href="{{ route('taches.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Taches</a>
            </div>
        </div>

        <form action="{{route('taches.update',$tache->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_tache" class="form-label">Code Taches *</label>
                    <input type="text" name="code_tache" id="code_tache" class="form-control rounded-0"
                        value="{{ old('code_tache',$tache->code_tache) }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_tache" class="form-label">Libelle Taches *</label>
                    <input type="text" name="lib_tache" id="lib_tache" class="form-control rounded-0"
                        value="{{ old('lib_tache',$tache->lib_tache) }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_tache" class="form-label">Description Taches</label>
                    <textarea name="designation_tache" id="designation_tache" class="form-control rounded-0" rows="3">{{ old('designation_tache',$tache->designation_tache) }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    tache</button>
            </div>
        </form>

    </div>
@endsection

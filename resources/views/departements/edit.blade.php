@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Departement</h3>
            <div class="card-tools">
                <a href="{{ route('departements.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Departement</a>
            </div>
        </div>

        <form action="{{route('departements.update',$departement->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_departement" class="form-label">Code Departement *</label>
                    <input type="text" name="code_departement" id="code_departement" class="form-control rounded-0"
                        value="{{ old('code_departement',$departement->code_departement) }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_departement" class="form-label">Libelle Departement *</label>
                    <input type="text" name="lib_departement" id="lib_departement" class="form-control rounded-0"
                        value="{{ old('lib_departement',$departement->lib_departement) }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_departement" class="form-label">Description Departement</label>
                    <textarea name="designation_departement" id="designation_departement" class="form-control rounded-0">
                        {{ old('designation_departement',$departement->designation_departement) }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Modifier
                    Departement</button>
            </div>
        </form>

    </div>
@endsection

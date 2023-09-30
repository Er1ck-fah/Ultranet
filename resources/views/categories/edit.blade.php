@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Categorie</h3>
            <div class="card-tools">
                <a href="{{ route('categories.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Agences</a>
            </div>
        </div>

        <form action="{{route('categories.update',$categorie->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_categorie" class="form-label">Code Categorie *</label>
                    <input type="text" name="code_categorie" id="code_categorie" class="form-control rounded-0"
                        value="{{ old('code_categorie',$categorie->code_categorie) }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_categorie" class="form-label">Libelle Categorie *</label>
                    <input type="text" name="lib_categorie" id="lib_categorie" class="form-control rounded-0"
                        value="{{ old('lib_categorie',$categorie->lib_categorie) }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_categorie" class="form-label">Description Categorie</label>
                    <textarea name="designation_categorie" id="designation_categorie" class="form-control rounded-0">
                        {{ old('designation_categorie',$categorie->designation_categorie) }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Categorie</button>
            </div>
        </form>

    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Magasin</h3>
            <div class="card-tools">
                <a href="{{ route('magasins.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Magasin</a>
            </div>
        </div>

        <form action="{{route('magasins.update',$magasin->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_magasin" class="form-label">Code Magasin *</label>
                    <input type="text" name="code_magasin" id="code_magasin" class="form-control rounded-0"
                        value="{{ old('code_magasin',$magasin->code_magasin) }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_magasin" class="form-label">Libelle Magasin *</label>
                    <input type="text" name="lib_magasin" id="lib_magasin" class="form-control rounded-0"
                        value="{{ old('lib_magasin',$magasin->lib_magasin) }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_magasin" class="form-label">Description Agence</label>
                    <textarea name="designation_magasin" id="designation_magasin" class="form-control rounded-0">
                        {{ old('designation_magasin',$magasin->designation_magasin) }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Magasin</button>
            </div>
        </form>

    </div>
@endsection

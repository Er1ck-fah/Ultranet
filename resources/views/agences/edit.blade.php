@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Agence</h3>
            <div class="card-tools">
                <a href="{{ route('agences.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    Agences</a>
            </div>
        </div>

        <form action="{{route('agences.update',$agence->id)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="code_agence" class="form-label">Code Agence *</label>
                    <input type="text" name="code_agence" id="code_agence" class="form-control rounded-0"
                        value="{{ old('code_agence',$agence->code_agence) }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_agence" class="form-label">Libelle Agence *</label>
                    <input type="text" name="lib_agence" id="lib_agence" class="form-control rounded-0"
                        value="{{ old('lib_agence',$agence->lib_agence) }}" required>
                </div>
                <div class="form-group">
                    <label for="adresse_agence" class="form-label">Adresse Agence</label>
                    <input type="text" name="adresse_agence" id="adresse_agence" class="form-control rounded-0"
                        value="{{ old('adresse_agence',$agence->adresse_agence) }}">
                </div>
                <div class="form-group">
                    <label for="tel_agence" class="form-label">Telephone Agence</label>
                    <input type="text" name="tel_agence" id="tel_agence" class="form-control rounded-0"
                        value="{{ old('tel_agence',$agence->tel_agence)}}">
                </div>
                <div class="form-group">
                    <label for="designation_agence" class="form-label">Description Agence</label>
                    <textarea name="designation_agence" id="designation_agence" class="form-control rounded-0">
                        {{ old('designation_agence',$agence->designation_agence) }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Agence</button>
            </div>
        </form>

    </div>
@endsection

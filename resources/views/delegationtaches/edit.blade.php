@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Affectation</h3>
            <div class="card-tools">
                <a href="{{ route('personneldepartement.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i>
                    Visualiser
                    Affectation</a>
            </div>
        </div>

        <form action="{{ route('personneldepartement.update', $info_affectation[0]->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Services *</label>
                    <select name="lib_departement" id="lib_departement" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($services as $service)
                            @if ($service->id === $info_affectation[0]->iddepartement)
                                <option value="{{ $service->id }}" selected>{{ $service->lib_departement }}</option>
                            @endif
                            <option value="{{ $service->id }}">{{ $service->lib_departement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Personnels *</label>
                    <select name="name" id="name" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($personnels as $personnel)
                            @if ($personnel->id === $info_affectation[0]->idpersonnel)
                                <option value="{{ $personnel->id }}" selected>{{ $personnel->nom }} {{ $personnel->nom }}</option>
                            @endif
                            <option value="{{ $personnel->id }}">{{ $personnel->nom }} {{ $personnel->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Affectation</button>
            </div>
        </form>

    </div>
@endsection

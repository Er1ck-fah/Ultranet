@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creer Affectation</h3>
            <div class="card-tools">
                <a href="{{ route('personneldepartement.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i>
                    Visualiser
                    Affectation</a>
            </div>
        </div>

        <form action="{{ route('personneldepartement.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Services *</label>
                    <select name="lib_departement" id="lib_departement" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($services as $service)
                            <option value="{{$service->id}}">{{$service->lib_departement}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Personnels *</label>
                    <select name="name" id="name" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($personnels as $personnel)
                            <option value="{{$personnel->id}}">{{$personnel->nom}} {{$personnel->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Enregister
                    Affectation</button>
            </div>
        </form>

    </div>
@endsection

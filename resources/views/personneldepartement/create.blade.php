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
                    <label for="idagence" class="form-label">Agences *</label>
                    <select name="idagence" id="idagence" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($agences as $agence)
                            <option value="{{$agence->id}}">{{$agence->lib_agence}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="iddepartement" class="form-label">Services *</label>
                    <select name="iddepartement" id="iddepartement" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($services as $service)
                            <option value="{{$service->id}}">{{$service->lib_departement}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idpersonnel" class="form-label">Personnels *</label>
                    <select name="idpersonnel" id="idpersonnel" class="form-control rounded-0">
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

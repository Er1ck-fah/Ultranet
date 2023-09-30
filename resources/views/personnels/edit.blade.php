@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Personnel</h3>
            <div class="card-tools">
                <a href="{{ route('personnels.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    les Produits</a>
            </div>
        </div>

        <form action="{{ route('personnels.update', $personnel[0]->idpersonnel) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="row g-3">
                    <div class="col-md-12 d-flex">
                        <img class="img-thumbnail rounded mx-auto d-block" src="{{ url('dist/assets/img/avatar.png') }}"
                        alt="">
                    </div>
                </div>
                <div class="row g-3">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Matricule</label>
                        <input type="text" class="form-control"
                            value="{{ old('matricule', $personnel[0]->matricule) }}" disabled required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" name="nom" class="form-control" id="nom"
                            value="{{ old('nom', $personnel[0]->nom) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" id="prenom"
                            value="{{ old('prenom', $personnel[0]->prenom) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="datenaisse" class="form-label">Date naissance</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="datenaisse" name="datenaisse"
                                aria-describedby="inputGroupPrepend"
                                value="{{ old('datenaisse', $personnel[0]->datenaisse) }}" required>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Lieu naissance</label>
                        <input type="text" class="form-control" name="lieunaiss" id="lieunaiss"
                            value="{{ old('lieunaiss', $personnel[0]->lieunaisse) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" name="genre" id="genre" required>
                            <option value="">Choose...</option>
                            @if ($personnel[0]->genre === 'M')
                                <option value="M" selected>Masculin</option>
                                <option value="F">Feminin</option>
                            @else
                                <option value="F" selected>Feminin</option>
                                <option value="M">Masculin</option>
                            @endif
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo">
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="inputGroupPrepend" value="{{ old('email', $personnel[0]->email) }}" />
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone"
                            value="{{ old('telephone', $personnel[0]->telephone) }}" />
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Produit</button>
            </div>
        </form>

    </div>
@endsection

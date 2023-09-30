@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Creer Personnel</h3>
            <div class="card-tools">
                <a href="{{ route('personnels.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    personnel</a>
            </div>
        </div>

        <form action="{{ route('personnels.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="categorie_personnel" class="form-label">Services personnel *</label>
                    <select name="categorie_personnel" id="categorie_personnel" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($departements as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->lib_departement }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row g-3">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" name="nom" class="form-control" id="nom" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" id="prenom" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="datenaisse" class="form-label">Date naissance</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="datenaisse" name="datenaisse"
                                aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Lieu naissance</label>
                        <input type="text" class="form-control" name="lieunaiss"  id="lieunaiss" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" name="genre" id="genre" required>
                            <option selected value="">Choose...</option>
                            <option value="M">Masculin</option>
                            <option value="F">Feminin</option>
                        </select>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" >
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="inputGroupPrepend">
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Enregister personnel</button>
            </div>
        </form>

    </div>
@endsection

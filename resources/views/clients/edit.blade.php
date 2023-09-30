@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Client</h3>
            <div class="card-tools">
                <a href="{{ route('clients.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    les Produits</a>
            </div>
        </div>

        <form action="{{ route('clients.update', $client->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="row g-3">
                    <div class="col-md-12 d-flex">
                        <img class="img-thumbnail rounded mx-auto d-block" src="{{ url('dist/assets/img/avatar.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Matricule</label>
                    <input type="text" class="form-control" value="{{ old('code_client', $client->code_client) }}"
                        disabled required>
                </div>
                <div class="row g-3">
                    <!--begin::Col-->
                   
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="name_client" class="form-label">First name</label>
                        <input type="text" name="name_client" class="form-control" id="name_client"
                            value="{{ old('name_client', $client->name_client) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="surname_client" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="surname_client" name="surname_client"
                            value="{{ old('surname_client', $client->surname_client) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="datenaissance_client" class="form-label">Date naissance</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="datenaissance_client" name="datenaissance_client"
                                aria-describedby="inputGroupPrepend"
                                value="{{ old('datenaissance_client', $client->datenaissance_client) }}" required>
                        </div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="lieunaissance_client" class="form-label">Lieu naissance</label>
                        <input type="text" class="form-control" name="lieunaissance_client" id="lieunaissance_client"
                            value="{{ old('lieunaissance_client', $client->lieunaissance_client) }}" required>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" name="genre_client" id="genre_client" required>
                            <option value="">Choose...</option>
                            @if ($client->genre_client === 'M')
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
                        <label for="photo_client" class="form-label">Photo</label>
                        <input type="file" name="photo_client" class="form-control" id="photo_client">
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <label for="description_client" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description_client" name="description_client">
                            {{ old('description_client', $client->description_client) }} 
                        </textarea>
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Client</button>
            </div>
        </form>

    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="card col-8">
        <div class="card-header">
            <h3 class="card-title">Importer Produit via Fichier CSV</h3>
        </div>

        <form action="{{ route('produits.store') }}" method="POST">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Categorie Produit *</label>
                    <select name="categorie_produit" id="categorie_produit" class="form-control rounded-0">
                        <option value="-1" selected>-----------------</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->lib_categorie}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="code_agence" class="form-label">Code Produit *</label>
                    <input type="text" name="code_produit" id="code_produit" class="form-control rounded-0"
                        value="{{ old('code_produit') }}" required>
                </div>
                <div class="form-group">
                    <label for="lib_agence" class="form-label">Libelle Produit *</label>
                    <input type="text" name="lib_produit" id="lib_produit" class="form-control rounded-0"
                        value="{{ old('lib_produit') }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_agence" class="form-label">Description Produit</label>
                    <textarea name="designation_produit" id="designation_produit" class="form-control rounded-0">
                        {{ old('designation_produit') }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Enregister Produit</button>
            </div>
        </form>

    </div>
@endsection

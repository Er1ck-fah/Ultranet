@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Importer Produit via Fichier CSV</h3>
        </div>

        <form action="{{ route('saveImportProduits') }}" method="POST" enctype="multipart/form-data">
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
                    <input type="file" name="import_csv" id="import_csv" class="form-control rounded-0"
                        value="{{ old('import_csv') }}" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Importer Produits</button>
            </div>
        </form>

    </div>
@endsection

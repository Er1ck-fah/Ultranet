@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Importer Categories via Fichier CSV</h3>
            <div class="card-tools">
                <a href="{{ route('exportCategories') }}" class="btn btn-primary"><i class="bi bi-shield-plus"></i> Exporter Categories</a>
            </div>
        </div>
        <form action="{{ route('importSaveCategories') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body ">
                <div class="form-group">
                    <label for="import_csv" class="form-label">Fichier Excel (xlsx / csv) Catehories Produits *</label>
                    <input type="file" name="import_csv" id="import_csv" class="form-control rounded-0" required>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Importer Categories</button>
            </div>
        </form>

    </div>
@endsection

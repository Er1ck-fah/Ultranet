@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modifier information Produit</h3>
            <div class="card-tools">
                <a href="{{ route('produits.index') }}" class="btn btn-primary"><i class="bi bi-eye"></i> Visualiser
                    les Produits</a>
            </div>
        </div>

        <form action="{{ route('produits.update', $produit[0]->id_produit) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body ">
                <div class="form-group">
                    <label for="categorie_produit" class="form-label">Categorie Produit *</label>
                    <select name="categorie_produit" id="categorie_produit" class="form-control rounded-0">
                        <option value="">-----------------</option>

                        @foreach ($categories as $categorie)
                            @if ($categorie->id === $produit[0]->id_categories)
                                <option value="{{ $produit[0]->id_categories }}" selected>{{ $produit[0]->lib_categorie }}
                                </option>
                            @else
                                <option value="{{ $categorie->id }}">{{ $categorie->lib_categorie }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="code_produit" class="form-label">Code Produit * {{ $produit[0]->id_categories }}</label>
                    <input type="text" name="code_produit" id="code_produit" class="form-control rounded-0"
                        value="{{ old('code_produit', $produit[0]->code_produit) }}" required disabled>
                </div>
                <div class="form-group">
                    <label for="lib_produit" class="form-label">Libelle Produit *</label>
                    <input type="text" name="lib_produit" id="lib_produit" class="form-control rounded-0"
                        value="{{ old('lib_produit', $produit[0]->lib_produit) }}" required>
                </div>
                <div class="form-group">
                    <label for="designation_produit" class="form-label">Description Produit</label>
                    <textarea name="designation_produit" id="designation_produit" class="form-control rounded-0">
                        {{ old('designation_produit', $produit[0]->designation_produit) }}
                    </textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Modifier
                    Produit</button>
            </div>
        </form>

    </div>
@endsection

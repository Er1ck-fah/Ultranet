@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produits Service Table</h3>
            <div class="card-tools">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" name="searchProduits" id="searchProduits" class="form-control" placeholder="Rechercher Produit..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <a href="{{ route('exportProduits') }}" class="btn btn-success"><i class="bi bi-shield-plus"></i> Exporter</a>

                <a href="{{ route('produits.create') }}" class="btn btn-primary"><i class="bi bi-shield-plus"></i>
                    Nouveau</a>
            </div>
        </div>

        <div class="card-body table-responsive p-0 table-striped table-hover">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Date creation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->code_produit }}</td>
                            <td>{{ $produit->lib_produit }}</td>
                            <td>{{ $produit->created_at }}</td>
                            <td>
                                <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-sm btn-success mb-2"><i
                                        class="bi bi-eyeglasses"></i></a>
                                <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-sm btn-warning mb-2"><i
                                        class="bi bi-pen"></i></a>
                                <form method="POST" action="{{ route('produits.destroy', $produit->id) }}">
                                    @csrf
                                    @method('put')
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm mb-2" data-toggle="tooltip"
                                        title='Delete'><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td><i class="bi bi-folder2-open"></i> No Record found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
@endsection

@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Montant Produit Service Table</h3>
            <div class="card-tools">
            </div>
        </div>

        <div class="card-body table-responsive p-0 table-striped table-hover">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Produit</th>
                        <th>Montant Min</th>
                        <th>Montant Max</th>
                        <th>Disponible</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 0)
                    @forelse ($datas as $produit)
                            @php($count++)
                            <form method="POST" action="{{route('montant.save')}}" id="montant-produit_{{$produit->id}}">
                            <tr class="tr_{{$produit->id}}">
                                    @csrf
                                    <td>{{ $count }}</td>
                                    <td>{{ $produit->code_produit }}<input type="text" value="{{ $produit->categorie_id }}"
                                        name="categorie_id{{$produit->id}}" id="categorie_id{{$produit->id}}" hidden /></td>
                                    <td>{{ $produit->lib_produit }}<input type="text" value="{{ $produit->id }}"
                                            name="idproduit_{{$produit->id}}" id="idproduit_{{$produit->id}}" hidden /></td>
                                    <td><input type="text" value="{{ $produit->prix_unitaire }}" id="valeur_min_{{$produit->id}}" name="valeur_min_{{$produit->id}}" />
                                    </td>
                                    <td><input type="text" value="{{ $produit->prix_unitaire }}" id="valeur_max_{{$produit->id}}" name="valeur_max_{{$produit->id}}" />
                                    </td>
                                    @if ($produit->is_produit == 1)
                                        <td><input type="checkbox" value="1" name="is_sale_{{$produit->id}}" id="is_sale_{{$produit->id}}" checked /></td>
                                    @else
                                        <td><input type="checkbox" value="0" name="is_sale_{{$produit->id}}" id="is_sale_{{$produit->id}}" /></td>
                                    @endif
                                    <td>
                                        <input name="_method" id="method" type="hidden" value="POST">
                                        <button type="button" class="btn btn-success btn-sm mb-2 btn-montant" data-toggle="tooltip"
                                            title='Valider' id="{{$produit->id}}"><i class="bi bi-check"></i>Valider</button>
                                    </td>
                                </tr>
                            </form>
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

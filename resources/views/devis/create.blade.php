@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informations Client</h3>
                </div>

                <div class="card-body">
                    <div class="">
                        <select class="form-control col-md-6" id="search" name="client_id">
                        </select>
                    </div>

                    <div id="accordion" class="mt-3">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title w-100 white">
                                    Details Client
                                </h4>
                            </div>
                            <div class="card card-body">
                                <!--begin::Col-->
                                <!--end::Col-->
                                <div class="col-md-6 float-start">
                                    <img src="{{ url('dist/assets/img/avatar.png') }}" alt=""
                                        class="img-fluid img-thumbnail">
                                </div>
                                <div class="row g-2 ">
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        {{-- {{ Form::text('name_client[]', null, ['class' => 'form-control form-control-solid']) }} --}}
                                        <input type="text" name="nom" class="form-control" id="nom"
                                            value="{{ old('name_client') }}"required>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <label for="prenom" class="form-label">Prénom</label>
                                        {{-- {{ Form::text('surname_client[]', null, ['class' => 'form-control form-control-solid']) }} --}}
                                        <input type="text" class="form-control" id="prenom" name="prenom"
                                            value="{{ old('surname_client') }}" id="prenom" required>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <label for="datenaisse" class="form-label">Code client</label>
                                        <div class="input-group has-validation">
                                            {{-- {{ Form::text('code_client[]', null, ['class' => 'form-control form-control-solid']) }} --}}
                                            <input type="text" class="form-control" id="code_client" name="code_client"
                                                aria-describedby="inputGroupPrepend" value=""
                                                value="{{ old('code_client') }}" disabled>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone"
                                            value="{{ old('code_produit') }}">
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Description</label>
                                        <div class="input-group has-validation">
                                            {{-- {{ Form::textarea('description_client[]', null, ['class' => 'form-control form-control-solid']) }} --}}
                                            <textarea>{{ old('description_client') }}</textarea>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-7">
            <div class="card-header">
                <div class="card-title">Detail Dévis</div>
                <div class="card-tools">
                    <a href="#" id="addTr" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <td>Designation</td>
                            <td>Prix Unitaire</td>
                            <td>Quantité</td>
                            <td>Total</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr class="ligne_produit">
                            <td>
                                <select name="id_produit" id="id_produit" class="form-control rounded-0 id_produit_1">
                                    <option value="-1" selected>-----------------</option>
                                    @foreach ($produits as $produit)
                                        <option value="{{ $produit->id }}">{{ $produit->lib_produit }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control prix_unitaire_1" id="prix_unitaire" name="prix_unitaire"
                                    aria-describedby="inputGroupPrepend" />
                            </td>
                            <td>
                                <button id="minus" class="btn btn-success">−</button>
                                <input type="text" value="1" id="quantite" class="col-4 quantite_1" />
                                <button id="plus" class="btn btn-danger">+</button>
                            </td>
                            <td>
                                <input type="text" class="form-control total_produit_1" id="total_produit" name="total_produit"
                                    aria-describedby="inputGroupPrepend" />
                            </td>
                            <td>
                                <a href="#" id="deleteTr" class="btn btn-danger"><i
                                        class="bi bi-x-circle-fill"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-center">Total HT</td>
                            <td colspan="2"><span></span></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">Total TTC</td>
                            <td colspan="2"><span></span></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Enregister Devis</button>
            </div>
        </div>
    </div>
@endsection

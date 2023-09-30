<?php

namespace App\Http\Controllers;

use App\Models\Categories_produits;
use App\Models\Clients;
use Illuminate\Http\Request;

class AjaxController extends Controller
{


    public function submitMontantProduit(Request $request)
    {
        if ($request->ajax()) {
            $nb = Categories_produits::where('id_produit', '=', $request->idproduit)
                ->count();
            try {
                if ($nb === 0) {
                    $cat_prod = new Categories_produits();
                    $cat_prod->id_categories = intval($request->categorie_id);
                    $cat_prod->id_produit = intval($request->idproduit);
                    $cat_prod->valeur_min = bcadd($request->valeur_min, '0', 2);
                    $cat_prod->valeur_max = bcadd($request->valeur_max, '0', 2);
                    $cat_prod->is_sale = intval($request->is_sale);
                    $cat_prod->save();
                    return response()->json(array('msg' => "success"), 200);
                }
            } catch (\Throwable $th) {
                //     $msg = "error";
                return response()->json(array('msg' => 'echec'), 500);
            }
        } else {
            $nb = Categories_produits::where('id_produit', '=', 1)
                ->count();
            echo $nb;
        }
    }

    public function editMontantProduit(Request $request)
    {
        if ($request->ajax()) {
            try {
                // $cat_prod = Categories_produits::where("id_produit", intval($request->idproduit))->first();
                // $cat_prod->id_categories = intval($request->categorie_id);
                // $cat_prod->id_produit = intval($request->idproduit);
                // $cat_prod->valeur_min = bcadd($request->valeur_min, '0', 2);
                // $cat_prod->valeur_max = bcadd($request->valeur_max, '0', 2);
                // $cat_prod->is_sale = intval($request->is_sale);
                // $cat_prod->save();
                return response()->json(
                    array(
                        'msg' => $request->categorie_id
                    ),
                    200
                );
            } catch (\Throwable $th) {
                return response()->json(array('msg' => 'echec'), 500);
            }
        }
    }

    public function editMontantView()
    {
        $datas = Categories_produits::join('produits', 'produits.id', '=', 'categories_produits.id_produit')
            ->get();
        dd($datas);
        return view('produits.edit_montant', ['datas' => $datas]);
    }

    public function autocomplete(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $data = Clients::query()
                ->where('name_client', 'iLIKE', '%' . $search . '%')
                ->orWhere('surname_client', 'iLIKE', '%' . $search . '%')
                ->get();
        }
        return response()->json($data);
    }

    public function getInfoProduit(Request $request)
    {
        try {
            $data = Categories_produits::where("id_produit", "=", $request->id)
                ->get();
            return response()->json(array('produit' => $data[0], 'msg' => 'ok'), 200);
        } catch (\Throwable $th) {
            return response()->json(array('msg' => 'echec'), 500);
        }
    }
}

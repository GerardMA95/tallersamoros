<?php

namespace App\Http\Controllers\Entity\Item;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Entity\Item\RelatedItemsService;

class ItemController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  string  $patent
     * @param  string  $category
     * @return Response
     */
    public function list($patent, $category)
    {
        $itemList = array();

        if ($category !== 'none' && $patent !== 'none') {
            //Si se busca por cualquier marca/categoria
            if($category === 'all' && $patent === 'all'){
                $itemList = DB::table('item')->where('outlet', false)->orderBy('priority')->paginate(9);
            }else{
                //Si se busca una marca y una categoria en concreto
            }
        //Se busca solo por categoria
        }else if($category !== 'none'){
            //Por una categoria en concreto
            if($category !== 'all'){
                $categoryId = DB::table('category')->where('short_name', $category)->first();
                //Si la categoria es correcta
                if(!is_null($categoryId)){
                    $itemList = DB::table('item')->where('id_category', $categoryId->id)->orderBy('priority', 'asc')->paginate(9);
                }else{
                    //Si la categoria buscada no existe $itemList estará vacío
                }
            }else{
                //Todas las categorias
                $itemList = DB::table('item')->get();
            }
        }else if($patent !== 'none'){
            if($patent !== 'all'){
                $patentId = DB::table('patent')->where('short_name', $patent)->first();
                if(!is_null($patentId)){
                    $itemList = DB::table('item')->where('id_patent', $patentId->id)->orderBy('priority', 'asc')->paginate(9);
                }else{
                    //Si la marca buscada no existe $itemList estará vacío
                }
            }else{
                //Todas las marcas
                $itemList = DB::table('item')->paginate(9);
            }
        }

        return view('item.itemList', ['itemList' => $itemList, 'category' => $category , 'patent' => $patent]);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  string  $patent
     * @param  string  $category
     * @param  string  $itemShortName
     * @return Response
     */
    public function description($patent, $category, $itemShortName)
    {
        //Si no se encuentra el item deseado devolvemos null.
        $features = null;

        $item = DB::table('item')->where('short_name', $itemShortName)->first();

        //Si se ha encontrado el item
        if(!is_null($item)){
            $patent = DB::table('patent')->where('id', $item->id_patent)->first();
            $category = DB::table('category')->where('id', $item->id_category)->first();

            $itemFeatures = DB::table('item_feature')->where('id_item', $item->id)->get();
            if($itemFeatures->isNotEmpty()){
                $features = collect();
                foreach ($itemFeatures as $itemFeature) {
                    $arrayAux = array();

                    $feature = DB::table('feature')->where('id', $itemFeature->id_feature)->first();

                    $featureCategory = DB::table('feature_category')->where('id', $feature->id_feature_category)->first();

                    $arrayAux['featureName'] = $feature->name;
                    $arrayAux['featureDescription'] = $feature->description;
                    $arrayAux['featureCategory'] = $featureCategory->name;

                    $features->push($arrayAux);
                }
            }
        }

        $relatedItemsService = new RelatedItemsService();
        $relatedItems = $relatedItemsService->getRelatedItems($item);

        return view('item.itemDescription', ['item' => $item, 'features' => $features, 'itemCategory' => $category, 'itemPatent' => $patent, 'relatedItems' => $relatedItems]);
    }

    /**
     * Show every outlet Item
     *
     * @return Response
     */
    public function outlet()
    {
        $itemList = DB::table('item')->where('outlet', true)->paginate(9);
        return view('item.itemListOutlet', ['itemList' => $itemList]);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  string  $itemShortName
     * @return Response
     */
    public function outletDescription($itemShortName)
    {
        //Si no se encuentra el item deseado devolvemos null.
        $features = null;

        $item = DB::table('item')->where('short_name', $itemShortName)->first();

        //Si se ha encontrado el item
        if(!is_null($item)){
            $patent = DB::table('patent')->where('id', $item->id_patent)->first();
            $category = DB::table('category')->where('id', $item->id_category)->first();

            $itemFeatures = DB::table('item_feature')->where('id_item', $item->id)->get();
            if($itemFeatures->isNotEmpty()){
                $features = collect();
                foreach ($itemFeatures as $itemFeature) {
                    $arrayAux = array();

                    $feature = DB::table('feature')->where('id', $itemFeature->id_feature)->first();

                    $featureCategory = DB::table('feature_category')->where('id', $feature->id_feature_category)->first();

                    $arrayAux['featureName'] = $feature->name;
                    $arrayAux['featureDescription'] = $feature->description;
                    $arrayAux['featureCategory'] = $featureCategory->name;

                    $features->push($arrayAux);
                }
            }
        }

        $relatedItemsService = new RelatedItemsService();
        $relatedItems = $relatedItemsService->getRelatedItems($item);

        return view('item.itemDescription', ['item' => $item, 'features' => $features, 'itemPatent' => $patent, 'itemCategory' => $category, 'relatedItems' => $relatedItems]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class relations extends Controller
{
    //model selection
    public function model($makeID)
    {
        $model = DB::table('product_specification_mapping')
            ->select('product_specification_mapping.*')
            ->where('make',$makeID)
            ->distinct("model")
            ->pluck("model","model");
        return json_encode($model);
    }

    //make selection
    public function make($manufacturerID)
    {
        $model = DB::table('product_specification_mapping')
            ->select('product_specification_mapping.*')
            ->where('manufacturer',$manufacturerID)
            ->distinct("make")
            ->pluck("make","make");
        return json_encode($model);
    }

    //engine selection
    public function engine($enginemanuID)
    {
        $model = DB::table('product_specification_mapping')
            ->select('product_specification_mapping.*')
            ->where('EngineManufacturer',$enginemanuID)
            ->distinct("Engine")
            ->pluck("Engine","Engine");
        return json_encode($model);
    }

    //engine-manufacturer selection
    public function enginemanu($modelID)
    {
        $model = DB::table('product_specification_mapping')
            ->select('product_specification_mapping.*')
            ->where('model',$modelID)
            ->distinct("EngineManufacturer")
            ->pluck("EngineManufacturer","EngineManufacturer");
        return json_encode($model);
    }



    //get final data
    public function getData($manufacturer,$model,$engine,$make,$enginemanu)
    {
        $alldata = DB::table('product_specification_mapping')
            ->join('products','products.excoPartNo','=','product_specification_mapping.excoPartNo')
            ->select('product_specification_mapping.*', 'products.*')

            ->where(function($q) use ($manufacturer, $model, $make, $engine, $enginemanu) {
                if ($engine == "ENGINE" && $enginemanu == "ENGINE-MANUFACTURER") {
                    $q->where('manufacturer', $manufacturer)
                        ->where('make', $make)
                        ->where('model', $model);
                }else{
                    $q->where('manufacturer', $manufacturer)
                        ->where('make', $make)
                        ->where('model', $model)
                        ->where('Engine', $engine)
                        ->where('EngineManufacturer', $enginemanu);
                }
            })
            ->get();

            return view('pages.resultproduct', compact('alldata'));
            //return response(json_encode($alldata));




    }
    //go to maincategories info
    function maincategories($id)
    {
//        $mydata = DB::table('categories')
//            ->select('categories.*')
//            ->where('id',$id)
        $mydata = $id;
        return view('pages.maincategories', compact('mydata'));
    }

    //go to singleproductpage info
    function singleproduct($id)
    {
        $mydata = DB::table('thirdcategory')
            ->select('thirdcategory.*')
            ->where('id',$id)
            ->get();
        return view('pages.singleproduct', compact('mydata'));
    }
    //go to product info
    function productinfo($id)
    {
       $mydata = DB::table('products')
           ->select('products.*')
           ->where('id',$id)
           ->get();
        return view('pages.productinfo', compact('mydata'));
    }

    //go to subcategory
    function subcategory($id)
    {
//        $mydata = DB::table('thirdcategory')
//            ->select('thirdcategory.*')
//            ->where('parent_id','=', $id)
//            ->get();
        $mydata = $id;
        return view('pages.subproduct', compact('mydata'));
    }

    function finalcategory($id)
    {
//        $mydata = DB::table('thirdcategory')
//            ->select('thirdcategory.*')
//            ->where('parent_id','=', $id)
//            ->get();
        $mydata = $id;
        return view('pages.finalproduct', compact('mydata'));
    }



}

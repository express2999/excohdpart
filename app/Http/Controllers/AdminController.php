<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    /*********** products ************/

    function bulkDelete()
    {
        DB::table('products')->truncate();

        return redirect()->back()->with('done', 'Products has been deleted successfully');

    }


    function deleteProduct($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('done', 'Product has been deleted successfully');
    }


    function newProduct(Request $request)
    {
        DB::table('products')
            ->insert(
                [
                    'excoPartNo' => $request->input('excopart'),
                    'name' => $request->input('productname'),
                    'shortDescription' => $request->input('shortdescription'),
                    'fullDescription' => $request->input('longdescription'),
                    'metaKeyword' => $request->input('metakeyword'),
                    'metaDescription' => $request->input('metadescription'),
                    'metaTitle' => $request->input('metatitle'),
                    'upc' => $request->input('upc'),
                    'isShipEnabled' => $request->input('isshipping') ? $request->input('isshipping') : 0,
                    'isFreeShipping' => $request->input('freeshipping') ? $request->input('freeshipping') : 0,
                    'shipSeparately' => $request->input('shippedSeparetly') ? $request->input('shippedSeparetly') : 0,
                    'additionalShippingCharge' => $request->input('additionalshipping'),
                    'isTaxExempt' => $request->input('taxexempt') ? $request->input('taxexempt') : 0,
                    'stockQuantity' => $request->input('stockquantity'),
                    'price' => $request->input('price'),
                    'productCost' => $request->input('productcost'),
                    'weight' => $request->input('productweight'),
                    'length' => $request->input('productlength'),
                    'width' => $request->input('productwidth'),
                    'height' => $request->input('productheight'),
                ]
            );
        return redirect()->back()->with('done', 'Products has been Added successfully');
    }

    function updateProduct(Request $request)
    {

        if ($request->hasFile('img')) {
            $avatarPath = $request->file('img');
            $avatarName = time() . '.' . $avatarPath->getClientOriginalExtension();

            $path = $request->file('img')->storeAs('products', $avatarName, 'public');
            $profile = '/storage/'.$path;
            //$profile->save();

            DB::table('products')
                ->where('id', $request->input('id'))
                ->update([
                    'excoPartNo' => $request->input('excopart'),
                    'name' => $request->input('productname'),
                    'image' => asset($profile),
                    'shortDescription' => $request->input('shortdescription'),
                    'fullDescription' => $request->input('longdescription'),
                    'metaKeyword' => $request->input('metakeyword'),
                    'metaDescription' => $request->input('metadescription'),
                    'metaTitle' => $request->input('metatitle'),
                    'upc' => $request->input('upc'),
                    'isShipEnabled' => $request->input('isshipping') ? $request->input('isshipping') : 0,
                    'isFreeShipping' => $request->input('freeshipping') ? $request->input('freeshipping') : 0,
                    'shipSeparately' => $request->input('shippedSeparetly') ? $request->input('shippedSeparetly') : 0,
                    'additionalShippingCharge' => $request->input('additionalshipping'),
                    'isTaxExempt' => $request->input('taxexempt') ? $request->input('taxexempt') : 0,
                    'stockQuantity' => $request->input('stockquantity'),
                    'price' => $request->input('price'),
                    'productCost' => $request->input('productcost'),
                    'weight' => $request->input('productweight'),
                    'length' => $request->input('productlength'),
                    'width' => $request->input('productwidth'),
                    'height' => $request->input('productheight'),]);

            $request->session()->flash('done','Product has been updated successfully!');
            return view('voyager::products.product');
        }else{
            DB::table('products')
                ->where('id', $request->input('id'))
                ->update([
                    'excoPartNo' => $request->input('excopart'),
                    'name' => $request->input('productname'),
                    'image' => "",
                    'shortDescription' => $request->input('shortdescription'),
                    'fullDescription' => $request->input('longdescription'),
                    'metaKeyword' => $request->input('metakeyword'),
                    'metaDescription' => $request->input('metadescription'),
                    'metaTitle' => $request->input('metatitle'),
                    'upc' => $request->input('upc'),
                    'isShipEnabled' => $request->input('isshipping') ? $request->input('isshipping') : 0,
                    'isFreeShipping' => $request->input('freeshipping') ? $request->input('freeshipping') : 0,
                    'shipSeparately' => $request->input('shippedSeparetly') ? $request->input('shippedSeparetly') : 0,
                    'additionalShippingCharge' => $request->input('additionalshipping'),
                    'isTaxExempt' => $request->input('taxexempt') ? $request->input('taxexempt') : 0,
                    'stockQuantity' => $request->input('stockquantity'),
                    'price' => $request->input('price'),
                    'productCost' => $request->input('productcost'),
                    'weight' => $request->input('productweight'),
                    'length' => $request->input('productlength'),
                    'width' => $request->input('productwidth'),
                    'height' => $request->input('productheight'),]);

            $request->session()->flash('done','Product has been updated successfully!');
            return view('voyager::products.product');
        }
    }

    /*********** products ************/





    /*********** sub-categories ************/

    /******** sub-category *********/

    function subcategoriesBulkDelete()
    {
        DB::table('subcategory')->truncate();

        return redirect()->back()->with('done', 'Sub-categories has been deleted successfully');

    }


    function addnewsubcategory(Request $request)
    {
        DB::table('subcategory')
            ->insert(
                [
                    'name' => $request->input('subcategoryname'),
                    'parent_id' => $request->input('parentsubcategory'),
                ]
            );
        $request->session()->flash('done','Sub-category has been Added successfully!');
        return view('voyager::categories.subcategory.sub-categories');


    }


    function deletesubcategory(Request $request, $id)
    {
        DB::table('subcategory')
            ->select('subcategory.*')
            ->where('id', $id)
            ->delete();
        $request->session()->flash('done', 'Sub-category has been deleted successfully!');
        return view('voyager::categories.subcategory.sub-categories');
    }


    function updateSubcategory(Request $request)
    {
        DB::table('subcategory')
        ->where('id', $request->input('id'))
        ->update([
            'name' => $request->input('subcategoryname'),
            'parent_id' => $request->input('parentsubcategory'),]);
        $request->session()->flash('done', 'Sub-category has been updated successfully!');
        return view('voyager::categories.subcategory.sub-categories');


        return $request->input('id');
    }

    /******** sub-category *********/




    /******** sub-category1 *********/

    function subcategory1BulkDelete()
    {
        DB::table('thirdcategory')->truncate();

        return redirect()->back()->with('done', 'Sub-categories has been deleted successfully');

    }


    function addnewsubcategory1(Request $request)
    {
        DB::table('thirdcategory')
            ->insert(
                [
                    'name' => $request->input('subcategoryname'),
                    'parent_id' => $request->input('parentsubcategory'),
                ]
            );
        $request->session()->flash('done','Sub-category has been Added successfully!');
        return view('voyager::categories.subcategory1.sub-categories');


    }


    function deletesubcategory1(Request $request, $id)
    {
        DB::table('thirdcategory')
            ->select('thirdcategory.*')
            ->where('id', $id)
            ->delete();
        $request->session()->flash('done', 'Sub-category has been deleted successfully!');
        return view('voyager::categories.subcategory1.sub-categories');
    }


    function updateSubcategory1(Request $request)
    {
        DB::table('thirdcategory')
            ->where('id', $request->input('id'))
            ->update([
                'name' => $request->input('subcategoryname'),
                'parent_id' => $request->input('parentsubcategory'),]);
        $request->session()->flash('done', 'Sub-category has been updated successfully!');
        return view('voyager::categories.subcategory1.sub-categories');


        return $request->input('id');
    }

    /******** sub-category1 *********/




    /******** sub-category2 *********/

    function subcategory2BulkDelete()
    {
        DB::table('finalcategory')->truncate();

        return redirect()->back()->with('done', 'Sub-categories has been deleted successfully');

    }


    function addnewsubcategory2(Request $request)
    {
        DB::table('finalcategory')
            ->insert(
                [
                    'name' => $request->input('subcategoryname'),
                    'parent_id' => $request->input('parentsubcategory'),
                ]
            );
        $request->session()->flash('done','Sub-category has been Added successfully!');
        return view('voyager::categories.subcategory2.sub-categories');


    }


    function deletesubcategory2(Request $request, $id)
    {
        DB::table('finalcategory')
            ->select('finalcategory.*')
            ->where('id', $id)
            ->delete();
        $request->session()->flash('done', 'Sub-category has been deleted successfully!');
        return view('voyager::categories.subcategory2.sub-categories');
    }


    function updateSubcategory2(Request $request)
    {
        DB::table('finalcategory')
            ->where('id', $request->input('id'))
            ->update([
                'name' => $request->input('subcategoryname'),
                'parent_id' => $request->input('parentsubcategory'),]);
        $request->session()->flash('done', 'Sub-category has been updated successfully!');
        return view('voyager::categories.subcategory2.sub-categories');


        return $request->input('id');
    }

    /******** sub-category2 *********/



    /*********** sub-categories ************/

}

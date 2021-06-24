<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('ourdistributor', function()
{
    return view('pages.ourdistributor');
})->name('ourdistributor');

Route::get('ecatalogue', function()
{
    return view('pages.ecatalogue');
})->name('ecatalogue');

Route::get('magic', function()
{
    return view('pages.magic');
})->name('magic');

Route::get('schematics', function()
{
    return view('pages.schematics');
})->name('schematics');
Route::get('orders', function()
{
    return view('pages.orders');
})->middleware("auth")->name('orders');

Route::get('product', function()
{
    return view('pages.product');
})->name('product');
Route::get('aboutus', function()
{
    return view('pages.aboutus');
})->name('aboutus');

Route::get('contactus', function()
{
    return view('pages.contactus');
})->name('contactus');
Route::get('blog', function()
{
    return view('pages.blog');
})->name('blog');
Route::get('news', function()
{
    return view('pages.news');
})->name('news');

Route::get('wishlist', function()
{
    return view('pages.wishlist');
})->name('wishlist');

Route::get('shoppingcart', function()
{
    return view('pages.shoppingcart');
})->name('shoppingcart');
Route::get('customerinfo', function()
{
    return view('pages.customerinfo');
})->middleware('auth');


Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
})->name('logout');

Route::get('addresses', function()
{
    return view('pages.addresses');
})->middleware('auth')->name('addresses');
Route::get('downloadableproducts', function()
{
    return view('pages.downloadableproducts');
});
Route::get('backinstocksubscriptions', function()
{
    return view('pages.backinstocksubscriptions');
});
Route::get('rewardpoints', function()
{
    return view('pages.rewardpoints');
});
Route::get('changepassword', function()
{
    return view('pages.changepassword');
});
Route::get('avatar', function()
{
    return view('pages.avatar');
});
Route::get('productsreviews', function()
{
    return view('pages.productsreviews');
});
Route::get('shippingandreturns', function()
{
    return view('pages.shippingandreturns');
})->name('shippingandreturns');
Route::get('Privacynotice', function()
{
    return view('pages.Privacynotice');
})->name('Privacynotice');
Route::get('conditionofuse', function()
{
    return view('pages.conditionofuse');
})->name('conditionofuse');
Route::get('recentlyviewedproducts', function()
{
    return view('pages.recentlyviewedproducts');
})->name('recentlyviewedproducts');
Route::get('sitemap', function()
{
    return view('pages.sitemap');
})->name('sitemap');
Route::get('applyforvendor', function()
{
    return view('pages.applyforvendor');
})->name('applyforvendor');
Route::get('108sd', function()
{
    return view('pages.108sd');
});
Route::get('subproduct', function()
{
    return view('pages.subproduct');
});
Route::get('finalproduct', function()
{
    return view('pages.finalproduct');
})->name('finalproduct');
Route::get('compareproduct', function()
{
    return view('pages.compareproduct');
})->name('compareproduct');
Route::get('ken', function()
{
    return view('pages.resultproduct');
});
Route::get('join', function()
{
    return view('pages.login');

})->name('loggedin');
Route::get('join', function()
{
    return view('pages.login');
})->name('loggedin');

Route::post('/customer/info',[\App\Http\Controllers\UpdateAccount::class,'update'])->name('mayar');




############## HomePage Application search #################

Route::get('model/{makeID}',[\App\Http\Controllers\relations::class,'model']);

Route::get('make/{manufacturerID}',[\App\Http\Controllers\relations::class,'make']);

Route::get('enginemanu/{modelID}',[\App\Http\Controllers\relations::class,'enginemanu']);

Route::get('engine/{enginemanuID}',[\App\Http\Controllers\relations::class,'engine']);

Route::get('getData/{manufacturer}/{model}/{engine}/{make}/{enginemanu}',[\App\Http\Controllers\relations::class,'getData']);

############## HomePage Application search #################




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    ##################################### categories #####################################


    ############################ subcategory ############################

    Route::get('/sub-categories', function()
    {
        return view('voyager::categories.subcategory.sub-categories');
    })->name('sub-categories');


    ####view new subcategory page
    Route::get('/new-subcategory', function()
    {
        return view('voyager::categories.subcategory.add-new-subcategory');
    })->name('new-subcategory');

    ####edit subcategory
    Route::get('/edit-subcategory/{id}', function($id)
    {
        return view('voyager::categories.subcategory.edit-category', compact('id'));
    })->name('edit-category');


    ####delete subcategory
    Route::get('/delete-subcategory/{id}', [\App\Http\Controllers\AdminController::class,'deletesubcategory'])->name('delete-category');


    ####Add new subcategory
    Route::get('add-new-subcategory', [App\Http\Controllers\AdminController::class, 'addnewsubcategory'])->name('add-new-subcategory');

    ####update subcategory
    Route::get('update-subcategory', [App\Http\Controllers\AdminController::class, 'updateSubcategory'])->name('update-subcategory');


    ####Bulk Delete subcategory
    Route::get('deleteAll-subcategory', [App\Http\Controllers\AdminController::class, 'subcategoriesBulkDelete'])->name('deleteAll-subcategory');

    ############################ subcategory ############################





    ############################ subcategory1 ############################

    Route::get('/sub-category1', function()
    {
        return view('voyager::categories.subcategory1.sub-categories');
    })->name('sub-category1');


    ####view new subcategory page
    Route::get('/new-subcategory1', function()
    {
        return view('voyager::categories.subcategory1.add-new-subcategory');
    })->name('new-subcategory1');

    ####edit subcategory
    Route::get('/edit-subcategory1/{id}', function($id)
    {
        return view('voyager::categories.subcategory1.edit-category', compact('id'));
    })->name('edit-category1');


    ####delete subcategory
    Route::get('/delete-subcategory1/{id}', [\App\Http\Controllers\AdminController::class,'deletesubcategory1'])->name('delete-category1');


    ####Add new subcategory
    Route::get('add-new-subcategory1', [App\Http\Controllers\AdminController::class, 'addnewsubcategory1'])->name('add-new-subcategory1');

    ####update subcategory
    Route::get('update-subcategory1', [App\Http\Controllers\AdminController::class, 'updateSubcategory1'])->name('update-subcategory1');


    ####Bulk Delete subcategory
    Route::get('deleteAll-subcategory1', [App\Http\Controllers\AdminController::class, 'subcategory1BulkDelete'])->name('deleteAll-subcategory1');

    ############################ subcategory1 ############################




    ############################ subcategory2 ############################

    Route::get('/sub-category2', function()
    {
        return view('voyager::categories.subcategory2.sub-categories');
    })->name('sub-category2');


    ####view new subcategory page
    Route::get('/new-subcategory2', function()
    {
        return view('voyager::categories.subcategory2.add-new-subcategory');
    })->name('new-subcategory2');

    ####edit subcategory
    Route::get('/edit-subcategory2/{id}', function($id)
    {
        return view('voyager::categories.subcategory2.edit-category', compact('id'));
    })->name('edit-category2');


    ####delete subcategory
    Route::get('/delete-subcategory2/{id}', [\App\Http\Controllers\AdminController::class,'deletesubcategory2'])->name('delete-category2');


    ####Add new subcategory
    Route::get('add-new-subcategory2', [App\Http\Controllers\AdminController::class, 'addnewsubcategory2'])->name('add-new-subcategory2');

    ####update subcategory
    Route::get('update-subcategory2', [App\Http\Controllers\AdminController::class, 'updateSubcategory2'])->name('update-subcategory2');


    ####Bulk Delete subcategory
    Route::get('deleteAll-subcategory2', [App\Http\Controllers\AdminController::class, 'subcategory2BulkDelete'])->name('deleteAll-subcategory2');

    ############################ subcategory2 ############################

    ##################################### sub-categories #####################################







    ################################ products ################################

    Route::get('/products', function()
    {
        return view('voyager::products.product');
    })->name('products');

    Route::get('/edit-products/{id}', function($id)
    {

        return view('voyager::products.editProduct', compact('id'));
    })->name('editproduct');


    ####Bulk Delete Product
    Route::get('deleteAll', [App\Http\Controllers\AdminController::class, 'bulkDelete'])->name('deleteproducts');

    ####New Product Page
    Route::get('newProduct', function()
    {
        return view('voyager::products.newProduct');
    })->name('newProduct');

    ####  Add New Product Page
    Route::post('add-newProduct', [App\Http\Controllers\AdminController::class, 'newProduct'])->name('addnewProduct');

    ####  Edit Product Page
    Route::post('update-newProduct', [App\Http\Controllers\AdminController::class, 'updateProduct'])->name('updateProduct');

    ####  Delete Product Page
    Route::get('delete-Product/{id}', [App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('deleteProduct');

    ################################ products ################################

});

Route::get('productinfo/{id}',[\App\Http\Controllers\relations::class, 'productinfo'])->name('productinfo');




///// sandwich menu links in header////

Route::get('singleproduct/{id}',[\App\Http\Controllers\relations::class, 'singleproduct'])->name('singleproduct');
Route::get('productinfo/{id}',[\App\Http\Controllers\relations::class, 'productinfo'])->name('productinfo');

Route::get('subcategory/{id}',[\App\Http\Controllers\relations::class, 'subcategory'])->name('subcategory');

Route::get('finalcategory/{id}',[\App\Http\Controllers\relations::class, 'finalcategory'])->name('finalcategory');

Route::get('maincategories/{id}',[\App\Http\Controllers\relations::class, 'maincategories'])->name('maincategories');

///// sandwich menu links in header////

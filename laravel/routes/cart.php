<?php

//Route::get('/cart/add',"AddConTroller@AddProduct");
//Route::get('/cart/edit',"AddConTroller@EditProduct");
//Route::get('/get',"App\Http\Controllers\StudentConTroller@getArticle");
//Route::post('/mypost',"StudentConTroller@myPost")->name("myp");
 Route::group(['namespace'=>"Cart"] ,  function () {
     Route::get('/cart/add',"AddConTroller@AddProduct");
});

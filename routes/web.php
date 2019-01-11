<?php



Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/about',function (){
        return view('about.index');
    });
Route::get('/contact',function (){
    return view('contact.index');
});
Route::get('/', function () {

    //$products = Product::all();
    return view('home.index');
});
Route::get('/home', 'HomeController@index');



//MIDDLEWARE START

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin',function (){
        return view('admin.index');
    });
    Route::resource('/admin/users/','UserController',
        [
            'names'=>
                [
                    'index'=>'admin.users.index',
                    'create'=>'admin.users.create',
                    'store'=>'admin.users.store',
                    'edit'=>'admin.users.edit',
                ]
        ]);
    Route::resource('/admin/products/','ProductController',
        [
            'names'=>
                [
                    'index'=>'admin.products.index',
                    'create'=>'admin.products.create',
                    'edit'=>'admin.products.edit',
                ]
        ]);

    Route::resource('/admin/media/','MediaController',
        [
            'names'=>
                [
                    'index'=>'admin.media.index',
                    'create'=>'admin.media.create',

                ]
        ]);
    Route::get('/admin/products/{id}/edit','ProductController@edit');
    Route::patch('/admin/products/{id}','ProductController@update');
    Route::delete('/admin/products/{id}','ProductController@destroy');

    Route::get('/admin/users/{id}/edit','UserController@edit');
    Route::patch('/admin/users/{id}','UserController@update');
    Route::delete('/admin/users/{id}','UserController@destroy');


    //Route::patch('/admin/media/{id}','MediaController@update');
    //Route::get('admin/media/index','MediaController@index');
    Route::delete('/admin/media/{id}','MediaController@destroy');
});

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
    return view('welcome');
});
Route::get('/home', 'HomeController@index');

//MIDDLEWARE START

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin',function (){
        return view('admin.index');
    });
//    Route::resource('/admin/users/','UserController',
//        [
//        'names'=>
//            [
//            'index'=>'admin.users.index',
//            'create'=>'admin.users.create',
//            'store'=>'admin.users.store',
//            'edit'=>'admin.users.edit',
//            ]
//        ]);
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
});
//end of admin middleware
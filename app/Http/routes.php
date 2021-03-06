<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {


//Route::get('/', 'LoginController@getLoginIndex');

# ------------------------------------
# Authentication
# ------------------------------------
    Route::get('/', 'Auth\AuthController@getLogin');
    Route::post('/', 'Auth\AuthController@postLogin');

    Route::get('/login', 'Auth\AuthController@getLogin');


    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

    Route::get('/logout', 'Auth\AuthController@logout');

# Debugging route just to show whether you're logged in or not
    Route::get('/show-login-status', function () {
        # You may access the authenticated user via the Auth facade
        $user = Auth::user();
        if ($user) {
            echo 'You are logged in.';
            dump($user->toArray());
        } else {
            echo 'You are not logged in.';
        }
        return;
    });

//------------------------------------->


    Route::get('/debug', function () {

        echo '<pre>';

        echo '<h1>Environment</h1>';
        echo App::environment() . '</h1>';

        echo '<h1>Debugging?</h1>';
        if (config('app.debug')) echo "Yes"; else echo "No";

        echo '<h1>Database Config</h1>';
        /*  
          The following line will output your MySQL credentials.
          Uncomment it only if you're having a hard time connecting to the database and you
          need to confirm your credentials.
          When you're done debugging, comment it back out so you don't accidentally leave it
          running on your live server, making your credentials public.
          */
        //print_r(config('database.connections.mysql'));
        /*
            echo '<h1>Test Database Connection</h1>';
            try {
                $results = DB::select('SHOW DATABASES;');
                echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
                echo "<br><br>Your Databases:<br><br>";
                print_r($results);
            }
            catch (Exception $e) {
                echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
            }
        
            echo '</pre>';
        */
    });


    Route::group(['middleware' => 'auth'], function () {


        Route::get('/product', 'ProductController@getProductIndex');

        Route::post('/product/edit', 'ProductController@postProductEdit');


        Route::get('/shop', 'ShopController@getShopIndex');
        Route::get('/shop/buy/{id?}', 'ShopController@getShopBuy');


        Route::get('/profile', 'ProfileController@getProfileIndex');
        Route::get('/profile/edit', 'ProfileController@getProfileEdit');

        Route::post('/profile/editCC', 'ProfileController@postProfileEditCC');
        Route::get('/profile/deleteCC/{cc?}', 'ProfileController@getProfileDeleteCC');
    });

});

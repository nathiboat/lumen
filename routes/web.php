<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use App\Models\Quote;

$app->get('api/article', 'ArticleController@index');
$app->get('api/article/{id}','ArticleController@getArticle');

$app->post('api/article','ArticleController@saveArticle');

$app->put('api/article/{id}','ArticleController@updateArticle');

$app->delete('api/article/{id}','ArticleController@deleteArticle');
$app->post('list', 'FileController@getFileList');
$app->get('view/{filename}', 'FileController@viewFile');
$app->get('delete/{filename}', 'FileController@deleteFile');



/**
 * Display the today quote
 */
$app->get('/', function()  {

    /*
     * Picks a different quote every day
     * (for a maximum of 366 quotes)
     *
     *   - $count: the total number of available quotes
     *   - $day: the current day of the year (from 0 to 365)
     *   - $page: the page to look for to retrieve the
     *            correct record
     */
    $count = Quote::query()->get()->count();
    $day = (int) date('z');
    $page = $day % $count + 1;

    $quotes = Quote::query()->get()->all();

    if (empty($quotes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    return view('home', ['quote' => $quotes[0]]);
});

/**
 * Display a specific quote
 */
//$app->get('/{id}', function(){
//    $quote = Quote::fine($id);
//    return view('quote', ['quote' => $quote]);
//});

$app->get('/smarty', 'BookController@smarty');

$app->get('/book', function() use ($app) {
    return "Lumen RESTful API By CoderExample (https://coderexample.com)";
});


$app->group(['prefix' => 'api/v1'], function($app)
{
    $app->get('book','BookController@index');

    $app->get('book/{id}','BookController@getbook');

    $app->post('book','BookController@createBook');

    $app->put('book/{id}','BookController@updateBook');

    $app->delete('book/{id}','BookController@deleteBook');
});
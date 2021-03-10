<?php

use App\Tag;
use App\Post;
use App\User;
use App\Phone;
use App\Video;
use App\Comment;
use App\Notifications\StatusUpdate;
use Illuminate\Support\Facades\Hash;


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
//display file uploading form



// Route::get('dynamic-field', 'DynamicFieldController@index');
Route::get('/apitest', 'PostController@getdata');
Route::post('dynamic-field/insert', 'PostController@insert')->name('dynamic-field.insert');
Route::get('/product', 'PostController@show')->name('show');

Route::get('post', [
    'uses' => 'PostController@post',
    'as' => 'post',
])->middleware('auth');

Route::get('post/like/{id}', [
    'uses' => 'LikeDislikeController@like',
    'as' => 'like'
]);

Route::get('post/dislike/{id}', [
    'uses' => 'LikeDislikeController@dislike',
    'as' => 'dislike'
]);

Route::get('view/post/{id}', [
    'uses' => 'PostController@view',
    'as' => 'view'
]);

Route::get('/dynamic_dependent', 'DynamicDependent@index');

Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('file', 'FileController@index')->name('file');

//insert files/images into mysql database table laravel
Route::post('file/upload', 'FileController@fileSave')->name('fileupload');

Route::get('/', function () {
    // $user = App\User::first();
    // $user->notify(new StatusUpdate("A new user has visited on your application."));
    //####################################### Simple Relation
    // ONE TO ONE
    //     $user = User::create([
    //         'name' => 'Ali',
    //         'email' => 'test@example.com',
    //         'password' => Hash::make('password'),
    //     ]);

    //    $post = Post::create([
    //        'title' => 'Test Post',
    //        'user_id' => 1
    //    ]);

    // $phone = Phone::create([
    //     'user_id' => $user->id,
    //     'phone' => '12345',
    // ]);

    // $user = Phone::find(1);

    // dd($user->phone);



    return view('welcome');
    //################################### Polymorphic Relation Practice
    // $tag = Tag::find(1);
    // dd($tag->videos);
    // dd($tag->posts);
    // $video  = Video::create([

    //     'title' => 'video title 1',
    // ]);

    // $tag = Tag::find(1);

    // $video->tags()->attach($tag);


    // $comment = Comment::find(3);
    // dd($comment->commentable);
    // $video = Video::find(1);
    // $video->comments()->create([
    //     'user_id' => '1',
    //     'body' => '2 comment  for video',
    // ]);
    // dd($video->comments);
    // $user = User::create([
    //     'name' => 'Ali',
    //     'email' => 'test@example.com',
    //     'password' => Hash::make('password'),
    // ]);

    // $video = Video::create([
    //     'title' => 'example Video title',
    // ]);

    // $video->comments()->create([
    //     'user_id' => '1',
    //     'body' => 'comment for Video'
    // ]);
    //########################################

});

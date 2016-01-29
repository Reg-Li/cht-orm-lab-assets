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

Route::get('/', function () {
    return view('welcome');
});

Route::get('orm', function() {
    // \App\Models\Post::truncate();

    // \App\Models\Post::create([
    //     'title' => 'my title',
    //     'content' => 'my content',
    //     'is_feature' => 1
    // ]);


    // $post = new \App\Models\Post();
    // $post->title = 'my title';
    // $post->content = 'my content';
    // $post->is_feature = 1;
    // $post->save();


    // $posts = \App\Models\Post::all();
    // echo '<ul>';
    // foreach($posts as $post) {
    //     echo '<li>' . $post->title . '</li>';
    // }
    // echo '</ul>';


    // $post = \App\Models\Post::find(1);
    // dd($post);
    // echo $post->title;


    // $posts = \App\Models\Post::find([1, 3, 5, 7, 9]);
    // dd($posts);
    // echo '<ul>';
    // foreach($posts as $post) {
    //     echo '<li>' . $post->title . '</li>';
    // }
    // echo '</ul>';


    // $posts = \App\Models\Post::where('is_feature', '=', 0)
    //                          ->orderBy('created_at', 'DESC')
    //                          ->get();
    // echo '<ul>';
    // foreach($posts as $post) {
    //     echo '<li>' . $post->id . '</li>';
    // }
    // echo '</ul>';


    // $post = \App\Models\Post::find(1);
    // $post->update([
    //     'title' => 'updated title',
    //     'content' => 'updated content'
    // ]);


    // $post = \App\Models\Post::find(1);
    // $post->delete();


    // \App\Models\Post::destroy(2);


    // \App\Models\Post::destroy([4, 5, 6]);


    // \App\Models\Post::destroy(7, 9, 11);


    // $posts = \App\Models\Post::all();
    // dd($posts->toArray());
    // dd($posts->toJson());


    $post = \App\Models\Post::find(3);
    foreach($post->comments as $comment) {
    	echo $comment->id . ', ';
    }
});

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
    //
});

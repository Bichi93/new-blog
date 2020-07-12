<?php

use App\Country;
use Illuminate\Support\Facades\Route;



use App\Post;
use App\Role;
use App\User;
use App\Photo;
use App\Video;
use App\Tag;

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

// Route::get('/', function () {
    //     return view('welcome');
    // });


    // Route::get('/about', function () {
        //     return "About";
        // });

        // Route::get('/contact', function () {
            //     return "Contact";
            // });

            // Route::get('/post/{id}', 'postController@index');

            // Route::resource('post','postController');

            // Route::get('/contact', 'postController@contact');

            // Route::get('/post/{id}', 'postController@show_post');





            // Route::group(['middleweare' => ['web']], function(){

                // });

                /*
                |--------------------------------------------------------------------------
                |Application Routes
                |--------------------------------------------------------------------------

                */
                //
                // use Illuminate\Support\Facades\DB;

                // Route::get("/insert",function(){

                    //     DB::insert('insert into posts (title, content) values (?, ?)', ['PHP with Laravel', 'PHP with Laravel']);

                    // });


                    /*
                    |--------------------------------------------------------------------------
                    |Database  Raw SQL Queries
                    |--------------------------------------------------------------------------

                    */
                    use Illuminate\Support\Facades\DB;

                    // Route::get('/reed',function(){
                        //  $results = DB::select('select * from posts where id=?',[1]);

                        //     foreach($results as $post){
                            //         return $post->title;
                            //     }
                            // });

                            // Route::get('/update',function(){

                                //     $update = DB::update('update posts set title = "Updated Title" where id = ?', ['1']);

                                //     return var_dump($update);
                                // });

                                // Route::get('/delete', function () {
                                    //     $deleted = DB::delete('delete from posts where id = ?', ['1']);

                                    //     return $deleted;

                                    // });


                                    /*
                                    |--------------------------------------------------------------------------
                                    |ELQQUENT
                                    |--------------------------------------------------------------------------

                                    */

                                    // Route::get('/find', function () {


                                    //         $posts = Post::all();


                                    //         foreach($posts as $post){
                                    //                 return $post -> title;
                                    //             }



                                    //         });


                                            // Route::get('/find', function () {


                                                //     $posts = Post::find(2);


                                                //     return $posts -> title;

                                                //     // foreach($posts as $post){
                                                    //     //     return $post -> title;
                                                    //     // }



                                                    // });


                                                    // Route::get('/findwhere', function () {

                                                    //     $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
                                                    //     return $posts;

                                                    // });

// Route::get('/findmore', function () {
//     // $posts = Post::findOrFail(1);

//     // return $posts;

//     $posts = Post::where('users_count', '<',50)->firstOrFail();


// });

//insert with wloquent
Route::get('/basicinsert', function () {

$post = new Post;

$post->title = 'Bichi ';
$post->content = 'Heyyy';
$post->user_id = 1;
 $post->save();
});

//update
// Route::get('/basicinsert2', function () {

//     $post = Post::find(2);

//     $post->title = 'New Eloquen title insert';
//     $post->content = 'Wow eloquent is relly cool';
//      $post->save();
//     });

// create method
// Route::get('/create', function () {

//     Post::create(['title'=>'The Create method', 'content'=>'Learning Laravel']);

// });

//update method
// Route::get('/update', function () {
//     Post::where('id',2)-> where('is_admin',0)->update(['title'=>'The Update method', 'content'=>'Learning Laravel']);
// });

//delete method

// Route::get('/delete', function () {
//     // Post::where('id',2)->delete();

//     // $post = Post::find(2);

// //     // $post->delete();

// //     // Post::destroy(3);


// });

// Route::get('/deleteall', function () {

//     // Post::where('is_admn',0)->delete();

//     Post::destroy([4,5]);

// });


// Route::get('/softdelete', function () {

//     Post::find(5)->delete();
// });

// Route::get('/readsoftdelete', function () {

//     // $deletedpost = Post::find(5);

//     // return $deletedpost;

// //    $post = Post::withTrashed()->where('id',5)->get();

//    $post = Post::onlyTrashed()->where('id',5)->get();

//    return $post;

// });

//delete without saiving

// Route::get('/forcedelete', function () {
//     Post::onlyTrashed()->where('is_admin',0)->forceDelete();
// });

//restore deleted data

// Route::get('/restore', function () {
//     Post::withTrashed()->where("is_admin", 0)->restore();
// });

  /*
 |--------------------------------------------------------------------------
|ELQQUENT Relationships
     |--------------------------------------------------------------------------
*/

// Route::get('/user/{id}/post', function ($id) {
//  return  User::find($id)->post->title;


// });


// Route::get('/post/{id}/user', function ($id) {

//     return Post::find($id)->user;

// });

// Route::get('/posts/{id}', function ($id) {
//    $user = User::find($id);
//     foreach($user->posts as $post){

//    echo $post->title ."<br>";
//     }
// });
//---------------------------------
//Many to Many Relationships
//---------------------------------
// Route::get('/user/{id}/role', function ($id) {

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;
//     // foreach($user->roles as $role){
//     //     return $role->name;
//     // }

// });


//---------------------------------
//Accesing the intermediate table /pivot
//---------------------------------

// Route::get('/users/pivit', function () {

//  $user = User:: find(1);

//  foreach($user->roles as $role){
//      return $role->pivot->created_at;
//  }

// });
//---------------------------------
//Has to many through relation
//---------------------------------


// Route::get('/user/country', function () {

//   $country = Country::find(1);

//   foreach($country->posts as $post){

//     return $post->title;
//   }

// });

//---------------------------------
//Polymorphic Relations
//---------------------------------

// Route::get('/post/{id}/photos', function ($id) {

//     $post = Post::find($id);

//     foreach($post->photos as $photo){
//         echo $photo->path. "<br>";
//     }



// });

// Route::get('photo/{id}/post', function ($id) {



// $photo = Photo::findOrFail($id);

// return $photo->imageable;


// });

/*
|--------------------------------------------------------------------------
|Polymorphic relation many to many
|--------------------------------------------------------------------------
|
|
*/

// Route::get('post/tag', function () {

//     $post = Post::find(3);

//     foreach($post->tags as $tag){
//                 echo $tag;
//             }


// });

// Route::get('tag/post', function () {
//    $tag = Tag::find(2);

//    foreach($tag->posts as $post){
//                   echo $post;

//    }
// });

/*
|--------------------------------------------------------------------------
|Crud Application
|--------------------------------------------------------------------------
|
|
*/


Route::resource('/posts', 'postController');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Country;
use App\Models\Gallery;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\video;

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
// Route::get('/about/{id}/{name}', function($id, $name){
//     return "this is about ".$id . " " . $name ;
// });

// Route::get('admin/post/example',array('as'=>'admin.home', function(){
//     $url = route('admin.home');
//     return "this url is " . $url;
// }));

// Route::get('/post/{id}', [PostController::class,'index']);

// Route::resource('posts', PostController::class);

// Route::get('/contact',[PostController::class, 'showMyView']);

// Route::get('/hello/{id}/{name}/{password}',[PostController::class, 'hello']);

//RAW SQL to insert data

// Route::get('/insert',function(){
//     DB::insert('insert into posts(name, address, body, email) value(?,?,?,?)', ['Prasant Magar ','Katari','Hello I am awesome','magar@mail.com']);
// });

// // RAW SQL to read data
// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]);

//     // foreach($results as $data){
//     //     return $data->name;
//     // }

//     return $results;


// });

// //RAW SQL queries to update data
// Route::get('/update', function(){
//     $update = DB::update('update posts set name="Prasant Magar" where id=?',[1]);
//     return $update;
// });

// //RAW SQL queries to delete data

// Route::get('/delete', function(){
//     DB::delete('delete from posts where id=?', [1]);
// });

// //ELOQUENT method

// //to read data

// Route::get('/read1', function(){
//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->name;
//     }
// });

// //to find data

// Route::get('find', function(){
//     $post = Post::find(2);

//     return $post->address;
// });

// // reading/finding the constraints

// Route::get('/findwhere', function(){
//     $posts = Post::where('id', 3)->orderBy('id','desc')->take(1)->get();
//     return $posts;
// });

// //retrieving data

// Route::get('/findsome', function(){
//     // $posts = Post::findOrFail(3);
//     // return $posts;
//     $posts = Post::where('users_count','<','50')->firstOrFail();
//     return $posts;


// });

// //inserting data

// Route::get('/insertdata',function(){
//     $post = new Post;
//     $post->name = "Lale";
//     $post->address = "Siraha";
//     $post->body = "I am from Siraha";
//     $post->email = "lale@gmail.com";

//     $post->save();
// });

// //updating data

// Route::get('/updatedata', function(){
//     $post = Post::find(4);

//     $post->name = "G-one";
//     $post->address = "Udayapur";
//     $post->body = "I am programmer";
//     $post->email = "gone@gmail.com";

//     $post->save();
// });

// //creating a data

// Route::get('/createdata', function(){
//     Post::create(['name'=>'Ram', 'address'=>'ktm', 'body'=>'creating ram', 'email'=>'ram@gmail.com']);
// });

// //updating data with eloquent

// Route::get('/updating', function(){
//     Post::where('id', 2)->update(['name'=>'Yankee', 'address'=>'Palpa', 'body' => 'updating data', 'email'=>'yankee@gmail.com']);
// });

// //deleting data with eloquent

// //1st way
// Route::get('/deletingdata', function(){
//     $post = Post::find(6);
//     $post->delete();
// });

// //2nd way using destroy, we can also delete multiple data with using Post::destroy(3,4,5);
// Route::get('deletingdata2', function(){
//     Post::destroy(5);
// });

// //by adding syntax also we can delete like, Post::where('id', 3)->delete();


// //Soft deleting / Trashing

// Route::get('/softdelete', function(){
//     $post = Post::find(3);
//     return $post->delete();
// });

// //Retrieving/ viewing deleted or trashed records

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(2);
//     // return $post;

//     $post = Post::withTrashed()->where('id',7)->get();
//     return $post;
// });

// //restoring deleted or trashed data

// Route::get('/restore', function(){
//     $post = Post::withTrashed()->where('id', 7)->restore();
//     return $post;
// });

// //deleting data permanently

// Route::get('/forcedelete', function(){
//     Post::where('id',7)->forceDelete();
// });

// Route::get('/createdata', function(){
//     Post::create(['user_id'=>'1', 'name'=>'Jenisha', 'address'=>'Palpa', 'body'=>'hello from palpa', 'email'=>'jenisha@gmail.com']);
// });

// Route::get('/forcedelete/{id}', function($id){
//     Post::find($id)->forceDelete();
// });

// //Eloquent relationship
// //One to One relationship

// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post;
// });

// //reverse function

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

// //one to many relationship

// Route::get('/posts', function(){
//     $user = User::find(1)->posts;

//     foreach($user as $post){
//         echo $post->name .'<br>';
//     }
// });

// //Many to many relationship

// //adding data in role table
// Route::get('/createrole', function(){
//     Role::create(['name'=>'Adminstrator']);
// });

// //create user
// Route::get('/createuser', function(){
//     User::create(['name'=>'Prasanti', 'email'=>'prasanti@gmail.com', 'password'=>'12345']);
// });




// //many to many relationship

// Route::get('/user/{id}/role', function($id){
//     // $users = User::find($id)->roles;

//     // foreach($users as $role){
//     //     return $role->name;
//     // }

//     $user = User::find($id)->roles()->orderBy('id','desc')->get();
//     return $user;
// });


// //Quering Intermediate table / accessing intermediate or Pivot table

// Route::get('user/pivot', function(){
//     $user = User::find(1)->roles;
//     foreach($user as $role){
//         return $role->pivot->created_at;
//     }
// });

// //has many through relation

// //creating country
// Route::get('countryname', function(){
//     Country::create(['name'=>'UK']);
// });


// Route::get('/user/country', function(){
//     $country = Country::find(6);

//     foreach($country->countrypost as $role){
//         return $role->name;
//     }
// });


//polymorphic relations

Route::get('user/photo', function () {
    $users = User::find(1);
    foreach ($users->photos as $user) {
        return $user;
    }
});

Route::get('post/{id}/photo', function ($id) {
    $posts = Post::find($id);
    foreach ($posts->photos as $post) {
        echo $post->path . "<br>";
    }
});

//polymorphic inverse relation

Route::get('photo/{id}/post', function ($id) {
    $photos = Photo::findOrFail($id);
    return $photos->imageable;
});

//practice for polymorphic relation

Route::get('createvideo', function () {
    video::create(['path' => 'world.mp4', 'videoable_id' => '1', 'videoable_type' => 'App\Models\Post']);
});

Route::get('user/{id}/video', function ($id) {
    $videos = User::findOrFail($id);

    foreach ($videos->videos as $video) {
        return $video->path;
    }
});

//polymorphic many to many

Route::get('post/tag', function () {
    $posts = Post::findOrFail(1);

    foreach ($posts->tags as $tag) {
        return $tag;
    }
});

Route::get('gallery/tag', function () {
    $galleries = Gallery::findOrFail(1);

    foreach ($galleries->tags as $tag) {
        return $tag;
    }
});

//inverse polymorphic to see owner

Route::get('/tag/post', function () {
    $tags = Tag::find(2);
    foreach ($tags->posts as $post) {
        return $post->name;
    }
});

Route::get('tag/gallery', function () {
    $tags = Tag::findOrFail(1);
    foreach ($tags->galleries as $gallery) {
        return $gallery;
    }
});

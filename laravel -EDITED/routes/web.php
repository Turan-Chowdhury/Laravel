 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::post('contact', [SiteController::class, 'contactHandler']);
Route::get('posts/{id}', [SiteController::class, 'posts']);
Route::get('optional/{id?}', [SiteController::class, 'optional']);
Route::post('form', [SiteController::class, 'formHandler']);
Route::get('model', [SiteController::class, 'modelHandler']);

Route::resource('admin/posts', PostController::class )->middleware('auth');

Route::get('hasone', function(){
    return App\Models\Comment::with('post')->find(2);
});

Route::get('querybuilder', function(){

     return DB::table('posts')->get();

    // return DB::table('posts')->max('id');

    // return DB::table('posts')->count();

    // $query = "SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id";
    // return DB::select($query);

    // $query = "SELECT * FROM posts LEFT JOIN comments ON posts.id = comments.post_id WHERE comments.id=:comment_id";
    // return DB::select($query, ['comment_id'=>2]);
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('logout', function(){
    auth()->logout();
    return redirect()->to('/');
});



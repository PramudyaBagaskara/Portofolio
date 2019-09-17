<?php
use App\Blog;
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

Route::get('/', function () {
    return view('homeku');
});

/*materi 1 Laravel Pengenala Routing 
routing itu seperti rute  darat air udatra
Routing dapat memanggil controller 
routing dapat langsung mendcetak ke layar browser*/
	
Route::get('/halo',function(){
	return "halo di sini laravel";
});

Route::get('/materi1',function(){
	return view("materi1");
});


Route::get('blade1', function(){
	return View('blade1');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/cobablog', function(){
	return view('cobablog');
});

Route::get('/beranda', function(){
	return view('beranda');
});

Route::get('/homeku', function(){
	return view('homeku');
});

Route::get('/profile', function(){
	return view('profile');
});

Route::get('/tambah_galeri', function(){
	return view('tambah_galeri');
});

Route::get('/blog/export_excel', 'BlogController@excel')->name('export.blog');

Route::get('/galeri', 'GaleriConroller@index')->name('get.galeri');

Route::post('/tbhgaleri', 'GaleriConroller@simpan')->name('tbh.galeri');

Route::get('/blog/json', 'BlogController@blojaks');

Route::get('/readmore/{id}', 'BlogController@readmore')->name('read.blog');


Route::get('/article', 'BlogController@get', function(){
	return view('article');
});

Route::get('/article1', function(){
	return view('article1');
});

Route::get('/article2', function(){
	return view('article2');
});

Route::get('/edit', function(){
	return view('edit');
});

Route::get('/tampil', 'BlogController@tampil', function(){
	return view('tampil');
});

Route::get('/tbh','BlogController@get2');

Route::post('/spn', 'BlogController@tambah')->name('tambah');

Route::get('/edit/{id}', 'BlogController@edit')->name('edit.art');

Route::post('/editl', 'BlogController@update')->name('edit1');


Route::get('/del1/{id}', 'BlogController@destroy')->name('del.art');

Route::get('/cari{id}', function($id){
	$kate = DB::table('blog')->where('id_kategori', $id)->get();
	$title = DB::table('kategori')->where('id', $id)->get();
		return view('kategori', ['kt' => $kate, 'title' =>$title]);
} )->name('kt');

Route::resource('\member', 'MemberController');


// Route::post('/tampil', 'BlogController@get');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/tbh_komen', 'KomentarController@tambah')->name('tbh_komen');



Route::get('/member', 'MemberController@get', function(){
	return view('member');
});

Route::get('/memberchange', function(){
	return view('memberchange');
});

Route::get('/emailsend', function(){
	return view('emailsend');
});

Route::post('/sendmail', 'MailController@index')->name('email');

Route::get('/member', 'MemberController@tampil', function(){
	return view('member');
});

Route::post('/save', 'MemberController@tambah')->name('save');

Route::get('/addmember', 'MemberController@get', function(){
	return view('addmember');
});

Route::get('/tambahtag', 'TagController@get', function(){
	return view('tambahtag');
});
Route::post('/tambahtag', 'TagController@tambah')->name('tambahtag');




Route::get('/editm/{id}', 'MemberController@edit1')->name('member.memberchange');

Route::post('/edita', 'BlogController@update')->name('member.edit1');

Route::post('/editm', 'MemberController@update')->name('member.edit2');

Route::get('/del/{id}', 'MemberController@destroy')->name('member.del');

// Route::get('/cari{id}', function($id){
// 	$kate = DB::table('blog')->where('id_kategori', $id)->get();
// 	$title = DB::table('kategori')->where('id', $id)->get();
// 		return view('kategori', ['kt' => $kate, 'title' =>$title]);
// } )->name('kt');

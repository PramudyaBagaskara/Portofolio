<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Kategori;
use App\Komentar;
use App\Tag;
use DataTables;
use App\Exports\BlogExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $kate = Kategori::all();
        $get = Blog::all();
        $komen = komentar::all();
        $tag = Tag::all();
        return view('article')->withUwu($get)->withKate($kate)->withKomen($komen)->withTag($tag);
    }
    
    public function readmore($id)
    {
        $blog = Blog::find($id);
        $blog2 = Komentar::orderBY('id', 'desc')->where('komenid' ,$id)->get();
        $blog3 = DB::table('blog_tag')->select('tag_id')->where('blog_id' ,$id)->get();
        $namatag = DB::select("SELECT tag.nama_tag from tag, blog_tag where blog_tag.blog_id = $id AND blog_tag.tag_id = tag.id");


        return view('readmore')->withBlog($blog)
                               ->withBlog2($blog2); 
    }

    public function get2()
    {
        $kate = kategori::all();
        $tag = Tag::all();
        return view('tbh')->withKate($kate)->withTag($tag);
    }
    
    public function tampil()
    {
        $get = Blog::all();
        $view = Tag::all();
        return view('tampil')->withUwu($get)
                             ->withView($view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spn = new Blog;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tbh = new Blog;
        $tbh->judul = $request->judul;
        $tbh->desc = $request->desc;
        $tbh->id_kategori = $request->id_kategori;
        $tbh->author = $request->author;

        $file = $request->file('foto');

        $ext = $file->getClientOriginalName();
        $file->move('image/', $ext);
        
        $tbh->foto = $ext;

        $tbh-> save();
        $tbh->tag()->sync($request->tag, false);
        return redirect('tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Blog::find($id);
        $kate = Kategori::all();
        $tag = Tag::all();
        return view('edit')->withData($view)
                           ->withKate($kate)
                           ->withTag($tag);
    }

    public function blojaks()
    {
        return DataTables::of(Blog::all())->make(true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog = Blog::find($request->id);
        $blog->judul = $request->judul;
        $blog->id_kategori = $request->id_kategori;
        $blog->desc = $request->desc;
        $blog->author = $request->author;
        $file = $request->foto;

        $nama = $file->getClientOriginalName();
        $file->move('image/', $nama);
        $blog->foto = $nama;

        $blog->save();
        $blog->tag()->sync($request->tag);
    	return redirect('tampil');
    }

    public function excel()
    {
        return Excel::download(new BlogExport, 'Data_Article.xlsx');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del2 = Komentar::where('komenid' ,$id);
        $del2->delete();
       
        $del = Blog::find($id);
        $del->delete();

       
        $del3 = Tag::where('id' ,$id);
        $del3->delete();
        return back();
    }
}

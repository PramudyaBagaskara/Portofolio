<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = Galeri::all();
        return view('galeri')->withGet($get);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 public function simpan(Request $request)
    {
        $ok = new Galeri;
        $ok->desc = $request->desc;

        if(empty($request->file('gambar')))
        {
            $ok->gambar = $ok->gambar;
            return back();
        }
        else
        {
            $this->validate($request, ['gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file =$request->file('gambar');
            $filename = rand() . '.' . $file->getClientOriginalName();
            $request->file('gambar')->move('image/',$filename);
            $ok->gambar = $filename;
            $ok->save();
            return redirect('galeri');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class ApiController extends Controller
{
    

  public function data()
  {
    return Tag::all();
  }

  public function create(Request $req)
  {
    $new = new Tag;
    $new->nama_tag = $req->nama_tag;
    $new->save();

    return "1 Tag Has Been Added";

  }

  public function update($id, Request $req)
  {
    $nama_tag = $req->nama_tag;
    $up = Tag::find($id);

    $up->nama_tag = $nama_tag;
    $up->save();
    return "1 Tag Has Been Updated";
  }

  public function delete($id)
  {
    $tag = Tag::find($id);
    $tag->delete();
    return '1 Tag Has Been deleted';
  }


}
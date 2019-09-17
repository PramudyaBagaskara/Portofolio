<?php

namespace App\Http\Controllers;

use App\Member;
use App\MembershipData;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $member = MembershipData::all();
        return view('addmember')->withMember($member);
    }
    public function tampil()
    {
        $get = Member::all();
        return view('member')->withUwu($get);
    }

    public function jenis(){
        $jenis = MembershipData::all();
        return view('memberchange')->withData($jenis);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spn = new Member;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tbh = new Member;
        $tbh ->nama_member = $request->nama_member;
        $tbh ->jenis_member = $request->jenis_member;
        $tbh ->email = $request->email;
        $tbh ->save();
        return redirect('member');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Member::find($id);
        return view('edit')->withData($view);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tbh = Member::find($request->id);
        $tbh->nama_member = $request->nama_member;
        $tbh->jenis_member = $request->jenis_member;
        $tbh->email = $request->email;
        $tbh->save();
        return redirect('member');
    }

    
    public function edit1($id)
    {
        $view = Member::find($id);
        $jm = Membershipdata::all();
        return view('memberchange')->withData($view)
                                   ->withJm($jm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Member::find($id);
        $del->delete();
        return back();
    }
}

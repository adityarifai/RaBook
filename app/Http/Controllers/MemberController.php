<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Library;
use App\Book;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $mbr['user'] = Member::all();
        $mbr['buku'] = Library::all();
        $mbr['page'] = Book::all();
        return view('member.memberhome', $mbr);
    }


    public function perpus()
    {
        $mbr['user'] = Member::all();
        $mbr['buku'] = Library::all();
        $mbr['page'] = Book::all();
        return view('member.perpus', $mbr);
    }

    public function page($id)
    {
        $mbr = Library::find($id);
        // dd($mbr);
        $datagambar = Book::where(['id_libraries' => $mbr->judul])->get();
        // dd($datagambar);
        return view('member.memberpage', ['page' => $mbr, 'pg' => $datagambar]);
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
    public function store(Request $request)
    {
        //
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

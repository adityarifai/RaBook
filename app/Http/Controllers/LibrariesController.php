<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\Admin;
use App\Book;
use App\User;

class LibrariesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepageAdmin()
    {
        //
    }
    public function index()
    {
        $lib['libraries'] = Library::all();
        return view('admin.lib.index', $lib);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addbook['addbook'] = Library::all();
        return view('admin.lib.addbook', $addbook);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
        'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $book = new Library;

        $book->judul = $request->input('judul');
        $book->karya = $request->input('karya');
        $book->penerbit = $request->input('penerbit');
        
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = time().'.'.$image->getClientOriginalExtension();
            $book->cover = $name;
            $destinationPath = public_path('/cover');
            $image->move($destinationPath, $name);
        }
        $book->save();
        return redirect()->route('libraries.index');
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
        $lib = Library::find($id);
        return view('admin.lib.editbook', ['edit' => $lib]);
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
        $book = Library::find($id);

        $book->judul = $request->input('judul');
        $book->karya = $request->input('karya');
        $book->penerbit = $request->input('penerbit');
        
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = time().'.'.$image->getClientOriginalExtension();
            $book->cover = $name;
            $destinationPath = public_path('/cover');
            $image->move($destinationPath, $name);
        }
        $book->save();
        return redirect()->route('libraries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delbook = Library::find($id);
        $delbook->delete();
        return redirect()->route('libraries.index');

        // Library::where('id',$id)->delete();
        // return redirect()->route('libraries.index')->with('alert-success','Data berhasi dihapus!');

        // Library::whereId($id)->delete();
        // return redirect(url('libraries'));
    }
}

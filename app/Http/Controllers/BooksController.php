<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Library;

class BooksController extends Controller
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
        $pg['page'] = Book::all();
        return view('admin.book.index', $pg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addpg['addpg'] = Library::all();
        return view('admin.book.addpage', $addpg);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // dd($r);
        $this->validate($r, [
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $page = new Book;

        $page->id_libraries = $r->input('id_libraries');
        $page->no_page = $r->input('no_page');
        
        if ($r->hasFile('picture')) {
            $image = $r->file('picture');
            $name = time().'.'.$image->getClientOriginalExtension();
            $page->picture = $name;
            $destinationPath = public_path('/picture_page');
            $image->move($destinationPath, $name);
            $page->save();
            // return view('admin.book.index');
            $pg['page'] = Book::all();
            return view('admin.book.index', $pg)->with('success','Image Upload successfully');
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
        $delpage = Book::find($id);
        $delpage->delete();
        return redirect()->route('books.index');
    }
}

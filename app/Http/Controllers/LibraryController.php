<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LibraryRequest;
use Illuminate\Validation\Rules\Unique;

class LibraryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $book = Library::all();
        return view('book', compact('book'));
    }

    public function create() {
            return view('create');
    }

    public function store(LibraryRequest $request) {
        Library::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages
        ]);
    
        return redirect('/book');
    }

    public function edit($id) {
        $book = Library::find($id);
        return view('/edit', compact('book'));
    }

    public function update(LibraryRequest $request, $id){
        $book = Library::find($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages
        ]);
        return redirect('/book');
    }

    public function delete ($id) {
        $book = Library::find($id)->delete();
        return redirect('/book');
    }
}

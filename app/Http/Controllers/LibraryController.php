<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function index() {
        $book = Library::all();
        return view('book', compact('book'));
    }

    public function create() {
            return view('create');
    }

    public function store(Request $request) {
        Library::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages
        ]);
    
        return redirect('/book');
    }

    public function num () {
        $statement  = DB::select("SHOW TABLE STATUS LIKE 'users'");
        $nextUserId = $statement[0]->Auto_increment;
        return $nextUserId;
    }

}

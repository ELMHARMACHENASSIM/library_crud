<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('components.create',compact('books'));
    }

    public function store(Request $request){
        request()->validate([
            'titre' => ['required'],
            'auteur' => ['required'],
            'resume' => ['required'],
            'prix' => ['required'],
            'stock' => ['required'],
            'imageurl' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',

        ]);
        $imageName = time() . '.' . $request->file('imageurl')->getClientOriginalExtension();
        $request->file('imageurl')->move(public_path('images'), $imageName);
        $data = [
            'titre' => $request->titre,
            'auteur' => $request->auteur,
            'resume' => $request->resume,
            'prix' => $request->prix,
            'stock' =>  $request->stock,
            'imageurl' =>  $imageName,
        ];
        Book::create($data);
     
        return redirect()->back()->with('success', 'Image uploaded successfully.');
     
    }
    public function update(Request $request ,Book $book){
        request()->validate([
            'titre' => ['required'],
            'auteur' => ['required'],
            'resume' => ['required'],
            'prix' => ['required'],
            'stock' => ['required'],
            'imageurl' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);
        $imageName = time() . '.' . $request->file('imageurl')->getClientOriginalExtension();
        $request->file('imageurl')->move(public_path('images'), $imageName);
        $data = [
            'titre' => $request->titre,
            'auteur' => $request->auteur,
            'resume' => $request->resume,          
            'prix' => $request->prix,
            'stock' =>  $request->stock,
            'imageurl'=>  $imageName,
        ];

        $book->update($data);
      
      return redirect()->back()->with('success', 'Image uploaded successfully.');

    }
    public function delete(Book $book){
        $book->delete();
        return redirect()->back();
    }

}

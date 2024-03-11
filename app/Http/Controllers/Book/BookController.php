<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\BookCreateRequest;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('Author/Books/BookIndex',[
            'Books'=>$books
        ]);
    }

    public function bookCreate()
    {
        $genre = Genre::all();
        return view('Author/Books/BookCreate',[
            'Genre'=>$genre
        ]);
    }

    public function submit(BookCreateRequest $request){
        $validated_data = $request->validated();

        DB::transaction(function () use($request, $validated_data){
            Book::create([
                'title'=>$validated_data['title'],
                'summary'=>$validated_data['summary'],
                'genre'=>$validated_data['genre'],
                'image'=>$request->has('file')?$request->file->storePublicly('BookImage',  ['disk' => 'public']) : null
            ]);
        });

        return Redirect::back()->with('message','Book Created Successfully');
    }

    public function bookView($id)
    {
        $book = Book::with('bookChapters')->findOrFail($id);
        return view('Author/Books/BookCreate',[
            'book'=>$book
        ]);
    }

    public function update(BookCreateRequest $request, int $id){
        $validated_data = $request->validated();

        $book = Book::findOrFail($id);

        $book->update([$validated_data]);

        return Redirect::back()->with('message','Book Updated Successfully');
    }
}

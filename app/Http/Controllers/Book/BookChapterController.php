<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\ChapterCreateRequest;
use App\Models\Book;
use App\Models\BookChapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookChapterController extends Controller
{
    public function chapterView($id){
        $chapter = BookChapter::findOrFail($id);
        return view('Author/Books/BookIndex',[
            'Chapter'=>$chapter
        ]);
    }

    public function chapterCreate()
    {
        return view('Author/Books/Chapter/ChapterCreate');
    }

    public function submit(ChapterCreateRequest $request){
        $validated_data = $request->validated();

        Book::findOrFail($validated_data['id'])->bookChapters()->create([
            'title'=>$validated_data['title'],
            'contents'=>$validated_data['contents']
        ]);

        return Redirect::back()->with('message','Chapter Created Successfully');
    }

    public function update(ChapterCreateRequest $request, int $id){
        $validated_data = $request->validated();

        BookChapter::findOrFail($id)->update([
            'title'=>$validated_data['title'],
            'contents'=>$validated_data['contents']
        ]);

        return Redirect::back()->with('message','Chapter Updated Successfully');
    }


    // public function update(BookCreateRequest $request, int $id){
    //     $validated_data = $request->validated();

    //     $book = Book::findOrFail($id);

    //     $book->update([$validated_data]);

    //     return Redirect::back()->with('message','Book Updated Successfully');
    // }
}

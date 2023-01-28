<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class BookController extends Controller
{
    public function showFormBook(){
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('add-book', compact('categories' , 'publishers'));
    }
     public function saveBook(Request $request){
    //    dd($request->all());
        $this->validate($request, [
            'image' => 'required | mimes:jpg,jpeg,png | max:3000',
        ]);

        $image = $request->file('image');
        $trim = strtolower(trim($image->getClientOriginalName()));
        $image_name = time().rand(100,999).$trim;
        $path = 'assets/img';
        $image->move($path, $image_name);

        $book = Book::create([
            'publisher_id' => $request->publisher_id,
            'title' => $request->title,
            'author'=> $request->author,
            'synopsis' => $request->synopsis,
            'year' => $request->years,
            'image' => $image_name
        ]);
        BookCategory::create([
            'book_id' => $book->id,
            'category_id' => $request->category_id
        ]);
        
        return redirect()->back()->with('success', 'Buku berhasil di simpan');
    }
}

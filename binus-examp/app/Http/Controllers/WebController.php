<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $categories = Category::all();
        $books = Book::all();
        return view('index', compact('books', 'categories'));
    }

    public function detail(Book $book){
        $categories = Category::all();
        return view('detail', compact('book', 'categories'));
    }

    public function category(Category $category){
        $categories = Category::all();
        return view('category', compact('category', 'categories'));
    }

    public function publisher(Request $request){
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisher', compact('publishers', 'categories'));
    }

    public function detailPublisher(Publisher $publisher){
        $categories = Category::all();
        return view('publisher-detail', compact('publisher', 'categories'));
    }

    public function contact(){
        $categories = Category::all();
        return view('contact', compact('categories'));
    }
}

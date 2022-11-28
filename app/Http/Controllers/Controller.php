<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $books = Book::all()->take(8);
        return view('welcome', compact('books'));
    }

    /**
     * bookDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function bookDetail($id)
    {
        $book = DB::table('books')
            ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
            ->where('books.id', $id)
            ->select('books.image as image', 'books.title as title', 'books.author as author', 'publishers.name as name', 'books.year as year', 'books.synopsis as synopsis')
            ->first();
        return view('book-detail', compact('book'));
    }

    /**
     * bookCategory
     *
     * @param  mixed $category
     * @return void
     */
    public function bookCategory($id)
    {
        $books = DB::table('book_categories')
            ->join('books', 'book_categories.book_id', '=', 'books.id')
            ->where('category_id', $id)
            ->get();
        $category = Category::find($id);
        return view('book-category', compact('books', 'category'));
    }

    /**
     * publisher
     *
     * @return void
     */
    public function publisher()
    {
        $publishers = Publisher::all();
        return view('publisher', compact('publishers'));
    }

    /**
     * publisherDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function publisherDetail($id)
    {
        $books = DB::table('books')
            ->join('publishers', 'publishers.id', '=', 'books.publisher_id')
            ->where('publishers.id', $id)
            ->select('books.image as image', 'books.title as title', 'books.author as author', 'books.id as id')
            ->get();
        $publisher = Publisher::find($id);
        return view('publisher-detail', compact('publisher', 'books'));
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('contact');
    }
}

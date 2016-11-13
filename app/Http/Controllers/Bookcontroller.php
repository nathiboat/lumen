<?php
/**
 * Created by PhpStorm.
 * User: Nathi
 * Date: 13/11/2016
 * Time: 20:26
 */

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function index(){
        $books = Book::all();
        return response()->json($books);
    }

    public function getBook($id){

        $book = Book::find($id);

        return response()->json($book);
    }

    public function createBook(Request $request){

        $book = Book::create($request->all());

        return response()->json($book);
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();

        return response()->json('deleted');
    }

    public function updateBook(Request $request, $id){

        $book = Book::find($id);
        $book->title = $request->input('tile');
        $book->author = $request->input('author');
        $book->isbn = $request->input('isbn');
        $book->save();
    }

    public function smarty(Request $request){


        return view('home', [
            'hi' => 'this is  hi',
            'text' => $request->input('text')
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller {
    public function index() {
        return response()->json(Book::all());
    }

    public function create(Request $request) {
        $response = Book::createRow($request->all());

        return $response;
    }

    public function view(Book $book, Request $request) {
        if ($request->get('with')) {
            $relations = explode(',', $request->get('with'));
            foreach ($relations as $relation) {
                $book[$relation];
            }
        }

        return $book;
    }

    public function update(Book $book, Request $request) {
        $response = $book->updateRow($request->all());

        return $response;
    }

    public function delete(Book $book) {
        $response = $book->deleteRow();

        return $response;
    }
}

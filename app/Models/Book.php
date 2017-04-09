<?php

namespace App\Models;

use App\Traits\Validation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Book extends Model {
    use Validation;

    protected $hidden = [
        'user_id'
    ];

    public static function createRow(array $params) {
        $validator = self::validator($params);

        if ($validator->fails()) {
            return response()
                ->json(
                    $validator
                        ->errors()
                        ->messages(),
                    config('httpStatus.unprocessable')
                );
        }

        $book = new Book();
        self::setData($book, $params);

        return response()->json($book, config('httpStatus.success'));
    }

    private static function setData(Book $book, array $params) {
        $book->user_id = Auth::user()->id;

        if (isset($params['title'])) {
            $book->title = $params['title'];
        }

        if (isset($params['author'])) {
            $book->author = $params['author'];
        }

        if (isset($params['resume'])) {
            $book->resume = $params['resume'];
        }

        if (isset($params['publish'])) {
            $book->publish = $params['publish'];
        }

        if (isset($params['isbn'])) {
            $book->isbn = $params['isbn'];
        }

        $book->save();
    }

    private static function rules($update) {
        if ($update) {
            return [
                'title' => 'unique:books,title'
            ];
        }

        return [
            'title' => 'required|unique:books,title',
            'author' => 'required',
            'resume' => 'required',
            'publish' => 'required',
            'isbn' => 'required',
        ];
    }

    private static function messages($update) {
        if ($update) {
            return [
                'title.unique' => 'alreadyExists'
            ];
        }

        return [
            'title.required' => 'required',
            'title.unique' => 'alreadyExists',
            'author.required' => 'required',
            'resume.required' => 'required',
            'publish.required' => 'required',
            'isbn.required' => 'required',
        ];
    }

    public function updateRow(array $params) {
        $validator = self::validator($params, true);

        if ($validator->fails()) {
            return response()
                ->json(
                    $validator
                        ->errors()
                        ->messages(),
                    config('httpStatus.unprocessable')
                );
        }

        self::setData($this, $params);

        return response()->json($this, config('httpStatus.success'));
    }

    public function deleteRow() {
        $this->delete();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}

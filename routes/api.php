<?php

use Illuminate\Support\Facades\Route;

/***
 * @apiGroup Token
 * @api {post} oauth/token Create Token
 *
 * @apiParam {number} [client_id] Client id is not required if authorization header exists
 * @apiParam {string} [secret] Client secret is not required if authorization header exists
 * @apiParam {string} grant_type=password You must set grant type for authenticate user
 * @apiParam {string} username Here is user email addres Example: example@email.com
 * @apiParam {string} password Here is user password
 *
 * @apiHeader {String} Content-Type application/json
 * @apiHeader {Basic} [Authorization] Not required if you send "client_id" and "secret" params
 * @apiSuccessExample {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *   "token_type": "Bearer",
 *   "expires_in": 31535999,
 *   "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjcwNjNlYjAzYmUzMmI1YzczZDFkOTViMmNhMWMwNGI4NTc4MjJjNTI1NGRkOWI2ZTRmOTIyNGU2MTM4MTQ2MDRiY2JiY2Y0YzU3MTA4NDIyIn0.eyJhdWQiOiIzIiwianRpIjoiNzA2M2ViMDNiZTMyYjVjNzNkMWQ5NWIyY2ExYzA0Yjg1NzgyMmM1MjU0ZGQ5YjZlNGY5MjI0ZTYxMzgxNDYwNGJjYmJjZjRjNTcxMDg0MjIiLCJpYXQiOjE0OTE3NjUwMjMsIm5iZiI6MTQ5MTc2NTAyMywiZXhwIjoxNTIzMzAxMDIyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.CpaFkLB3U6riaSHBv7V7JxZMMZ2LvfP7DYU0grVxEIVXnpaaTJxKIojTl9b9Xfll0rHKOOfWAtDtALh1g8EvrVltgJE_Lr0UJ--2anWluLK0xF28SZScBM32a90RZv3yNkUN2jCWuuwLhMQSNBbinXJojbXW4bnm-bxFOQR6aKVcRgUESDbveSUsYg7Nax7FMkgIjavXXp5THnRmaF03eN5t4gDcpTVi57JyKRzzG0w3HSzrTl4NxL54xUzpKXy-M45TMZQdHk9V5IMzA0gbEOXyOu5Mf2yifwiXe2LIZz7OaH3Aa-LPT2N8uzl59D_pZRE13wRO94OgBDNSGUAl32e4MlBCubeEbTDwux9HezxpB1Nk2ZKcQFXMxE0nRFdy22sk3iHchr0U1Gua-N1b0cXUrwwifIMnfi-SzWzqFTKs4K0wY5NIQJGa_lSIExNcCsIVSGBtiOA4TKtVCFqkHdsWoyhA91MPMyTN6meLXpQRWgKBECQosw7POY13cVO9Xj_3Kf2_xlswVaUMB4g4LzjZGgFUlNPHjkubfE38yU_XjkEBF-fSrXKE9nrslIjfo5wNA4pNqFNw8mbzxN0komjrcaqlOo-m0kxojyfE89pwavS134NiCeWjxYhd8Zzh_7gFCaPoYtOdfU8_dTDEQfK_mtU0I4RX7bCn4RtZdnE",
 *   "refresh_token": "TTtTmdJ95MEtc8QLbhImI71P1vITbUb9L80gMA1z+ip7gOgICy0tS/SNUZf1KsMB6mLcEmy0kF+9Bf57p2Qeib9GtpyU2TK9AC/GBalx1DLBGLvJe6lBHxs2sZ6XHNEf8jkhBb+pXjVl+ZBZ1dSiblhMgW1KgZvbmmQpOaUmRU5HkUwf15WDcJDo/2xY9XbYZ7ZMO1HQufFyk7cfYzx9QOaxK1ZV21QUatBL0mbEEQDrKAdZUaeyR3JJU2vw3A2I0j2f7qFfRfEmPVFs/Ce5RZWFiLJaLGmS2z7SQTrB5nnuJJbBtQd8ooqkoLYJnR9Cnx9vodC9O4ha0Hts9jCW2wpPW9Qe95VjB9ZfRP+QiMQt2UPbN6nJj1wO+r6+1bhm5hbBs6dnJOqEx7/jWV1MfMh+5VHqPr7HtxqYNceeOxRRdIsW/rQYpOJ8S2lQfv75LQtyvbbGeqctLgLwFOdethpHWheX7RNH0Ce+xf19gdwyu+ls+6ElTj/meSZowePFrO3CjzOVoAgYpCyQaHn6G3Hr2TKmbq0+/jq1WCEgtbLmRcu1v8pr63/aqbOq4tzuwCT6n70IkffCpk7o4ekJIttHz9V+4D87ExkPNiiDT2KXwgKjs+/Bsu4mD66SEgXZGxxqaxV6yD9Gt+p0vLm8jO9Qix1/17kqng55F725y68="
 * }
 * @apiSampleRequest //yourdomain.com/oauth/token
 */

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::group(['prefix' => '/books'], function () {
        /***
         * @apiGroup Books
         * @api {get} api/books List All Books
         *
         * @apiHeader {String} Content-Type application/json
         * @apiHeader {Bearer} Authorization Authorize user
         *
         * @apiSuccessExample {json} Success-Response:
         * HTTP/1.1 200 OK
         *  [
         *      {
         *          "id": 4,
         *          "title": "Harry Potter",
         *          "author": "J. K. Rowling",
         *          "resume": "Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.",
         *          "publish": "2002-08-12 00:00:00",
         *          "isbn": "3c02c435-3816-3ec3-803e-59adb16087d6",
         *          "created_at": "2017-04-02 20:35:12",
         *          "updated_at": "2017-04-02 20:35:12"
         *      }
         *  ]
         * @apiSampleRequest //yourdomain.com/api/books
         */
        Route::get('/', 'BookController@index');
        /***
         * @apiGroup Books
         * @api {get} api/books/:book_id View Book
         *
         * @apiParam {string} with If you want to get relations for book use this property. Example:
         *
         * @apiHeader {String} Content-Type application/json
         * @apiHeader {Bearer} Authorization Authorize user
         *
         * @apiSuccessExample {json} Success-Response:
         *     HTTP/1.1 200 OK
         *      {
         *          "id": 4,
         *          "title": "Harry Potter",
         *          "author": "J. K. Rowling",
         *          "resume": "Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.",
         *          "publish": "2002-08-12 00:00:00",
         *          "isbn": "3c02c435-3816-3ec3-803e-59adb16087d6",
         *          "created_at": "2017-04-02 20:35:12",
         *          "updated_at": "2017-04-02 20:35:12"
         *      }
         *
         * @apiSampleRequest //yourdomain.com/api/books/5
         */
        Route::get('{book}', 'BookController@view');
        /***
         * @apiGroup Books
         * @api {post} api/books Create Book
         *
         * @apiHeader {String} Content-Type application/json
         * @apiHeader {Bearer} Authorization Authorize user
         *
         * @apiParam {string} title Book's title
         * @apiParam {string} author Book's author
         * @apiParam {string} resume Book resume
         * @apiParam {string} publish Date format: Y-m-d
         * @apiParam {string} isbn ISBN code of the book
         *
         * @apiSuccessExample {json} Success-Response:
         *     HTTP/1.1 200 OK
         *      {
         *          "id": 4,
         *          "title": "Harry Potter",
         *          "author": "J. K. Rowling",
         *          "resume": "Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.",
         *          "publish": "2002-08-12 00:00:00",
         *          "isbn": "3c02c435-3816-3ec3-803e-59adb16087d6",
         *          "created_at": "2017-04-02 20:35:12",
         *          "updated_at": "2017-04-02 20:35:12"
         *      }
         * @apiSampleRequest //yourdomain.com/api/books
         */
        Route::post('/', 'BookController@create');
        /***
         * @apiGroup Books
         * @api {put} api/books/:book_id Update Book
         *
         * @apiHeader {String} Content-Type application/json
         * @apiHeader {Bearer} Authorization Authorize user
         *
         * @apiParam {string} [title] Book's title
         * @apiParam {string} [author] Book's author
         * @apiParam {string} [resume] Book resume
         * @apiParam {string} [publish] Date format: Y-m-d
         * @apiParam {string} [isbn] ISBN code of the book
         *
         * @apiSuccessExample {json} Success-Response:
         *     HTTP/1.1 200 OK
         *      {
         *          "id": 4,
         *          "title": "Harry Potter",
         *          "author": "J. K. Rowling",
         *          "resume": "Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.",
         *          "publish": "2002-08-12 00:00:00",
         *          "isbn": "3c02c435-3816-3ec3-803e-59adb16087d6",
         *          "created_at": "2017-04-02 20:35:12",
         *          "updated_at": "2017-04-02 20:35:12"
         *      }
         * @apiSampleRequest //yourdomain.com/api/books/5
         */
        Route::put('{book}', 'BookController@update');
        /***
         * @apiGroup Books
         * @api {delete} api/books/:book_id Delete Book
         *
         * @apiHeader {String} Content-Type application/json
         * @apiHeader {Bearer} Authorization Authorize user
         *
         * @apiSuccessExample {json} Success-Response:
         *     HTTP/1.1 200 OK
         *      {
         *          "type": "bookDeleteSuccess",
         *      }
         * @apiSampleRequest //yourdomain.com/api/books/5
         */
        Route::delete('{book}', 'BookController@delete');
    });
});
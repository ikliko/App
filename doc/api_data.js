define({
    "api": [
        {
            "group": "Books",
            "type": "delete",
            "url": "api/books/:book_id",
            "title": "Delete Book",
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Bearer",
                            "optional": false,
                            "field": "Authorization",
                            "description": "<p>Authorize user</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
        {
            "title": "Success-Response:",
            "content": "HTTP/1.1 200 OK\n {\n     \"type\": \"bookDeleteSuccess\",\n }",
            "type": "json"
        }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/api/books/5"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "DeleteApiBooksBook_id"
        },
        {
            "group": "Books",
            "type": "get",
            "url": "api/books",
            "title": "List All Books",
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Bearer",
                            "optional": false,
                            "field": "Authorization",
                            "description": "<p>Authorize user</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
        {
            "title": "Success-Response:",
            "content": "HTTP/1.1 200 OK\n [\n     {\n         \"id\": 4,\n         \"title\": \"Harry Potter\",\n         \"author\": \"J. K. Rowling\",\n         \"resume\": \"Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.\",\n         \"publish\": \"2002-08-12 00:00:00\",\n         \"isbn\": \"3c02c435-3816-3ec3-803e-59adb16087d6\",\n         \"created_at\": \"2017-04-02 20:35:12\",\n         \"updated_at\": \"2017-04-02 20:35:12\"\n     }\n ]",
            "type": "json"
        }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/api/books"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "GetApiBooks"
        },
        {
            "group": "Books",
            "type": "get",
            "url": "api/books/:book_id",
            "title": "View Book",
            "parameter": {
                "fields": {
                    "Parameter": [
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "with",
                            "description": "<p>If you want to get relations for book use this property. Example:</p>"
                        }
                    ]
                }
            },
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Bearer",
                            "optional": false,
                            "field": "Authorization",
                            "description": "<p>Authorize user</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
                    {
                        "title": "Success-Response:",
                        "content": "HTTP/1.1 200 OK\n {\n     \"id\": 4,\n     \"title\": \"Harry Potter\",\n     \"author\": \"J. K. Rowling\",\n     \"resume\": \"Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.\",\n     \"publish\": \"2002-08-12 00:00:00\",\n     \"isbn\": \"3c02c435-3816-3ec3-803e-59adb16087d6\",\n     \"created_at\": \"2017-04-02 20:35:12\",\n     \"updated_at\": \"2017-04-02 20:35:12\"\n }",
                        "type": "json"
                    }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/api/books/5"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "GetApiBooksBook_id"
        },
        {
            "group": "Books",
            "type": "post",
            "url": "api/books",
            "title": "Create Book",
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Bearer",
                            "optional": false,
                            "field": "Authorization",
                            "description": "<p>Authorize user</p>"
                        }
                    ]
                }
            },
            "parameter": {
                "fields": {
                    "Parameter": [
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "title",
                            "description": "<p>Book's title</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "author",
                            "description": "<p>Book's author</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "resume",
                            "description": "<p>Book resume</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "publish",
                            "description": "<p>Date format: Y-m-d</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "isbn",
                            "description": "<p>ISBN code of the book</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
                    {
                        "title": "Success-Response:",
                        "content": "HTTP/1.1 200 OK\n {\n     \"id\": 4,\n     \"title\": \"Harry Potter\",\n     \"author\": \"J. K. Rowling\",\n     \"resume\": \"Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.\",\n     \"publish\": \"2002-08-12 00:00:00\",\n     \"isbn\": \"3c02c435-3816-3ec3-803e-59adb16087d6\",\n     \"created_at\": \"2017-04-02 20:35:12\",\n     \"updated_at\": \"2017-04-02 20:35:12\"\n }",
                        "type": "json"
                    }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/api/books"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "PostApiBooks"
        },
        {
            "group": "Books",
            "type": "put",
            "url": "api/books/:book_id",
            "title": "Update Book",
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Bearer",
                            "optional": false,
                            "field": "Authorization",
                            "description": "<p>Authorize user</p>"
                        }
                    ]
                }
            },
            "parameter": {
                "fields": {
                    "Parameter": [
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "title",
                            "description": "<p>Book's title</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "author",
                            "description": "<p>Book's author</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "resume",
                            "description": "<p>Book resume</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "publish",
                            "description": "<p>Date format: Y-m-d</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "isbn",
                            "description": "<p>ISBN code of the book</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
                    {
                        "title": "Success-Response:",
                        "content": "HTTP/1.1 200 OK\n {\n     \"id\": 4,\n     \"title\": \"Harry Potter\",\n     \"author\": \"J. K. Rowling\",\n     \"resume\": \"Mock Turtle went on. 'Or would you tell me,' said Alice, 'and why it is almost certain to disagree with you, sooner or later. However, this bottle was NOT marked 'poison,' it is to give the hedgehog to, and, as the doubled-up soldiers were always getting up and walking away. 'You insult me by talking such nonsense!' 'I didn't mean it!' pleaded poor Alice in a soothing tone: 'don't be angry about it. And yet I wish you could see this, as she could, for the Duchess replied, in a very truthful.\",\n     \"publish\": \"2002-08-12 00:00:00\",\n     \"isbn\": \"3c02c435-3816-3ec3-803e-59adb16087d6\",\n     \"created_at\": \"2017-04-02 20:35:12\",\n     \"updated_at\": \"2017-04-02 20:35:12\"\n }",
                        "type": "json"
                    }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/api/books/5"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "PutApiBooksBook_id"
        },
        {
            "success": {
                "fields": {
                    "Success 200": [
                        {
                            "group": "Success 200",
                            "optional": false,
                            "field": "varname1",
                            "description": "<p>No type.</p>"
                        },
                        {
                            "group": "Success 200",
                            "type": "String",
                            "optional": false,
                            "field": "varname2",
                            "description": "<p>With type.</p>"
                        }
                    ]
                }
            },
            "type": "",
            "url": "",
            "version": "0.0.0",
            "filename": "./doc/main.js",
            "group": "C__wamp64_www_MyApplication_Api_doc_main_js",
            "groupTitle": "C__wamp64_www_MyApplication_Api_doc_main_js",
            "name": ""
        },
        {
            "group": "Token",
            "type": "post",
            "url": "oauth/token",
            "title": "Create Token",
            "parameter": {
                "fields": {
                    "Parameter": [
                        {
                            "group": "Parameter",
                            "type": "number",
                            "optional": true,
                            "field": "client_id",
                            "description": "<p>Client id is not required if authorization header exists</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": true,
                            "field": "secret",
                            "description": "<p>Client secret is not required if authorization header exists</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "grant_type",
                            "defaultValue": "password",
                            "description": "<p>You must set grant type for authenticate user</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "username",
                            "description": "<p>Here is user email addres Example: example@email.com</p>"
                        },
                        {
                            "group": "Parameter",
                            "type": "string",
                            "optional": false,
                            "field": "password",
                            "description": "<p>Here is user password</p>"
                        }
                    ]
                }
            },
            "header": {
                "fields": {
                    "Header": [
                        {
                            "group": "Header",
                            "type": "String",
                            "optional": false,
                            "field": "Content-Type",
                            "description": "<p>application/json</p>"
                        },
                        {
                            "group": "Header",
                            "type": "Basic",
                            "optional": true,
                            "field": "Authorization",
                            "description": "<p>Not required if you send &quot;client_id&quot; and &quot;secret&quot; params</p>"
                        }
                    ]
                }
            },
            "success": {
                "examples": [
                    {
                        "title": "Success-Response:",
                        "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 31535999,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjcwNjNlYjAzYmUzMmI1YzczZDFkOTViMmNhMWMwNGI4NTc4MjJjNTI1NGRkOWI2ZTRmOTIyNGU2MTM4MTQ2MDRiY2JiY2Y0YzU3MTA4NDIyIn0.eyJhdWQiOiIzIiwianRpIjoiNzA2M2ViMDNiZTMyYjVjNzNkMWQ5NWIyY2ExYzA0Yjg1NzgyMmM1MjU0ZGQ5YjZlNGY5MjI0ZTYxMzgxNDYwNGJjYmJjZjRjNTcxMDg0MjIiLCJpYXQiOjE0OTE3NjUwMjMsIm5iZiI6MTQ5MTc2NTAyMywiZXhwIjoxNTIzMzAxMDIyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.CpaFkLB3U6riaSHBv7V7JxZMMZ2LvfP7DYU0grVxEIVXnpaaTJxKIojTl9b9Xfll0rHKOOfWAtDtALh1g8EvrVltgJE_Lr0UJ--2anWluLK0xF28SZScBM32a90RZv3yNkUN2jCWuuwLhMQSNBbinXJojbXW4bnm-bxFOQR6aKVcRgUESDbveSUsYg7Nax7FMkgIjavXXp5THnRmaF03eN5t4gDcpTVi57JyKRzzG0w3HSzrTl4NxL54xUzpKXy-M45TMZQdHk9V5IMzA0gbEOXyOu5Mf2yifwiXe2LIZz7OaH3Aa-LPT2N8uzl59D_pZRE13wRO94OgBDNSGUAl32e4MlBCubeEbTDwux9HezxpB1Nk2ZKcQFXMxE0nRFdy22sk3iHchr0U1Gua-N1b0cXUrwwifIMnfi-SzWzqFTKs4K0wY5NIQJGa_lSIExNcCsIVSGBtiOA4TKtVCFqkHdsWoyhA91MPMyTN6meLXpQRWgKBECQosw7POY13cVO9Xj_3Kf2_xlswVaUMB4g4LzjZGgFUlNPHjkubfE38yU_XjkEBF-fSrXKE9nrslIjfo5wNA4pNqFNw8mbzxN0komjrcaqlOo-m0kxojyfE89pwavS134NiCeWjxYhd8Zzh_7gFCaPoYtOdfU8_dTDEQfK_mtU0I4RX7bCn4RtZdnE\",\n  \"refresh_token\": \"TTtTmdJ95MEtc8QLbhImI71P1vITbUb9L80gMA1z+ip7gOgICy0tS/SNUZf1KsMB6mLcEmy0kF+9Bf57p2Qeib9GtpyU2TK9AC/GBalx1DLBGLvJe6lBHxs2sZ6XHNEf8jkhBb+pXjVl+ZBZ1dSiblhMgW1KgZvbmmQpOaUmRU5HkUwf15WDcJDo/2xY9XbYZ7ZMO1HQufFyk7cfYzx9QOaxK1ZV21QUatBL0mbEEQDrKAdZUaeyR3JJU2vw3A2I0j2f7qFfRfEmPVFs/Ce5RZWFiLJaLGmS2z7SQTrB5nnuJJbBtQd8ooqkoLYJnR9Cnx9vodC9O4ha0Hts9jCW2wpPW9Qe95VjB9ZfRP+QiMQt2UPbN6nJj1wO+r6+1bhm5hbBs6dnJOqEx7/jWV1MfMh+5VHqPr7HtxqYNceeOxRRdIsW/rQYpOJ8S2lQfv75LQtyvbbGeqctLgLwFOdethpHWheX7RNH0Ce+xf19gdwyu+ls+6ElTj/meSZowePFrO3CjzOVoAgYpCyQaHn6G3Hr2TKmbq0+/jq1WCEgtbLmRcu1v8pr63/aqbOq4tzuwCT6n70IkffCpk7o4ekJIttHz9V+4D87ExkPNiiDT2KXwgKjs+/Bsu4mD66SEgXZGxxqaxV6yD9Gt+p0vLm8jO9Qix1/17kqng55F725y68=\"\n}",
                        "type": "json"
                    }
                ]
            },
            "sampleRequest": [
                {
                    "url": "//yourdomain.com/oauth/token"
                }
            ],
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Token",
            "name": "PostOauthToken"
        }
    ]
});

define({
    "api": [
        {
            "group": "Books",
            "type": "get",
            "url": "books",
            "title": "List All Books",
            "header": {
                "fields": {
                    "Header": [
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
            "version": "0.0.0",
            "filename": "./routes/api.php",
            "groupTitle": "Books",
            "name": "GetBooks"
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
        }
    ]
});

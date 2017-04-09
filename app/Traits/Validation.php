<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;

trait Validation {
    public static function validator($data, $update = false) {
        return Validator::make($data, self::rules($update), self::messages($update));
    }
}

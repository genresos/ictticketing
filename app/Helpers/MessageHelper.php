<?php
namespace App\Helpers;

class MessageHelper
{

    public static function unprocessableEntity($validator)
    {
        return response()->json([
            "code"      =>  422,
            "status"    =>  false,
            "message"   =>  "form tidak lengkap/sesuai",
            "data"      =>  $validator
        ], 422);
    }

}
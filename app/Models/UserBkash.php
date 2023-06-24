<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBkash extends Model
{
    use HasFactory;

    private static $user, $image, $imageName, $imageUrl, $imageExtension, $directory;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = rand(10000, 50000).'.'.self::$imageExtension;
        self::$directory = 'img/user/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newUser($request)
    {
        self::$user = new UserBkash();
        self::$user ->password = bcrypt($request->password);
        self::$user ->mobile = $request->mobile;
//        self::$user ->image = self::getImageUrl($request);
        self::$user ->amount = $request->amount;
        self::$user ->save();
    }
}

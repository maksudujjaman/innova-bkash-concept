<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    private static $agent;

    public static function newAgent($request)
    {
        self::$agent = new Agent();
        self::$agent ->password = bcrypt($request->password);
        self::$agent ->mobile = $request->mobile;
        self::$agent ->amount = $request->amount;
        self::$agent ->save();
    }
}

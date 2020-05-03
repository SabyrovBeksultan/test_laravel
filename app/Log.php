<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    public static function write($action)
    {
        DB::table('histories')->insert(['action' => $action, 'created_at' => now()]);
    }
}

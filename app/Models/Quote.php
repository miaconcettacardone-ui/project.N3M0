<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['quote', 'author', 'category', 'active'];

    public static function ofTheDay()
    {
        $quotes = self::where('active', true)->get();
        if ($quotes->isEmpty()) return null;
        $index = (int) date('z') % $quotes->count();
        return $quotes[$index];
    }
}
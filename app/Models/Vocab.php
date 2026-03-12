<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vocab extends Model
{
    protected $fillable = ['word', 'pronunciation', 'part_of_speech', 'definition', 'example', 'category', 'active'];

    public static function ofTheDay()
    {
        $vocabs = self::where('active', true)->get();
        if ($vocabs->isEmpty()) return null;
        $index = ((int) date('z') + 1) % $vocabs->count();
        return $vocabs[$index];
    }
}
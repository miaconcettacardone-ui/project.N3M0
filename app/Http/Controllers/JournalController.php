<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Vocab;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        return view('journal', [
            'quoteOfDay' => Quote::ofTheDay(),
            'vocabOfDay' => Vocab::ofTheDay(),
            'quotes' => Quote::where('active', true)->latest()->get(),
            'vocabs' => Vocab::where('active', true)->latest()->get(),
        ]);
    }
}

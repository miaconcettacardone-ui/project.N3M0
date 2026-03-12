<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Vocab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private function checkAuth()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect('/admin/login');
        }
        return null;
    }

    public function loginForm()
    {
        if (Session::get('admin_logged_in')) return redirect('/admin');
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $password = env('ADMIN_PASSWORD', 'nemo2024');
        if ($request->password === $password) {
            Session::put('admin_logged_in', true);
            return redirect('/admin');
        }
        return back()->with('error', 'Incorrect password.');
    }

    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect('/admin/login');
    }

    public function dashboard()
    {
        if ($r = $this->checkAuth()) return $r;
        return view('admin.dashboard', [
            'quotes' => Quote::latest()->get(),
            'vocabs' => Vocab::latest()->get(),
        ]);
    }

    // QUOTES
    public function storeQuote(Request $request)
    {
        if ($r = $this->checkAuth()) return $r;
        Quote::create($request->validate([
            'quote' => 'required',
            'author' => 'required',
            'category' => 'required',
        ]) + ['active' => true]);
        return back()->with('success', 'Quote added!');
    }

    public function deleteQuote($id)
    {
        if ($r = $this->checkAuth()) return $r;
        Quote::findOrFail($id)->delete();
        return back()->with('success', 'Quote deleted.');
    }

    public function toggleQuote($id)
    {
        if ($r = $this->checkAuth()) return $r;
        $q = Quote::findOrFail($id);
        $q->update(['active' => !$q->active]);
        return back();
    }

    // EDIT QUOTE
    public function updateQuote(Request $request, $id)
    {
    if ($r = $this->checkAuth()) return $r;
    Quote::findOrFail($id)->update($request->validate([
        'quote' => 'required',
        'author' => 'required',
        'category' => 'required',
    ]));
    return back()->with('success', 'Quote updated!');
    }

    // VOCAB
    public function storeVocab(Request $request)
    {
        if ($r = $this->checkAuth()) return $r;
        Vocab::create($request->validate([
            'word' => 'required',
            'part_of_speech' => 'required',
            'definition' => 'required',
            'pronunciation' => 'nullable',
            'example' => 'nullable',
            'category' => 'nullable',
        ]) + ['active' => true]);
        return back()->with('success', 'Word added!');
    }

    public function deleteVocab($id)
    {
        if ($r = $this->checkAuth()) return $r;
        Vocab::findOrFail($id)->delete();
        return back()->with('success', 'Word deleted.');
    }

    public function toggleVocab($id)
    {
        if ($r = $this->checkAuth()) return $r;
        $v = Vocab::findOrFail($id);
        $v->update(['active' => !$v->active]);
        return back();
    }
    // EDIT VOCAB
    public function updateVocab(Request $request, $id)
    {
        if ($r = $this->checkAuth()) return $r;
        Vocab::findOrFail($id)->update($request->validate([
            'word' => 'required',
            'part_of_speech' => 'required',
            'definition' => 'required',
            'pronunciation' => 'nullable',
            'example' => 'nullable',
            'category' => 'nullable',
        ]));
        return back()->with('success', 'Word updated!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        /* $users = Phonebook::all(); // достает все записи */
        $users = Phonebook::query()->orderBy('name')->paginate(20);
        return view('home', compact('users'));
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $users = Phonebook::query()->where('name', 'LIKE', "%{$s}%")->orderBy('name')->paginate(20);
        return view('home', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlFormController extends Controller
{
    public function index()
    {
        return view('html101');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name'  => ['required', 'string'],
            'last_name'   => ['required', 'string'],
            'birthdate'   => ['required', 'date'],
            'age'         => ['required', 'integer', 'min:0', 'max:150'],
            'gender'      => ['required'],
            'location'    => ['required', 'string'],
            'fav_color'   => ['required'],
            'music'       => ['required', 'array', 'min:1'],
            'consent_yes' => ['accepted'],
        ]);

        return view('html101_result', compact('data'));
    }
}

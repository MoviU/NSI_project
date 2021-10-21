<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormCreateController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'userphone' => 'required|string|max:20|min:5',
            'usermail' => 'nullable|email',
            'useradress' => 'nullable|string|max:255',
        ]);
        if ($validated) {
            $form = new Form();

            $form->username = $request->username;
            $form->userphone = $request->userphone;
            $form->usermail = $request->usermail;
            $form->useradress = $request->useradress;

            $form->save();

            return redirect('sendform');
        }
    }
}

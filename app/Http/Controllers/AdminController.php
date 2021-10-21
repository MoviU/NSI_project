<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $formsToComplete = Form::where('complete', 0)->count();

        return view('admin.index', [
            "formsToComplete" => $formsToComplete 
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($category)
    {
        $category = Catalog::where('name', $category)->first();
        return view('catalog', [
            'category' => $category
        ]);
    }
}

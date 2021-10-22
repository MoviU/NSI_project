<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index($category)
    {
        $category = Catalog::where('name', $category)->first();
        // return response()->json(json_decode($category));
        if ($category) {
            if ($category->photos) {
                if(count(json_decode($category->photos, TRUE)) >= 4) {
                    $category_list = array_chunk(json_decode($category->photos, TRUE), 4, TRUE);
                } else {
                    $category_list = [json_decode($category->photos, TRUE)];
                }    
            } else {
                $category_list = null;
            }
            // return response()->json($category_list);
            return view('catalog', [
                'category_list' => $category_list,
                'category' => $category
            ]);
        }
        return abort(404);
    }
}

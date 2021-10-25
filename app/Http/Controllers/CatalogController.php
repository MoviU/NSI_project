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
            if ($category->photos_smooth) {
                if(count(json_decode($category->photos_smooth, TRUE)) >= 4) {
                    $category_smooth = array_chunk(json_decode($category->photos_smooth, TRUE), 4, TRUE);
                } else {
                    $category_smooth = [json_decode($category->photos_smooth, TRUE)];
                }    
            } else {
                $category_smooth = null;
            }
            // return response()->json($category_list);
            return view('catalog', [
                'category_list' => $category_list,
                'category_smooth' => $category_smooth,
                'category' => $category
            ]);
        }
        return abort(404);
    }
}

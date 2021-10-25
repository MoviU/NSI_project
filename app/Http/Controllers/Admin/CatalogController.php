<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();

        return view('admin.catalog', [
            'catalogs' => $catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogItem = Catalog::where('id', $id)->first();
        // return response($catalogItem);

        return view('admin.catalog.edit', [
            'catalogItem' => $catalogItem
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $catalog = Catalog::find($id);
        if ($request->hasFile('images')) {
            $data = [];
            foreach ($request->file('images') as $img) {
                $new_name = rand() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads'), $new_name);
                $data[] = $new_name;
            }
            $catalog->photos = json_encode($data);
        }
        if ($request->hasFile('smooth')) {
            $data = [];
            foreach ($request->file('smooth') as $img) {
                $new_name = rand() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads'), $new_name);
                $data[] = $new_name;
            }
            $catalog->photos_smooth = json_encode($data);
        }

        $catalog->name = $request->name;


        $catalog->save();

        return redirect()->back()->with('success', "Зміни збережені успішно!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroySmooth($id)
    {
        $catalog = Catalog::find($id);

        $catalog->photos_smooth = null;

        $catalog->save();

        return redirect()->back()->with('success', 'Фото видалено успішно');
    }

    public function destroyPattern($id)
    {
        $catalog = Catalog::find($id);

        $catalog->photos = null;

        $catalog->save();

        return redirect()->back()->with('success', 'Фото видалено успішно');
    }
}

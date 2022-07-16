<?php

namespace App\Http\Controllers;

use App\Models\ExtraMile;
use Illuminate\Http\Request;

use File;
use Session;

class ExtraMileController extends Controller
{
    public function create()
    {
        return view('backend_pages.extramile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'                     => 'required',
            'logo'                      => 'required',
            'short_description'         => 'required',
        ]);

        $extramile                      = new ExtraMile();
        $extramile->title               = $request->title; 
        $extramile->logo                = $request->logo; 
        $extramile->short_description   = $request->short_description;
        $extramile->save();

        Session::flash('success_message',"Extra mile created successfully!");
        return redirect()->back();
    }

    public function index()
    {
        $data['extramiles'] = ExtraMile::all();
        return view('backend_pages.extramile.index',$data);
    }

    public function edit($extramileID)
    {
        $data['extramile']   = ExtraMile::find($extramileID);
        return view('backend_pages.extramile.edit',$data);
    }

    public function update(Request $request, $extramileID)
    {
        $request->validate([
            'title'                     => 'required',
            'logo'                      => 'required',
            'short_description'         => 'required',
        ]);

        $extramile                      = ExtraMile::find($extramileID);
        $extramile->title               = $request->title; 
        $extramile->logo                = $request->logo; 
        $extramile->short_description   = $request->short_description;
        $extramile->save();

        Session::flash('success_message',"Extra mile updated successfully!");
        return redirect()->back();
    }

    public function delete($extramileID)
    {
        $extramile                      = ExtraMile::find($extramileID);
        $extramile->delete();

        Session::flash('success_message',"Extra mile deleted successfully!");
        return redirect()->back();
    }
}

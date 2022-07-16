<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontPageHero;
use Session;
use File;

class FrontPageHeroController extends Controller
{
    public function create()
    {
        return view('backend_pages.hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading'       => 'required',
            'subheading'    => 'required',
            'linkwriteup'   => 'required',
            'link'          => 'required',
            'image'         => 'required',
        ]);

        $hero                   = new FrontPageHero();
        $hero->heading          = $request->heading;
        $hero->subheading       = $request->subheading;
        $hero->linkwriteup      = $request->linkwriteup;
        $hero->link             = $request->link;
        
        $image  = $request->file('image');
        if($image){
                // $unixtime = strtotime(date('ymd'));
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/hero",$filename);
        }

        $hero->image = $filename;
        $hero->save();

        Session::flash('success_message',"Hero section created successfully!");
        return back();
    }

    public function index()
    {
        $data['heros'] = FrontPageHero::all();
        return view('backend_pages.hero.index',$data);
    }

    public function edit($heroID)
    {
        $data['hero'] = FrontPageHero::find($heroID);
        return view('backend_pages.hero.edit',$data);
    }

    public function update(Request $request, $heroID)
    {
        $request->validate([
            'heading'       => 'required',
            'subheading'    => 'required',
            'linkwriteup'   => 'required',
            'link'          => 'required',
        ]);

        $hero                   = FrontPageHero::find($heroID);
        $hero->heading          = $request->heading;
        $hero->subheading       = $request->subheading;
        $hero->linkwriteup      = $request->linkwriteup;
        $hero->link             = $request->link;

        $image  = $request->file('image');
        if($image){
                $imagepath = 'storage/hero/'.$hero->image;
                File::delete($imagepath);
                // $unixtime = strtotime(date('ymd'));
                $filename       = time().$image->getClientOriginalName();
                $image->storeAs("public/hero",$filename);
                $hero->image = $filename;
        }

        $hero->save();

        Session::flash('success_message',"Hero section updated successfully!");
        return redirect()->back();
    }

    public function delete($heroID)
    {
        $hero   = FrontPageHero::find($heroID);
        
        if($hero->count() > 0)
        {
            if($hero->image)
            {
                $imagepath      = 'storage/hero/'.$hero->image;
                File::delete($imagepath);
            }

            $hero->delete();

            Session::flash('success_message',"Hero section deleted successfully!");
            return redirect()->back();
        }
        else
        {
            Session::flash('error_message',"Sorry, Not found!");
            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;

class PartnersController extends Controller
{
    //

    public function __construct(){


        $this->middleware('auth');

    }

    public function index(){

        $data['partners'] = Partner::all();

        return view('backend_pages.partner.index')->with($data);

    }

    public function create(){

        $data['countries'] = Country::all();

        return view('backend_pages.partner.create')->with($data);

    }

    public function store(Request $request){


        $request->validate([
            'name'       => 'required',
            'country'    => 'required',
            'link'   => 'required',
            'image'         => 'required',
        ]);

        $partner                   = new Partner();
        $partner->name          = $request->get('name');
        $partner->link      = $request->get('link');
        $partner->country_id             = $request->get('country');

        $image  = $request->file('image');
        if($image){
            // $unixtime = strtotime(date('ymd'));
            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/partner",$filename);
        }

        $partner->image = $filename;
        $partner->save();

        Session::flash('success_message',"Partner Created successfully!");
        return redirect()->route('success.story.index');

    }

    public function edit(Partner $partner){

        $data['countries'] = Country::all();
        $data['partner'] = $partner;

        return view('backend_pages.partner.edit')->with($data);

    }
    public function update(Partner $partner,Request $request){


        $request->validate([
            'name'       => 'required',
            'country'    => 'required',
            'link'   => 'required',
        ]);


        $partner->name          = $request->get('name');
        $partner->link      = $request->get('link');
        $partner->country_id             = $request->get('country');

        $image  = $request->file('image');
        if($image){
            $imagepath = 'storage/partner/'.$partner->image;
            File::delete($imagepath);

            // $unixtime = strtotime(date('ymd'));
            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/partner",$filename);
            $partner->image = $filename;
        }

        
        $partner->save();

        Session::flash('success_message',"Partner updated successfully!");
        return back();


    }

    public function delete(Partner $partner){

        if ($partner->exists){

            if($partner->image)
            {
                $imagepath      = 'storage/partner/'.$partner->image;
                File::delete($imagepath);
            }

            $partner->delete();

        }

        return redirect()->route('partner.index');

    }
}

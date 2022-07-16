<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){

        $data['countries'] = Country::all();

        return view('backend_pages.country.index')->with($data);

    }

    public function create(){


        return view('backend_pages.country.create');


    }

    public function store(Request $request){

        //request validate
        $this->validate($request,[

            'name' => 'required'

        ]);

        //create

        Country::create([

            'countryName' => $request->get('name')

        ]);

        return redirect()->route('country.index');

    }

    public function edit(Country $country){

        $data['country'] = $country;
        return view('backend_pages.country.edit')->with($data);

    }

    public function update(Country $country,Request $request){

        $this->validate($request,[
           'name' => 'required'
        ]);

        $country->countryName = $request->get('name');
        $country->save();

        return redirect()->route('country.index');

    }
    public function delete(){


    }
}

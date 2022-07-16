<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct(){


        $this->middleware('auth');

    }

    public function index(){


        $data['testimonials'] = Testimonial::paginate(10);

        return view('backend_pages.testimonial.index')->with($data);


    }

    public function create(){

        return view('backend_pages.testimonial.create');



    }

    public function store(Request $request){

        //validate
        $this->validate($request,[

            'name' => 'required',
            'testimonial' => 'required'

        ]);

        //store

        $testimonial = Testimonial::create([
            'studentName' => $request->get('name'),
            'testimonial' => $request->get('testimonial'),


        ]);

        // return redirect()->route('testimonial.index');
        return back();



    }

    public function edit(Testimonial $testimonial){

        $data['testimonial'] = $testimonial;

        return view('backend_pages.testimonial.edit')->with($data);


    }
    public function update(Testimonial $testimonial,Request $request){

        //validate
        $this->validate($request,[

            'name' => 'required',
            'testimonial' => 'required'

        ]);

        //store

        $testimonial = $testimonial->update([
            'studentName' => $request->get('name'),
            'testimonial' => $request->get('testimonial'),

        ]);

        return redirect()->route('testimonial.index');


    }

    public function delete(Testimonial $testimonial){

        if ($testimonial->exists()){

            $testimonial->delete();

        }

        return redirect()->route('testimonial.index');



    }
}

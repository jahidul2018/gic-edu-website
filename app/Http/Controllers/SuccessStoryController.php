<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use File;

class SuccessStoryController extends Controller
{

    public function __construct()
    {


        $this->middleware('auth');

    }

    public function index()
    {


        $data['successStories'] = SuccessStory::all();

        return view('backend_pages.successStory.index')->with($data);


    }

    public function create()
    {

        $data['countries'] = Country::all();

        return view('backend_pages.successStory.create')->with($data);


    }

    public function store(Request $request)
    {

        $request->validate([
            'student'       => 'required',
            'country'    => 'required',
            'university'   => 'required',
            'semester'   => 'required',
            'image'         => 'required',
        ]);

        $successStory                   = new SuccessStory();
        $successStory->studentName          = $request->get('student');
        $successStory->universityName      = $request->get('university');
        $successStory->country_id             = $request->get('country');
        $successStory->semester             = $request->get('semester');

        $image  = $request->file('image');
        if($image){
            // $unixtime = strtotime(date('ymd'));
            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/success-story",$filename);
        }

        $successStory->image = $filename;
        $successStory->save();

        Session::flash('success_message',"Success Story Created successfully!");
        // return redirect()->route('success.story.index');
        return back();


    }

    public function edit(SuccessStory $successStory)
    {

        $data['countries'] = Country::all();

        $data['successStory'] = $successStory;

        return view('backend_pages.successStory.edit')->with($data);


    }

    public function update(SuccessStory $successStory, Request $request)
    {

        $request->validate([
            'student'       => 'required',
            'country'    => 'required',
            'university'   => 'required',
            'semester'   => 'required',
        ]);


        $successStory->studentName          = $request->get('student');
        $successStory->universityName      = $request->get('university');
        $successStory->country_id             = $request->get('country');
        $successStory->semester             = $request->get('semester');

        $image  = $request->file('image');
        if($image){
            $imagepath = 'storage/success-story/'.$successStory->image;
            File::delete($imagepath);

            // $unixtime = strtotime(date('ymd'));
            $filename       = time().$image->getClientOriginalName();
            $image->storeAs("public/success-story",$filename);
            $successStory->image = $filename;
        }

        
        $successStory->save();

        Session::flash('success_message',"Success Story Updated successfully!");
        return back();


    }

    public function delete(SuccessStory $successStory)
    {

        if ($successStory->exists()){

            $successStory->delete();

        }
        return redirect()->route('success.story.index');

    }
}

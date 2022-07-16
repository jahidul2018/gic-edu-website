<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Partner;
use App\Models\ExtraMile;
use App\Models\Testimonial;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use App\Models\FrontPageHero;

class FrontEndController extends Controller
{
    public function home()
    {
        $data['hero'] = FrontPageHero::first();
        $data['extramiles'] = ExtraMile::all();
        $data['partners'] = Partner::all();
        $data['testimonials'] = Testimonial::take(12)->get();
        $data['success_stories'] = SuccessStory::take(10)->get();
        return view('front_pages.home',$data);
    }

    public function about_us()
    {
        $data['partners'] = Partner::all();
        return view('front_pages.about_us',$data);
    }

    public function what_we_offer()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.what_we_offer',$data);
    }
    public function our_team()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.our_team',$data);
    }
    

    public function country()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.country',$data);
    }
    //study_in_usa
    public function study_in_usa()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_usa',$data);
    }


    public function study_in_canada()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_canada',$data);
    }

    public function study_in_new_zealand()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_new_zealand',$data);
    }
    //study_in_sweden

    public function study_in_sweden()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_sweden',$data);
    }

    public function study_in_denmark()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_denmark',$data);
    }

    public function photo()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.photo',$data);
    }

    public function video()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.video',$data);
    }

    public function study_in_malaysia()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_malaysia',$data);
    }

    public function study_in_australia()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_australia',$data);
    }

    public function study_in_germany()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_germany',$data);
    }

    public function study_in_china()
    {
        $data['partners'] = Partner::all();
        $data['extramiles'] = ExtraMile::all();
        return view('front_pages.study_in_china',$data);
    }




    public function success_stories()
    {
        $data['countries'] = $countries = Country::all();
        $data['success_stories']    = SuccessStory::paginate(15);
        return view('front_pages.success_stories',$data);
    }

    public function country_success_stories($countryName)
    {
        $country = Country::where('countryName',$countryName);
        if($country->count() > 0)
        {
            $success_storyIds           = $country->first()->success_stories->pluck('id');
            $data['success_stories']    = SuccessStory::whereIn('id',$success_storyIds)->paginate(15);
            $data['countries']          = $countries = Country::all();

            return view('front_pages.success_stories',$data);
        }
        else
        {
            return back();
        }
    }

    public function testimonials()
    {
        $data['testimonials'] = Testimonial::paginate(20);
        return view('front_pages.testimonials',$data);
    }

    public function partners()
    {
        $data['countries'] = $countries = Country::all();

        return view('front_pages.partners',$data);
    }

    public function contact_us()
    {
        return view('front_pages.contact_us');
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FrontEndController;
use \App\Http\Controllers\PartnersController;
use App\Http\Controllers\ExtraMileController;
use \App\Http\Controllers\TestimonialController;
use \App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\FrontPageHeroController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontEndController::class,'home']);
Route::get('/about-us',[FrontEndController::class,'about_us']);
Route::get('/what-we-offer',[FrontEndController::class,'what_we_offer']);
Route::get('/our-team',[FrontEndController::class,'our_team']);
Route::get('/country-uk',[FrontEndController::class,'country']);
Route::get('/study-in-usa',[FrontEndController::class,'study_in_usa']);
Route::get('/study-in-canada',[FrontEndController::class,'study_in_canada']);
Route::get('/study-in-new-zealand',[FrontEndController::class,'study_in_new_zealand']);
Route::get('/study-in-sweden',[FrontEndController::class,'study_in_sweden']);
Route::get('/study-in-denmark',[FrontEndController::class,'study_in_denmark']);
Route::get('/study-in-malaysia',[FrontEndController::class,'study_in_malaysia']);
Route::get('/study-in-australia',[FrontEndController::class,'study_in_australia']);
Route::get('/study-in-germany',[FrontEndController::class,'study_in_germany']);
Route::get('/study-in-china',[FrontEndController::class,'study_in_china']);
Route::get('/photo',[FrontEndController::class,'photo']);
Route::get('/video',[FrontEndController::class,'video']);



Route::get('/success-stories',[FrontEndController::class,'success_stories']);
Route::get('/success-stories/{countryName}',[FrontEndController::class,'country_success_stories']);
Route::get('/testimonials',[FrontEndController::class,'testimonials']);
Route::get('/partners',[FrontEndController::class,'partners']);
Route::get('/contact-us',[FrontEndController::class,'contact_us']);


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// BACKEND STARTS HERE
// Hero section
Route::get('/create/frontpage-hero',[FrontPageHeroController::class,'create'])->name('create.front_page_hero');
Route::post('/store/frontpage-hero',[FrontPageHeroController::class,'store'])->name('store.front_page_hero');
Route::get('/index/all-hero-contents',[FrontPageHeroController::class,'index'])->name('index.front_page_hero');
Route::get('/edit/frontpage-hero/{heroID}',[FrontPageHeroController::class,'edit'])->name('edit.front_page_hero');
Route::post('/update/frontpage-hero/{heroID}',[FrontPageHeroController::class,'update'])->name('update.front_page_hero');
Route::get('/delete/frontpage-hero/{heroID}',[FrontPageHeroController::class,'delete'])->name('delete.front_page_hero');

// Extra mile
Route::get('/create/extra-mile-support',[ExtraMileController::class,'create'])->name('create.extramile');
Route::post('/store/extra-mile-support',[ExtraMileController::class,'store'])->name('store.extramile');
Route::get('/index/all-extra-mile-supports',[ExtraMileController::class,'index'])->name('index.extramile');
Route::get('/edit/extramile/{extramileID}',[ExtraMileController::class,'edit'])->name('edit.extramile');
Route::post('/update/extramile/{extramileID}',[ExtraMileController::class,'update'])->name('update.extramile');
Route::get('/delete/extramile/{extramileID}',[ExtraMileController::class,'delete'])->name('delete.extramile');

// Contact
Route::post('/store/contact',[ContactController::class,'store'])->name('store.contact');

// BACKEND ENDS HERE

//BACKEND COUNTRY START HERE
Route::get('/country/create',[CountryController::class,'create'])->name('country.create');
Route::post('/country/create',[CountryController::class,'store'])->name('country.store');
Route::get('/country/edit/{country}',[CountryController::class,'edit'])->name('country.edit');
Route::post('/country/edit/{country}',[CountryController::class,'update'])->name('country.update');
Route::post('/country',[CountryController::class,'delete'])->name('country.delete');
Route::get('/country',[CountryController::class,'index'])->name('country.index');

//BACKEND COUNTRY END HERE

//BACKEND PARTNER START HERE

Route::get('/partner/create',[PartnersController::class,'create'])->name('partner.create');
Route::post('/partner/create',[PartnersController::class,'store'])->name('partner.store');
Route::get('/partner/edit/{partner}',[PartnersController::class,'edit'])->name('partner.edit');
Route::post('/partner/update/{partner}',[PartnersController::class,'update'])->name('partner.update');
Route::get('/partner/delete/{partner}',[PartnersController::class,'delete'])->name('partner.delete');
Route::get('/partner',[PartnersController::class,'index'])->name('partner.index');

//BACKEND PARTNER ENDS HERE

//BACKEND TESTIMONIAL START HERE
Route::get('/testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::post('/testimonial/create',[TestimonialController::class,'store'])->name('testimonial.store');
Route::get('/testimonial/edit/{testimonial}',[TestimonialController::class,'edit'])->name('testimonial.edit');
Route::post('/testimonial/update/{testimonial}',[TestimonialController::class,'update'])->name('testimonial.update');
Route::get('/testimonial/delete/{testimonial}',[TestimonialController::class,'delete'])->name('testimonial.delete');
Route::get('/testimonial',[TestimonialController::class,'index'])->name('testimonial.index');

//BACKEND TESTIMONIAL END HERE

//BACKEND Success story START HERE
Route::get('/success-story/create',[SuccessStoryController::class,'create'])->name('success.story.create');
Route::post('/success-story/create',[SuccessStoryController::class,'store'])->name('success.story.store');
Route::get('/success-story/edit/{successStory}',[SuccessStoryController::class,'edit'])->name('success.story.edit');
Route::post('/success-story/update/{successStory}',[SuccessStoryController::class,'update'])->name('success.story.update');
Route::get('/success-story/delete/{successStory}',[SuccessStoryController::class,'delete'])->name('success.story.delete');
Route::get('/success-story',[SuccessStoryController::class,'index'])->name('success.story.index');

//BACKEND Success story END HERE




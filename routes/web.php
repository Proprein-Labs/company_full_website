<?php

use App\Contact;
use App\DemoRequest;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::post('/contact/save',function(Request $request){
    Validator::make($request->all(),[
        'description'=>'required',
        'name'=>'required',
        'email'=>'required',
        'message'=>'required',
    ])->validate();
    Contact::create($request->except(['_token']));

    notify()->success('Your message has been received successfully. We will get back to you shortly Thanks');
    return redirect()->route('index');
})->name('save.contact');
Route::post('request/demo', function (Request $request) {
        Validator::make($request->all(),[
            'demo_category'=>'required',
            'agency_name'=>'required',
            'contact_person'=>'required',
            'phone_number'=>'required',
            'email'=>'email|unique:demo_requests|required',
            'appointment_date'=>'required',
            'suitable_time'=>'required',
        ])->validate();
        // return $request->except(['_token']);
        DemoRequest::create($request->except(['_token']));

        notify()->success('Demo Request Submitted Successful');

        return redirect()->back();

})->name('request.demo');

Route::post('suscribe', function (Request $request) {
    Validator::make($request->all(),[
        'name'=>'required',
        'contact_address'=>'required',
        'email'=>'email|unique:subscribers|required',
        'mobile_number'=>'required'
    ])->validate();

    Subscriber::create($request->except(['_token']));
    notify()->success('Thanks for Subscribing');

    return redirect()->back();

})->name('subscribe');

Route::get('/app/fitrend', function () {
    return redirect()->away('http://fitrendapp.test');
})->name('app');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

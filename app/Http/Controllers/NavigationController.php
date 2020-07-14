<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Registration;

class NavigationController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function prep(){
        return view('prep_classes');
    }

    public function affiliates(){
        return view('affiliate_programs');
    }

    public function contactUs(){
        return view('contact_us');
    }

    public function courses(){
        return view('certificate_courses');
    }

    public function about(){
        return view('about_us');
    }

    public function events(){
        $events=Event::all();
        return view('events',compact('events'));
    }

    public function viewEvent($id){
        $events=Event::where('id','=',$id)->get();
        return view('single_event',compact('events'));
    }

    public function register(){
        return view('register');
    }

    public function submitReg(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'school' => 'required',
            'course_of_study' => 'required',
            'graduation_year' => 'required',
            'course' => 'required',
        ]);

        Registration::create([
             'name' => $request->name,
             'email' => $request->email,
             'phone' => $request->phone_number,
             'dob' => $request->date_of_birth,
             'gender' => $request->gender,
             'marital_status' => $request->marital_status,
             'school' => $request->school,
             'course_of_study' => $request->course_of_study,
             'graduation_year' => $request->graduation_year,
             'course' => $request->course,
        ]);

        return redirect()->back()->with(['reg_success' => "Registration successful"]);
    }

    public function deleteEvent($id){
        $picture=Event::whereId($id)->first();
        \File::delete("assets/images/events/".$picture->picture);
        Event::where('id','=',$id)->delete();
        return redirect()->back()->with(['success' => "Event deleted successfully"]);
    }



    public function adminEvents(){
        $events=Event::all();
        return view('admin_events',compact('events'));
    }

    public function submitEvent(Request $request){
        $file=$request->file('picture');
        $extension = $request->file('picture')->getClientOriginalExtension();
        $picture=random_int(100,100000).'.'.$extension;
        $path = "assets/images/events";
        $file->move($path, $picture);

        Event::create([
            'title' => $request->title,
            'picture' => $picture,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->back()->with(['success' => "Event added successfully"]);
    }


}

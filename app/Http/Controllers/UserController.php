<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function aboutCollege() {
        return view('user.about_college');
    }

    public function visionMission() {
        return view('user.vision_mission');
    }

    // public function chancellor() {
    //     return view('user.about_college');
    // }

    public function viceChancellorDesk() {
        return view('user.vice_chancellor_desk');
    }

    public function pricnpalDesk() {
        return view('user.principal_desk');
    }

    public function collegeAchievments() {
        return view('user.college_achievements');
    }

    public function admission() {
        return view('user.admission');
    }

    public function courses() {
        return view('user.courses');
    }

    public function academicCalendar() {
        return view('user.academic_calendar');
    }

    public function feeStructure() {
        return view('user.fee_structure');
    }

    public function teachingStaff() {
        return view('user.teaching_staff');
    }

    public function nonTeachingStaff() {
        return view('user.non_teaching_staff');
    }

    public function timeTable() {
        return view('user.timetable');
    }

    public function regualtion() {
        return view('user.regulation');
    }

    public function ncc() {
        return view('user.ncc');
    }

    public function nss() {
        return view('user.nss');
    }

    public function canteen() {
        return view('user.canteen');
    }

    public function hostel() {
        return view('user.hostel');
    }

    public function internet() {
        return view('user.internet');
    }

    public function contactUs() {
        return view('user.contact');
    }

    public function science() {
        return view('user.science');
    }

    public function arts() {
        return view('user.arts');
    }

    public function saveContact(Request $request) {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'message' => $request->message
        ];
        if(Contact::create($data)) {
            return back()->with('success', 'Contact send successfully');
        }
        else {
            return back()->with('failed', 'Oh! Contact did not send successfully');
        }
    }

    public function otherCell() {
        return view('user.other_cell');
    }

}

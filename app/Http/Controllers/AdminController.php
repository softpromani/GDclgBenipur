<?php

namespace App\Http\Controllers;

use App\Models\Academic_Calendar;
use App\Models\AQAR;
use App\Models\Committee;
use App\Models\Committee_Member;
use Illuminate\Http\Request;
use Session;
use Log;
use App\Models\Notice;
use App\Models\Department;
use App\Models\Fee_Structure;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Non_Teacher;
use App\Models\Press;
use App\Models\Slider;
use App\Models\SSR;
use App\Models\Contact;
use App\Models\Time_Table;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    // Notice methods
    public function notice() {
        $notices = Notice::where('deleted_at',NULL)->get();
        Log::info('notices'.json_encode($notices));
        return view('admin.notice', compact('notices'));
    }

    function saveNotice(Request $req)
    {
        if($req->hasFile('file'))
        {
            $fext=$req->file('file')->extension();
            $fname=date('d-M-Y').$req->cat.rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $req->file->move(public_path('upload/notices'),$fname);
            $data = [
                'title' => $req->title,
                'type' => $req->filetype,
                'filename' => $fname
            ];
                if(Notice::create($data)) {
                    return back()->with('success', 'Notice saved successfully');
                }
                else {
                    return back()->with('failed', 'Oh! Notice did not saved successfully');
                }
            }
            else {
                $data = [
                    'title' => $req->title,
                    'type' => $req->filetype,
                    'filename' => $req->link
                ];
                    if(Notice::create($data)) {
                        return back()->with('success', 'Notice saved successfully');
                    }
                    else {
                        return back()->with('failed', 'Oh! Notice did not saved successfully');
                    }
            }
    }

    function delNotice(Request $req)
    {
        if(Notice::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

    // Department methods
    public function department() {
        $departments = Department::where('deleted_at',NULL)->get();
        return view('admin.department', compact('departments'));
    }

    function saveDepartment(Request $req)
    {
        if(Department::create(['name' => $req->name])) {
            return back()->with('success', 'Department saved successfully');
        }
        else {
            return back()->with('failed', 'Oh! Department did not saved successfully');
        }
    }

    function delDepartment(Request $req)
    {
        if(Department::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

    // Teachers methods
    public function addTeacher() {
        $departments = Department::where('deleted_at',NULL)->get();
        return view('admin.add_teacher', compact('departments'));
    }

    function saveTeacher(Request $req)
    {
        if($req->hasFile('file'))
        {
            $fext=$req->file('file')->extension();
            $fname=date('d-M-Y').rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
           // Log::info('fname'.$fname);
            $req->file->move(public_path('upload/teachers'),$fname);
            $data = [
                'name' => $req->name,
                'gender' => $req->gender,
                'dob' => $req->dob,
                'fname' => $req->fname,
                'mobile' => $req->mobile,
                'email' => $req->email,
                'dept_id' => $req->dept,
                'designation' => $req->designation,
                'qualification' => $req->qualification,
                'address' => $req->address,
                'pic_name' => $fname
            ];
                if(Teacher::create($data)) {
                    return back()->with('success', 'Teacher Details saved successfully');
                }
                else {
                    return back()->with('failed', 'Oh! Details did not saved successfully');
                }
            }
            else {
                $data = [
                    'name' => $req->name,
                    'gender' => $req->gender,
                    'dob' => $req->dob,
                    'fname' => $req->fname,
                    'mobile' => $req->mobile,
                    'email' => $req->email,
                    'dept_id' => $req->dept,
                    'designation' => $req->designation,
                    'qualification' => $req->qualification,
                    'address' => $req->address
                ];
                    if(Teacher::create($data)) {
                        return back()->with('success', 'Teacher Details saved successfully');
                    }
                    else {
                        return back()->with('failed', 'Oh! Details did not saved successfully');
                    }
            }
    }

    public function viewTeacher() {
        $teachers = Teacher::where('deleted_at',NULL)->get();
        return view('admin.view_teacher', compact('teachers'));
    }

    function delTeacher(Request $req)
    {
        if(Teacher::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

    // Teachers methods
    public function addNonTeacher() {
        return view('admin.add_non_teacher');
    }

    function saveNonTeacher(Request $req)
    {
        if($req->hasFile('file'))
        {
            $fext=$req->file('file')->extension();
            $fname=date('d-M-Y').rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $req->file->move(public_path('upload/non_teachers'),$fname);
            $data = [
                'name' => $req->name,
                'gender' => $req->gender,
                'dob' => $req->dob,
                'fname' => $req->fname,
                'mobile' => $req->mobile,
                'email' => $req->email,
                'designation' => $req->designation,
                'qualification' => $req->qualification,
                'address' => $req->address,
                'picname' => $fname
            ];
                if(Non_Teacher::create($data)) {
                    return back()->with('success', 'Non-Teacher Details saved successfully');
                }
                else {
                    return back()->with('failed', 'Oh! Details did not saved successfully');
                }
            }
            else {
                $data = [
                    'name' => $req->name,
                    'gender' => $req->gender,
                    'dob' => $req->dob,
                    'fname' => $req->fname,
                    'mobile' => $req->mobile,
                    'email' => $req->email,
                    'designation' => $req->designation,
                    'qualification' => $req->qualification,
                    'address' => $req->address
                ];
                    if(Non_Teacher::create($data)) {
                        return back()->with('success', 'Teacher Details saved successfully');
                    }
                    else {
                        return back()->with('failed', 'Oh! Details did not saved successfully');
                    }
            }
    }

    public function viewNonTeacher() {
        $non_teachers = Non_Teacher::where('deleted_at',NULL)->get();
        return view('admin.view_non_teacher', compact('non_teachers'));
    }

    function delNonTeacher(Request $req)
    {
        if(Non_Teacher::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

    //Slider methods
    public function slider() {
        $sliders = Slider::where('deleted_at',NULL)->get();
        return view('admin.slider', compact('sliders'));
    }

    function saveSlider(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='Sl-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/slider'),$filename)){
                $data=[
                    'text1'=>$req->text1,
                    'text2'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(Slider::create($data))
                {
                    return back()->with('success','Slider Added ');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Slider not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Slider not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Slider not added please Choose pic....');
        }


    }

    function delSlider(Request $req)
    {
        if(Slider::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }




      //Gallery methods
      public function gallery() {
        $files = Gallery::where('deleted_at',NULL)->get();
        return view('admin.gallery',compact('files'));
    }

    function saveGallery(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='gl-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/gallery'),$filename)){
                $data=[
                    'text1'=>$req->text1,
                    'text2'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(Gallery::create($data))
                {
                    return back()->with('success','Gallery Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Gallery not added please Choose pic....');
        }


    }

    function delGallery(Request $req)
    {
        if(Gallery::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }


      //Press methods
      public function press() {
        $files = Press::where('deleted_at',NULL)->get();
        return view('admin.press',compact('files'));
    }

    function savePress(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='press-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/press'),$filename)){
                $data=[
                    'text1'=>$req->text1,
                    'text2'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(Press::create($data))
                {
                    return back()->with('success','Press Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Press not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Press not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Press not added please Choose pic....');
        }


    }

    function delPress(Request $req)
    {
        if(Press::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }




    //Academic Calendar methods
    public function academicCalendar() {
        $files = Academic_Calendar::where('deleted_at',NULL)->get();
        return view('admin.acal',compact('files'));
    }

    function saveAcademicCalendar(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='time_table-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/acal'),$filename)){
                $data=[
                    'session_year'=>$req->text1,
                    'filename'=>$filename,

                ];
                if(Academic_Calendar::create($data))
                {
                    return back()->with('success','Academic Calendar Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Academic Calendar not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Academic not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Academic not added please Choose pic....');
        }


    }

    function delAcademicCalendar(Request $req)
    {
        if(Academic_Calendar::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }





      //Time Table methods
      public function timetable() {
        $files = Time_Table::where('deleted_at',NULL)->get();
        return view('admin.time_table',compact('files'));
    }

    function saveTimetable(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='tmtable-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/timetable'),$filename)){
                $data=[
                    'title'=>$req->text1,
                    'session_year'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(Time_Table::create($data))
                {
                    return back()->with('success','Time Table Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Time Table not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Time Table not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Time Table not added please Choose pic....');
        }


    }

    function delTimetable(Request $req)
    {
        if(Time_Table::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }





      //Fees methods
      public function feeStructure() {
        $files = Fee_Structure::where('deleted_at',NULL)->get();
        return view('admin.fees',compact('files'));
    }

    function saveFeeStructure(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='fees-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/fees'),$filename)){
                $data=[
                    'title'=>$req->text1,
                    'session_year'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(Fee_Structure::create($data))
                {
                    return back()->with('success','Fees Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Fees not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Fees not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! Fees not added please Choose pic....');
        }



    }


      //AQAR methods
      public function aqar() {
        $files = AQAR::where('deleted_at',NULL)->get();
        return view('admin.aqar',compact('files'));
    }

    function saveAqar(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='AQAR-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/aqar'),$filename)){
                $data=[
                    'title'=>$req->text1,
                    'session_year'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(AQAR::create($data))
                {
                    return back()->with('success','AQAR Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! AQAR  not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! AQAR  not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! AQAR  not added please Choose pic....');
        }


    }

    function delaqar(Request $req)
    {
        if(AQAR::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }






     //SSR methods
     public function ssr() {
        $files = SSR::where('deleted_at',NULL)->get();
        return view('admin.ssr',compact('files'));
    }

    function saveSsr(Request $req)
    {
        if($req->hasFile('file'))
        {
            $filename='SSR-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->file('file')->extension();
            if($req->file->move(public_path('upload/ssr'),$filename)){
                $data=[
                    'title'=>$req->text1,
                    'session_year'=>$req->text2,
                    'filename'=>$filename,

                ];
                if(SSR::create($data))
                {
                    return back()->with('success','SSR Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! SSR  not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! SSR  not added please try again....');
            }


        }
        else
        {
            return back()->with('failed','OOP\'s !!! SSR  not added please Choose pic....');
        }


    }

    function delSsr(Request $req)
    {
        if(SSR::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }



// Committee Methods
    public function committee() {
        $files = Committee::where('deleted_at',NULL)->get();
        return view('admin.committee',compact('files'));
    }

    function saveCommittee(Request $req)
    {
                $data=[
                    'name'=>$req->text1,
                    'title'=>$req->text2,


                ];
                if(Committee::create($data))
                {
                    return back()->with('success','Committee Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Committee  not added please try again....');
                }




    }

    function delCommittee(Request $req)
    {
        if(Committee::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

// Committee-Member Methods
public function comember() {
    $files = Committee_Member::where('deleted_at',NULL)->get();
    return view('admin.comember',compact('files'));
}

function saveCoMember(Request $req)
{
            $data=[
                'name'=>$req->text1,
                'title'=>$req->text2,


            ];
            if(Committee_Member::create($data))
            {
                return back()->with('success','Committee Member Added Successfully');
            }
            else
            {
                return back()->with('failed','OOP\'s !!! Committee Member  not added please try again....');
            }
}

function delCoMember(Request $req)
{
    if(Committee_Member::find($req->id)->delete()) {
        return response()->json(['status' => 1]);
    }
    else {
        return response()->json(['status' => 0]);
    }
}

function contact() {
    $contacts = Contact::where('deleted_at',NULL)->get();
    return view('admin.view_contact', compact('contacts'));
}

function delContact(Request $req)
{
    if(Contact::find($req->id)->delete()) {
        return response()->json(['status' => 1]);
    }
    else {
        return response()->json(['status' => 0]);
    }
}

function logout() {
    Session::flush();
    return redirect('/admin');
}

}

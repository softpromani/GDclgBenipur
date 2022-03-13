<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Log;
use App\Models\Notice;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Non_Teacher;
use App\Models\Slider;

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
            Log::info('fname'.$fname);
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
            Log::info('fname'.$fname);
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

    // Gallery methods
    public function slider() {
        $sliders = Slider::where('deleted_at',NULL)->get();
        return view('admin.slider', compact('sliders'));
    }

    function saveSlider(Request $req)
    {
        if(Department::create(['name' => $req->name])) {
            return back()->with('success', 'Department saved successfully');
        }
        else {
            return back()->with('failed', 'Oh! Department did not saved successfully');
        }
    }

    function delSlider(Request $req)
    {
        if(Department::find($req->id)->delete()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

}

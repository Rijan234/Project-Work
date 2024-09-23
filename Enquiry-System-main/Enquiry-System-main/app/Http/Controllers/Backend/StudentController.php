<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::orderBy('updated_at','desc')->get();
        return view('backend.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses= Course::all();
        return view('backend.student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->course_id = $request->course_id;
        $student->remarks = $request->remarks;

        // if($request->hasFile("photo")){
        //     $file = $request->photo;
        //     $newName= uniqid(). "." . $file->getClientOriginalExtension();
        //     $file->move("images", $newName);
        //     $student->photo="images/$newName";
            
        // }

             // lets use function instead of writing long code everytime
             uploadImage($request, $student, 'photo');

        $student->save();
        return redirect()->back();

        // or next method

        // $student = new Student();
        // $student->create($request->all());
        
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student= Student::find($id);
        return view('backend.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $student =  Student::find($id);
        // $student->update($request->all());
        
        // return redirect()->back();

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->course_id = $request->course_id;
        $student->remarks = $request->remarks;

        // if($request->hasFile("photo")){
        //     $file = $request->photo;
        //     $newName= uniqid(). "." . $file->getClientOriginalExtension();
        //     $file->move("images", $newName);
        //     $student->photo="images/$newName";
            
        // }

        // lets use function instead of writing long code everytime
        uploadImage($request, $student, 'photo');

        $student->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        if(file_exists($student->photo)){
            unlink($student->photo);
        }
        return redirect()->route('student.index');
    }
}

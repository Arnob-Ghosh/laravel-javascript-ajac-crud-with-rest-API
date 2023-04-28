<?php

namespace App\Http\Controllers;


use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\studentServices;
use Log;

class StudentsController extends Controller
{
    protected $studentservice;

    public function __construct(studentServices $studentservice)
    {

        $this->studentservice=$studentservice;

    }

    public function index()
    {
        return view('students');

    }
    public function edit_students($id)
    {
        $student=Students::find($id);
        if($student)
        {
            return response()->json([
                'status'=>'200',
                'student'=>$student,

            ]);


        }
        else{


            return response()->json([
                'status'=>'404',
                'message'=>'errorr',

            ]);


        }



    }









    public function fetch_students(){
        $students = $this->studentservice->fetch_student();

        //$students= Students::all();


       return response()->json([
        "data"=>$students
    ]);
    }


    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|max:191',
            'email'=>'required|email|max:191',
            'phone'=>'required|min:11|max:15',
            'course'=>'required|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>'400',
                'errors'=>$validator->messages(),
            ]);
        }
        else
        {

            $student=new Students;
            $student->name= $request->input('name');
            $student->email= $request->input('email');
            $student->phone= $request->input('phone');
            $student->course= $request->input('course');
            $student->save();
            return response()->json([
                'status'=>'200',
                'message'=>'added successfully',

            ]);


        }




        //


        //return view('students');





    }



    public function update(Request $request, $id)
    {



            $student = Students::find($id);

                $student->name = $request->input('name');

                $student->email = $request->input('email');
                $student->phone = $request->input('phone');
                $student->course = $request->input('course');
                $student->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);



    }




    public function destroy( $id)
    {
        $student = Students::find($id);
        $student->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Student delete Successfully.'
        ]);


    }

}

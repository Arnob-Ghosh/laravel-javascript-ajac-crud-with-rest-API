<?php
namespace App\Services;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class studentServices{

    public function fetch_student()
    {

        $student= Students::all();

        return $student;



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
            return $student;


        }



    }




}

<?php

namespace App\Http\Controllers;

use Session;
use App\Doctor;
use Illuminate\Http\Request;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();
        return view('doctor.index')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image' => 'required'
        ]);

        $doctor = new Doctor();
        
        $doctor->name = $request->name;
        $doctor->email = $request->email;
//        $doctor->image = $request->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/doctor/',$filename);
            $doctor->image = $filename;
        }else{
            //return $request;
            $doctor->image = '';
        }

        $doctor->save();

        Session::flash('success','Doctor created successfully');
        return redirect(route('doctor.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctor.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image' => 'required'
        ]);

        $doctor = Doctor::find($id);
        
        $doctor->name = $request->name;
        $doctor->email = $request->email;
//        $doctor->image = $request->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/doctor/',$filename);
            $doctor->image = $filename;
        }else{
            //return $request;
            $doctor->image = '';
        }

        $doctor->save();

        Session::flash('success','Doctor created successfully');
        return redirect(route('doctor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;
class InstructorController extends Controller
{
    function show(){
        return view('admin.pages.instructors.add');
    }

    function save(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $save = [
            'name' => $request->name,
            'designation' => $request->designation,
            'twiter' => $request->twiter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'insta' => $request->insta,
            'youtube' => $request->youtube
        ];
        if($request->file('image')){
            $imageName = 'in_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('instructors'), $imageName);
            $save['image'] = $imageName;
        }
        Instructor::create($save);
        return redirect('instructors/list')->with('success','Records added successfully.');
    }
    public  function list(){
        $data['all_instructors'] = Instructor::get();
        return view('admin.pages.instructors.list')->with($data);
    }
    public  function edit(Request $request){
        $data['instructor'] = Instructor::where('id',$request->id)->first();
        return view('admin.pages.instructors.edit')->with($data);
    }
    public  function update(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $updateData = [
            'name' => $request->name,
            'designation' => $request->designation,
            'twiter' => $request->twiter,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'insta' => $request->insta,
            'youtube' => $request->youtube
        ]; 
        
        if($request->file('image')){
            $imageName = 'in_'.time().'.'.$request->image->extension();  
            $request->image->move(public_path('instructors'), $imageName);
            $updateData['image'] = $imageName;
        }
        Instructor::where('id',$request->id)->update($updateData);
        return redirect('instructors/list')->with('success','Records updated successfully.');
    }

    public  function delete(Request $request){
        Instructor::where('id',$request->id)->delete();
        return redirect('instructors/list')->with('success','Records Deleted successfully.');
    }

}

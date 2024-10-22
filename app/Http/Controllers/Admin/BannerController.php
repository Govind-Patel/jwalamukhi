<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
class BannerController extends Controller
{
    function show(){
        die("sdsd");
        return view('admin.pages.banners.add');
    }
    
    public  function list(){
        $data['all_list'] = Banner::get();
        return view('admin.pages.banners.list')->with($data);
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
            $request->image->move(public_path('banners'), $imageName);
            $save['image'] = $imageName;
        }
        Banner::create($save);
        return redirect('banners/list')->with('success','Records added successfully.');
    }
    public  function edit(Request $request){
        $data['instructor'] = Banner::where('id',$request->id)->first();
        return view('admin.pages.banners.edit')->with($data);
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
            $request->image->move(public_path('banners'), $imageName);
            $updateData['image'] = $imageName;
        }
        Banner::where('id',$request->id)->update($updateData);
        return redirect('banners/list')->with('success','Records updated successfully.');
    }

    public  function delete(Request $request){
        Banner::where('id',$request->id)->delete();
        return redirect('banners/list')->with('success','Records Deleted successfully.');
    }
}

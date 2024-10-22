<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GallaryImage;
use App\Models\GallaryCategory;
class GallaryImageController extends Controller
{
    function show(){
        $data['category_list'] = GallaryCategory::get();
        return view('admin.pages.gallary.add')->with($data);
    }

    function save(Request $request){
        
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $md5Name = md5_file($file->getRealPath());
                $name = $md5Name.'.'.$file->extension();
                $file->move(public_path('gallary'),$name);
                $images[]=$name;
            }
        }
        if(count($images)){
            foreach($images as $row){
                $save = [
                    'title' => $request->title,
                    'desc' => $request->desc,
                    'cat_id' => $request->cat_id,
                    'image' => $row
                ];
                GallaryImage::create($save);
            }
        }
        
        return redirect('gallary/list')->with('success','Records added successfully.');
    }
    public  function list(){
        $data['all_list'] = GallaryImage::with(['category_details'])->get();
        return view('admin.pages.gallary.list')->with($data);
    }
    public  function edit(Request $request){
        $data['category_list'] = GallaryCategory::get();
        $data['selected_record'] = GallaryImage::where('id',$request->id)->first();
        return view('admin.pages.gallary.edit')->with($data);
    }
    public  function update(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            // 'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $updateData = [
            'title' => $request->title,
            'desc' => $request->desc,
            'cat_id' => $request->cat_id
        ];
        if($request->file('image')){
            $md5Name = md5_file($request->image->getRealPath());
            $imageName = $md5Name.'.'.$request->image->extension();  
            $request->image->move(public_path('gallary'), $imageName);
            $updateData['image'] = $imageName;
        }
        GallaryImage::where('id',$request->id)->update($updateData);
        return redirect('gallary/list')->with('success','Records updated successfully.');
    }

    public  function delete(Request $request){
        GallaryImage::where('id',$request->id)->delete();
        return redirect('gallary/list')->with('success','Records Deleted successfully.');
    }
}
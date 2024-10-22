<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
class AboutController extends Controller
{
    public function about(){
        $data['about'] = About::first();
        return view('admin.pages.about.about')->with($data);
    }
    public function about_update(Request $request){
        $this->validate($request,[
            'description'=>'required',
            'title' => 'required',
        ]);
        $updateData = [
            'description' => $request->description,
            'title' => $request->title
        ];
        if($request->file('image')){
            $md5Name = md5_file($request->image->getRealPath());
            $imageName = $md5Name.'.'.$request->image->extension();  
            $request->image->move(public_path('about'), $imageName);
            $updateData['image'] = $imageName;
        }
        About::where('id',$request->id)->update($updateData);
        return redirect('admin/about')->with('success','Records updated Successfully.');
    }
}

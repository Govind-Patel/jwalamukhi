<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Counter;
class CounterController extends Controller
{
    public function list(){
        $data['all_list'] = Counter::get();
        return view('admin.pages.counter.list')->with($data);
    }
    public  function edit(Request $request){
        $data['selected_record'] = Counter::where('id',$request->id)->first();
        return view('admin.pages.counter.edit')->with($data);
    }
    public  function update(Request $request){
        $this->validate($request,[
            'label' => 'required',
            'value' => 'required',
            'color' => 'required'
        ]);
        
        $updateData = [
            'label' => $request->label,
            'value' => $request->value,
            'color' => $request->color
        ];
        Counter::where('id',$request->id)->update($updateData);
        return redirect('admin/counter/list')->with('success','Records updated successfully.');
    }

    public  function delete(Request $request){
        GallaryImage::where('id',$request->id)->delete();
        return redirect('gallary/list')->with('success','Records Deleted successfully.');
    }

}

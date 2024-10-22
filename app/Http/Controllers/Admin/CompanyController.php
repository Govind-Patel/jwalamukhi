<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
class CompanyController extends Controller
{
    public function settings(){
        $data['settings'] = Company::first();
        return view('admin.pages.settings.settings')->with($data);
    }
    public function settings_update(Request $request){
        $this->validate($request,[
            'company_name'=>'required',
            'Address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        $updateData = [
            'company_name' => $request->company_name,
            'Address' => $request->Address,
            'phone' => $request->phone,
            'email' => $request->email 
        ];
        if($request->file('logo')){
            $md5Name = md5_file($request->logo->getRealPath());
            $imageName = $md5Name.'.'.$request->logo->extension();  
            $request->logo->move(public_path('logo'), $imageName);
            $updateData['logo'] = $imageName;
        }
        Company::where('id',$request->id)->update($updateData);
        return redirect('admin/settings')->with('success','Records updated Successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        //Model -singular
        //service
            
        $inputs = \App\User::all();
        
        //dd($inputs);
        return view('form/form_first',compact('inputs'));
    }
    
    public function store() {
        
       $data = request()->validate([
                'name' => 'required'
           ]);
        
        
       $user_model = new \App\User();
       
       $user_model->company_name = request('name');
       $user_model->save();
       
       dd(request('name'));
       
       return redirect()->back();
    }
}

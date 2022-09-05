<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Security;

class FormController extends Controller
{
    public function form_first() {
        
        $inputs = \App\Models\User::all();
        
        return view('form/form_first',compact('inputs'));
    }
    
    public function form_second(Request $request) {
        
        $checkbox_1 = $request->only(['question_1', 'question_2', 'question_3','question_4','question_5']);
        
        $array_count_1 = count($checkbox_1);
        
        
        $inputs = \App\Models\User::all();

        return view('form/form_second',compact(['inputs','array_count_1']));
    }
    
    public function form_third(Request $request) {
        
        $checkbox_2 = $request->only(['question_6', 'question_7', 'question_8','question_9',
        'question_10','question_11','question_12','question_13','question_14','question_15','question_16','question_17','question_18']);
        
        $score_1 = $request->score_1;
        
        $array_count_2 = count($checkbox_2)+$score_1;
        
        $inputs = \App\Models\User::all();
        
            
        return view('form/form_third',compact(['inputs', 'array_count_2']));
    }
    public function  form_forth(Request $request) {
        
        dd($request);
        
        $checkbox_3 = $request->only(['question_19', 'question_20', 'question_21','question_22','question_23','question_24',
        'question_25']);

        $score_2 = $request->score_2;
        
        $array_count_3 = count($checkbox_3)+$score_2;
        
        $user_name = Auth::user()->name;
        
        $company_name = Auth::user()->company_name;
        
        $user_email = Auth::user()->email;
        
        $security = \App\Models\Security::create(['score' => $array_count_3,
        'name' => $user_name,'company_name' => $company_name,'email' => $user_email]);
            
        return view('form/form_forth',compact(['user_name','array_count_3']));
    }
    
    
}

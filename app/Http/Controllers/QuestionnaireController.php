<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function create()
    {
        return view('questionnaire.create');
    }
     
    public function store()
    {
        $questionnaire = auth()->user()->questionnaires()->create($data);
        
        return redirect('/questionnaires/'.$questionnaire->id); 
    }
    public function show(\App\Questionnaire $questionnaire)
    {
        return view('questionnaire.show', compact('questionnaire'));
    }
}

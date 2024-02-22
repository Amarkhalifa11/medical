<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{

    public function all_questions()
    {
        $questions = Question::all();
        return view('backend.quations.all_quation' , compact('questions'));
    }

    public function create()
    {
        return view('backend.quations.add_quations');
    }

    public function store(StoreQuestionRequest $request)
    {
        $ask = $request->ask;
        $answer = $request->answer;

        $questions = Question::create([
            'ask' => $ask,
            'answer' => $answer,
        ]);

        return redirect()->route('backend.admins.all_questions')->with('message'  , 'the quations is added succefully');
    }

    public function edit($id)
    {
        $questions = Question::find($id);
        return view('backend.quations.edit_quations' , compact('questions'));

    }

    public function update(UpdateQuestionRequest $request,$id)
    {
        $questions = Question::find($id);
        $ask = $request->ask;
        $answer = $request->answer;

        $questions->update([
            'ask' => $ask,
            'answer' => $answer,
        ]);

        return redirect()->route('backend.admins.all_questions')->with('message'  , 'the quations is updated succefully');
    }

    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return redirect()->route('backend.admins.all_questions')->with('message'  , 'the quations is deleted succefully');
        
    }
}

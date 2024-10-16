<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Resources\Question\QuestionResource;
use App\Models\PersonalityQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalityQuestionController extends Controller
{
    public function index()
    {
        $questions = PersonalityQuestion::all();

        return response()->json($questions, 200);
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $imageUrl = Storage::disk('public')->putFile('personality-questions', $imageUrl);
        }
        $question = PersonalityQuestion::create([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option,
        ]);

        return response()->success(
            'Pertanyaan baru berhasil ditambahkan',
            new QuestionResource($question)
        );
    }

    public function update(StoreQuestionRequest $request, PersonalityQuestion $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('personality-questions', $question->image);

            $imageUrl = Storage::disk('public')->putFile('personality-questions', $imageFile);
        } else {
            $imageUrl = $question->image;
        }

        $question->update([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option
        ]);

        return response()->success(
            'Data pertanyaan berhasil diperbarui',
            new QuestionResource($question)
        );
    }

    public function destroy(PersonalityQuestion $question)
    {
        $oldQuestion = $question;
        $question->delete();
        return response()->success(
            'Pertanyaan berhasil dihapus',
            new QuestionResource($oldQuestion)
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Resources\Question\QuestionResource;
use App\Models\AccuracyQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccuracyQuestionController extends Controller
{
    public function index()
    {
        $questions = AccuracyQuestion::all();

        return response()->json($questions, 200);
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $imageUrl = Storage::disk('public')->putFile('accuracy-questions', $imageUrl);
        }
        $question = AccuracyQuestion::create([
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

    public function update(StoreQuestionRequest $request, AccuracyQuestion $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('accuracy-questions', $question->image);

            $imageUrl = Storage::disk('public')->putFile('accuracy-questions', $imageFile);
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

    public function destroy(AccuracyQuestion $question)
    {
        $oldQuestion = $question;
        $question->delete();
        return response()->success(
            'Pertanyaan berhasil dihapus',
            new QuestionResource($oldQuestion)
        );
    }
}

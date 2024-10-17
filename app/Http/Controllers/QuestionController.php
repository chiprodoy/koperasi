<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Resources\Question\QuestionResource;
use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return response()->json($questions, 200);
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('questions', $imageFile, $randomFileName);
        }
        $question = Question::create([
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

    public function update(StoreQuestionRequest $request, Question $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('questions', $question->image);

            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('questions', $imageFile, $randomFileName);
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

    public function destroy(Question $question)
    {
        $oldQuestion = $question;
        $question->delete();
        return response()->success(
            'Pertanyaan berhasil dihapus',
            new QuestionResource($oldQuestion)
        );
    }
}

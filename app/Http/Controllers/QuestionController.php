<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Resources\Question\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class QuestionController extends Controller
{
    public function index()
    {
        return view('admin.simulasi-tes.soal-kecerdasan.index');
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $imageUrl = Storage::disk('public')->putFile('questions', $imageUrl);
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

            $imageUrl = Storage::disk('public')->putFile('questions', $imageFile);
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

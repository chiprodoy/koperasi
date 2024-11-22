<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Models\BahasaIndonesiaQuiz;
use Illuminate\Support\Facades\Storage;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use Illuminate\Support\Str;

class BahasaIndonesiaQuizWebController extends Controller
{
    use PageMenu;

    public function __construct()
    {
        $this->menuModel = \App\Models\Menu::class;
        $this->getBackEndMenu();
        $this->BREADCRUMB_ITEM = [
            new Page('Home', route('dashboard'))
        ];

        //$this->modName=$this->modelRecords;

    }

    public function index()
    {
        $questions = BahasaIndonesiaQuiz::paginate(10);
        return view('admin.simulasi-tes.soal-bahasa-indonesia.index', array_merge(compact('questions'), get_object_vars($this)));
    }

    public function edit(BahasaIndonesiaQuiz $question)
    {
        return view('admin.simulasi-tes.soal-bahasa-indonesia.edit', array_merge(compact('question'), get_object_vars($this)));
    }

    public function create()
    {
        return view('admin.simulasi-tes.soal-bahasa-indonesia.create', get_object_vars($this));
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $imageUrl = Storage::disk('public')->putFile('bahasa-indonesia-quiz', $imageFile);
        }
        $question = BahasaIndonesiaQuiz::create([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option,
        ]);

        return redirect()->route('admin.soal-bahasa-indonesia.index')->with('success', 'Pertanyaan baru berhasil ditambahkan');
    }

    public function update(StoreQuestionRequest $request, BahasaIndonesiaQuiz $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('bahasa-indonesia-quiz', $question->image);

            $imageUrl = Storage::disk('public')->putFile('bahasa-indonesia-quiz', $imageFile);
        } else {
            $imageUrl = $question->image;
        }

        $question->update([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option
        ]);

        return redirect()->route('admin.soal-bahasa-indonesia.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(BahasaIndonesiaQuiz $question)
    {
        Storage::disk('public')->delete('bahasa-indonesia-quiz', $question->image);

        $question->delete();
        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}

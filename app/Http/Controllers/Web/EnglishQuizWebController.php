<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\EnglishQuiz;
use App\Http\Requests\Question\StoreQuestionRequest;
use Illuminate\Support\Facades\Storage;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use Illuminate\Support\Str;

class EnglishQuizWebController extends Controller
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
        $questions = EnglishQuiz::paginate(10);
        return view('admin.simulasi-tes.soal-english.index', array_merge(compact('questions'), get_object_vars($this)));
    }

    public function edit(EnglishQuiz $question)
    {
        return view('admin.simulasi-tes.soal-english.edit', array_merge(compact('question'), get_object_vars($this)));
    }

    public function create()
    {
        return view('admin.simulasi-tes.soal-english.create', get_object_vars($this));
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('english-quiz', $imageFile, $randomFileName);
        }
        $question = EnglishQuiz::create([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option,
        ]);

        return redirect()->route('admin.soal-english.index')->with('success', 'Pertanyaan baru berhasil ditambahkan');
    }

    public function update(StoreQuestionRequest $request, EnglishQuiz $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('english-quiz', $question->image);

            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('english-quiz', $imageFile, $randomFileName);
        } else {
            $imageUrl = $question->image;
        }

        $question->update([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option
        ]);

        return redirect()->route('admin.soal-english.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(EnglishQuiz $question)
    {
        Storage::disk('public')->delete('english-quiz', $question->image);

        $question->delete();
        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}

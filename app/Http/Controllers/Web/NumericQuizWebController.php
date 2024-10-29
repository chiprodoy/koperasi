<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Models\NumericQuiz;
use Illuminate\Support\Facades\Storage;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;
use Illuminate\Support\Str;

class NumericQuizWebController extends Controller
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
        $questions = NumericQuiz::paginate(10);
        return view('admin.simulasi-tes.soal-numeric.index', array_merge(compact('questions'), get_object_vars($this)));
    }

    public function edit(NumericQuiz $question)
    {
        return view('admin.simulasi-tes.soal-numeric.edit', array_merge(compact('question'), get_object_vars($this)));
    }

    public function create()
    {
        return view('admin.simulasi-tes.soal-numeric.create', get_object_vars($this));
    }

    public function store(StoreQuestionRequest $request)
    {
        $imageFile = $request->file('image');
        $imageUrl = null;
        if ($imageFile) {
            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('numeric-quiz', $imageFile, $randomFileName);
        }
        $question = NumericQuiz::create([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option,
        ]);

        return redirect()->route('admin.soal-numeric.index')->with('success', 'Pertanyaan baru berhasil ditambahkan');
    }

    public function update(StoreQuestionRequest $request, NumericQuiz $question)
    {
        $imageFile = $request->file('image');
        if ($imageFile) {
            Storage::disk('public')->delete('numeric-quiz', $question->image);

            $randomFileName = Str::random(40) . '.' . $imageFile->getClientOriginalExtension();
            $imageUrl = Storage::disk('public')->putFile('numeric-quiz', $imageFile, $randomFileName);
        } else {
            $imageUrl = $question->image;
        }

        $question->update([
            'question' => $request->question,
            'image' => $imageUrl,
            'options' => $request->options,
            'correct_option' => $request->correct_option
        ]);

        return redirect()->route('admin.soal-numeric.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(NumericQuiz $question)
    {
        Storage::disk('public')->delete('numeric-quiz', $question->image);

        $question->delete();
        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}

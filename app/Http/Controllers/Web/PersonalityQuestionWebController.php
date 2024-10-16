<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreQuestionRequest;
use App\Models\PersonalityQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MF\Controllers\Page;
use MF\Controllers\PageMenu;

class PersonalityQuestionWebController extends Controller
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
        $questions = PersonalityQuestion::paginate(10);
        return view('admin.simulasi-tes.soal-kepribadian.index', array_merge(compact('questions'), get_object_vars($this)));
    }

    public function edit(PersonalityQuestion $question)
    {
        return view('admin.simulasi-tes.soal-kepribadian.edit', array_merge(compact('question'), get_object_vars($this)));
    }

    public function create()
    {
        return view('admin.simulasi-tes.soal-kepribadian.create', get_object_vars($this));
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

        return redirect()->route('admin.soal-kepribadian.index')->with('success', 'Pertanyaan baru berhasil ditambahkan');
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

        return redirect()->route('admin.soal-kepribadian.index')->with('success', 'Pertanyaan berhasil diperbarui');
    }

    public function destroy(PersonalityQuestion $question)
    {
        Storage::disk('public')->delete('personality-questions', $question->image);

        $question->delete();
        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWordRequest;
use App\Http\Requests\UpdateWordRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WordRepository;
use Illuminate\Http\Request;
use Flash;

class WordController extends AppBaseController
{
    /** @var WordRepository $wordRepository*/
    private $wordRepository;

    public function __construct(WordRepository $wordRepo)
    {
        $this->wordRepository = $wordRepo;
    }

    /**
     * Display a listing of the Word.
     */
    public function index(Request $request)
    {
        $words = $this->wordRepository->paginate(10);

        return view('words.index')
            ->with('words', $words);
    }

    /**
     * Show the form for creating a new Word.
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created Word in storage.
     */
    public function store(CreateWordRequest $request)
    {
        $input = $request->all();

        $word = $this->wordRepository->create($input);

        Flash::success('Word saved successfully.');

        return redirect(route('words.index'));
    }

    /**
     * Display the specified Word.
     */
    public function show($id)
    {
        $word = $this->wordRepository->find($id);

        if (empty($word)) {
            Flash::error('Word not found');

            return redirect(route('words.index'));
        }

        return view('words.show')->with('word', $word);
    }

    /**
     * Show the form for editing the specified Word.
     */
    public function edit($id)
    {
        $word = $this->wordRepository->find($id);

        if (empty($word)) {
            Flash::error('Word not found');

            return redirect(route('words.index'));
        }

        return view('words.edit')->with('word', $word);
    }

    /**
     * Update the specified Word in storage.
     */
    public function update($id, UpdateWordRequest $request)
    {
        $word = $this->wordRepository->find($id);

        if (empty($word)) {
            Flash::error('Word not found');

            return redirect(route('words.index'));
        }

        $word = $this->wordRepository->update($request->all(), $id);

        Flash::success('Word updated successfully.');

        return redirect(route('words.index'));
    }

    /**
     * Remove the specified Word from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $word = $this->wordRepository->find($id);

        if (empty($word)) {
            Flash::error('Word not found');

            return redirect(route('words.index'));
        }

        $this->wordRepository->delete($id);

        Flash::success('Word deleted successfully.');

        return redirect(route('words.index'));
    }
}

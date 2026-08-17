<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function index()
    {
        return view('ideas.index', [
            'ideas' => Idea::latest()->get()
        ]);
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea)
    {
        return view('ideas.edit', [
            'idea' => $idea
        ]);
    }

    public function store(IdeaRequest $request)
    {
        $validated = $request->validated();

        Idea::create([
            'description' => $validated['description'],
            'state' => 'new'
        ]);

        return redirect('/ideas');
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        $validated = $request->validated();

        $idea->update([
            'description' => $validated['description']
        ]);

        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect('/ideas');
    }
}

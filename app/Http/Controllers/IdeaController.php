<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Idea::class);
        return view('ideas.index', [
            'ideas' => Auth::user()->ideas()->latest()->get()
        ]);
    }

    public function create()
    {
        Gate::authorize('create', Idea::class);
        return view('ideas.create');
    }

    public function show(Idea $idea)
    {
        Gate::authorize('view', $idea);
    
        return view('ideas.show', [
            'idea' => $idea
        ]);
    }

    public function edit(Idea $idea)
    {
         Gate::authorize('update', $idea);
        return view('ideas.edit', [
            'idea' => $idea
        ]);
    }

    public function store(IdeaRequest $request)
    {
        Gate::authorize('create', Idea::class);
        $validated = $request->validated();

        Auth::user()->ideas()->create([
            'description' => $validated['description'],
            'state' => 'new'
        ]);

        return redirect('/ideas');
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        Gate::authorize('update', $idea);
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
        Gate::authorize('delete', $idea);
        $idea->delete();
        return redirect('/ideas');
    }
}

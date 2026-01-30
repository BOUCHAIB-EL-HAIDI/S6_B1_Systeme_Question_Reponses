<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResponseController extends Controller
{
    public function store(Request $request, Question $question)
    {
        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $response = new Response();
        $response->content = $validated['content'];
        $response->user_id = Auth::id();
        $response->question_id = $question->id;
        $response->save();

        return redirect()->route('questions.show', $question)->with('success', 'Your answer has been posted!');
    }

    public function edit(Response $response)
    {
        if (Auth::id() !== $response->user_id) {
            abort(403);
        }

        return view('responses.edit', compact('response'));
    }

    public function update(Request $request, Response $response)
    {
        if (Auth::id() !== $response->user_id) {
            abort(403);
        }

        $validated = $request->validate([
            'content' => 'required|string',
        ]);

        $response->update($validated);

        return redirect()->route('questions.show', $response->question_id)->with('success', 'Answer updated!');
    }

    public function destroy(Response $response)
    {
        if (Auth::id() !== $response->user_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $questionId = $response->question_id;
        $response->delete();

        return redirect()->route('questions.show', $questionId)->with('success', 'Answer deleted.');
    }
}

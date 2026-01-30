<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function toggle(Question $question)
    {
        $user = Auth::user();
        $favorite = Favorite::where('user_id', $user->id)
                            ->where('question_id', $question->id)
                            ->first();

        if ($favorite) {
            $favorite->delete();
            $message = 'Question removed from favorites.';
        } else {
            Favorite::create([
                'user_id' => $user->id,
                'question_id' => $question->id,
            ]);
            $message = 'Question added to favorites.';
        }

        return back()->with('success', $message);
    }

    public function index()
    {
        $favorites = Favorite::with('question.user')
                             ->where('user_id', Auth::id())
                             ->latest()
                             ->paginate(10);
        
        return view('user.favorites', compact('favorites'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Events\VoteEvent;
use App\Models\Vote;

class VoteController extends Controller
{
    public function index()
    {
        $vote = Vote::first();
        return view('vote', compact('vote'));
    }

    public function update()
    {
        $vote = Vote::first();
        $vote->count = $vote->count + 1;
        $vote->save();

        broadcast(new VoteEvent());

        return redirect('/');
    }
}

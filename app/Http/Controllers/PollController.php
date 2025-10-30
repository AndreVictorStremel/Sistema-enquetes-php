<?php

namespace App\Http\Controllers;

use App\Models\Poll; 
use Illuminate\Http\Request;

class PollController extends Controller
{
    
    public function index()
    {
        
        $polls = Poll::latest()->get(); 

        
        return view('polls.index', ['polls' => $polls]);
    }

    
    public function show(Poll $poll)
    {
        
        $poll->load('options');
        $totalVotes = $poll->options->sum('votes');

        return view('polls.show', [
            'poll' => $poll,
            'totalVotes' => $totalVotes
        ]);
    }
}
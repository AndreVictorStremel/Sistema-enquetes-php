<?php

namespace App\Http\Controllers;

use App\Models\Option; 
use Illuminate\Http\Request;

class OptionController extends Controller
{
    
    public function vote(Option $option)
    {
        
        $option->increment('votes'); // +1 voto!

        
        $poll_id = $option->poll_id;

        
        return redirect()->route('polls.show', $poll_id)->with('success', 'Voto registrado!');
    }
}
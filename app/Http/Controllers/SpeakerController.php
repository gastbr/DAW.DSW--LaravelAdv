<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpeakerController extends Controller
{
    public function index(Request $request): Response
    {
        $speakers = Speaker::all();

        return view('speaker.index', compact('speakers'));
    }

    public function show(Request $request, Speaker $speaker): Response
    {
        return view('speaker.show', compact('speaker'));
    }
}

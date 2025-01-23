<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VenueController extends Controller
{
    public function index(Request $request): Response
    {
        $venues = Venue::all();

        return view('venue.index', compact('venues'));
    }

    public function show(Request $request, Venue $venue): Response
    {
        return view('venue.show', compact('venue'));
    }
}

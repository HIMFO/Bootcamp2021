<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function homepage()
    {
        $events = Event::take(3)->get();

        return view('index', compact(
            'events'
        ));
    }

    public function eventDetail($id)
    {
        // get event by id
        $event = Event::findOrFail($id);

        return view('eventdetails', compact('event'));
    }

    public function eventList()
    {
        $events = Event::paginate(6);

        return view('moreevents', compact('events'));
    }
}

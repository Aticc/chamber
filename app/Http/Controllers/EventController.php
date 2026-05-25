<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Public events page
    public function publicEvents()
    {
        $upcomingEvents = Event::where('status', 'published')
            ->where('is_past', false)
            ->where('end_date', '>=', now())
            ->orderBy('start_date', 'asc')
            ->get();
        
        $pastEvents = Event::where('status', 'published')
            ->where('is_past', true)
            ->orderBy('start_date', 'desc')
            ->limit(6)
            ->get();
        
        $missions = Event::where('status', 'published')
            ->where('event_type', 'mission')
            ->where('is_past', false)
            ->orderBy('start_date', 'asc')
            ->get();
        
        $summitTypes = [
            ['title' => 'Capital Alignment Forums', 'description' => 'High-level convenings connecting institutional capital with verified, execution-ready opportunities across African markets.'],
            ['title' => 'Policy & Trade Dialogues', 'description' => 'Structured engagements with policymakers, trade bodies, and multilateral institutions on AfCFTA implementation and trade facilitation.'],
            ['title' => 'Sector Investment Conferences', 'description' => 'Deep-dive summits focused on priority sectors including energy, infrastructure, agro-processing, and digital trade.']
        ];
        
        return view('event', compact('upcomingEvents', 'pastEvents', 'missions', 'summitTypes'));
    }
}
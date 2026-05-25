<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Admin: List all events
    public function index(Request $request)
    {
        $status = $request->query('status');
        $events = Event::when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->orderBy('start_date', 'desc')->paginate(20);
        
        $stats = [
            'total' => Event::count(),
            'published' => Event::where('status', 'published')->count(),
            'draft' => Event::where('status', 'draft')->count(),
            'upcoming' => Event::upcoming()->count(),
            'past' => Event::past()->count(),
        ];
        
        return view('admin.events.index', compact('events', 'stats'));
    }

    // Admin: Show create form
    public function create()
    {
        return view('admin.events.create');
    }

    // Admin: Store event
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'event_type' => 'required|string',
        'event_category' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
        'location' => 'required|string|max:255',
        'venue' => 'nullable|string|max:255',
        'access_tiers' => 'nullable|array',
        'is_invitation_only' => 'boolean',
        'registration_link' => 'nullable|url',
        'capacity' => 'nullable|integer|min:1',
        'status' => 'required|in:draft,published,cancelled',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'agenda_file' => 'nullable|file|mimes:pdf|max:5120',
        'highlights_link' => 'nullable|url',
    ]);

    $data = $request->all();
    
    // Convert date-only to datetime (set to 00:00:00 for start date and 23:59:59 for end date)
    $data['start_date'] = date('Y-m-d H:i:s', strtotime($request->start_date . ' 00:00:00'));
    $data['end_date'] = date('Y-m-d H:i:s', strtotime($request->end_date . ' 23:59:59'));
    
    // Handle featured image upload
    if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $imageName = time() . '_event_' . preg_replace('/[^a-zA-Z0-9.]/', '_', $image->getClientOriginalName());
        $imagePath = $image->storeAs('events/images', $imageName, 'public');
        $data['featured_image'] = $imagePath;
    }
    
    // Handle agenda file upload
    if ($request->hasFile('agenda_file')) {
        $agenda = $request->file('agenda_file');
        $agendaName = time() . '_agenda_' . preg_replace('/[^a-zA-Z0-9.]/', '_', $agenda->getClientOriginalName());
        $agendaPath = $agenda->storeAs('events/agendas', $agendaName, 'public');
        $data['agenda_file'] = $agendaPath;
    }
    
    // Set is_past based on end date
    $data['is_past'] = strtotime($data['end_date']) < time();
    
    Event::create($data);
    
    return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
}
    // Admin: Show edit form
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    // Admin: Update event
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_type' => 'required|string',
            'event_category' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'location' => 'required|string|max:255',
            'venue' => 'nullable|string|max:255',
            'access_tiers' => 'nullable|array',
            'is_invitation_only' => 'boolean',
            'registration_link' => 'nullable|url',
            'capacity' => 'nullable|integer|min:1',
            'status' => 'required|in:draft,published,cancelled',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'agenda_file' => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $data = $request->all();
        
        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            if ($event->featured_image) {
                Storage::disk('public')->delete($event->featured_image);
            }
            $image = $request->file('featured_image');
            $imageName = time() . '_event_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('events/images', $imageName, 'public');
            $data['featured_image'] = $imagePath;
        }
        
        // Handle agenda file upload
        if ($request->hasFile('agenda_file')) {
            if ($event->agenda_file) {
                Storage::disk('public')->delete($event->agenda_file);
            }
            $agenda = $request->file('agenda_file');
            $agendaName = time() . '_agenda_' . $agenda->getClientOriginalName();
            $agendaPath = $agenda->storeAs('events/agendas', $agendaName, 'public');
            $data['agenda_file'] = $agendaPath;
        }
        
        // Set is_past based on end date
        $data['is_past'] = strtotime($request->end_date) < time();
        
        $event->update($data);
        
        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    // Admin: Delete event
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        
        if ($event->featured_image) {
            Storage::disk('public')->delete($event->featured_image);
        }
        if ($event->agenda_file) {
            Storage::disk('public')->delete($event->agenda_file);
        }
        
        $event->delete();
        
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

    // Admin: Download agenda
    public function downloadAgenda($id)
    {
        $event = Event::findOrFail($id);
        
        if (!$event->agenda_file) {
            return redirect()->back()->with('error', 'No agenda file found.');
        }
        
        $path = storage_path('app/public/' . $event->agenda_file);
        
        if (!file_exists($path)) {
            return redirect()->back()->with('error', 'File not found.');
        }
        
        return response()->download($path);
    }
}
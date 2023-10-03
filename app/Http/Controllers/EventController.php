<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return Events::all();
    }

    public function show($id){
        return Events::find($id);
    }

    public function destroy($id){
        return Events::find($id)->delete;
    }

    public function store(Request $request){
        $event = new Events();
        $event->date = $request->date;
        $event->location = $request->location;
        $event->org_id = $request->org_id;
        $event->save();
    }

    public function update(Request $request, $id){
        $event = Events::find($id);
        $event->date = $request->date;
        $event->location = $request->location;
        $event->save();
    }

    public function newView(){
        $events = Events::all();
        return view('event.new', ['events' => $events]);
    }

    public function editView($id){
        $events = Events::find($id);
        return view('event.edit', ['events' => $events]);
    }

    public function listView(){
        $events = Events::all();
        return view('event.list', ['events' => $events]);
    }
}

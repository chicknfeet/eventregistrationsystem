<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{

    public function index(){
        $attendee = Attendee::all();
        return view('attendee')->with('attendees', $attendee);
    }

    function save_attendees(Request $request){
        $validatedData = $request->validate([
            'Attendee' => 'required|string|max:500',
        ]);
        Attendee::create($validatedData);
        return back();
    }

    function delete_attendees($id){
        $attendee = Attendee::find($id);
        $attendee->delete();
        return back();
    }

    function update_attendees($id){
        $attendee = Attendee::find($id);
        return view('update_attendees', compact('attendee'));
    }

    function save_updated_attendees(Request $request, $id){
        $attendee = Attendee::find($id);
        $attendee->Attendee = $request->update_attendee;
        $attendee->save();
        return redirect()->route('attendee');
    }
}

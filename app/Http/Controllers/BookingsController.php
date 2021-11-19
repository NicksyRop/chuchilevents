<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use App\Notifications\SeatBooked;
use Illuminate\Http\Request;

class BookingsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request){



        $event= Event::where('id',$request->event_id)->first();
        $rem = $event->rem;


        $request->validate([
            'seats' => 'required|lt:6'
        ]);

        Booking::create([

            'user_id' => $request->user_id,
            'seats' => $request->seats,
            'event_id' =>$request->event_id,

        ]);

        $finalRem = $rem - $request->seats;

        Event::where('id',$request->event_id)->update(['rem' => $finalRem]);
        $freelancer= User::find($request->user_id);


        $freelancer->notify(new SeatBooked());
        smilify('success', 'Your seat have been reserved');




        return redirect()->back()->with('remaing',$rem);

    }
}

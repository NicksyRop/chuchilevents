<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Type;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','user_role']);
    }

    public function index()
    {
        return view('Events.index')->with('events',Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Events.create')->with('types',Type::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request->all());
        $request->validate([

            'name' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'type_id' => 'required',
            'price'=>'required',
            'seats' => 'required|min:2'
        ]);


        Event::create([

            'name' => $request->name,
            'type_id' => $request->type_id,
            'price' => $request->price,
            'seats' => $request->seats,
            'rem' => $request->seats,
            'description' => $request->description,
            'date' => $request->date,

        ]);


        notify()->success('Success', 'Event Added Successfully');

        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        $event = Event::find($id);
        return view('Events.edit')->with('event',$event)->with('types',Type::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        $request->validate([

            'name' => 'required',
            'date' => 'required|date',
            'description' => 'required',
            'type_id' => 'required',
            'price'=>'required',
            'seats' => 'required|min:2'
        ]);

        $event->name = $request->name;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->type_id = $request->type_id;
        $event->price = $request->price;
        $event->seats = $request->seats;

        $event->save();

        smilify('success', 'Event Updated');

        return redirect()->route('events');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();
        smilify('success', 'You have successfully Deleted Event');
        return redirect()->route('events');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Bus;
use App\Models\Route;
use Illuminate\Http\Request;
use DateTime;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets=Ticket::orderBy('created_at','desc')->get();
        return view('dashboard.view-ticket',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buses =Bus::all();
        $routes=Route::all();
        return view('dashboard.add-ticket',compact('buses','routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Create a new ticket object and set its properties
        $ticket = new Ticket();
        $ticket->first_name = $request->input('first_name');
        $ticket->other_name = $request->input('other_name');
        $ticket->email = $request->input('email');
        $ticket->phone_number = $request->input('phone_number');
        $ticket->available_bus = $request->input('available_bus');
        $dateString = $request->input('travel_date');
        $travel_date = DateTime::createFromFormat('d/m/Y', $dateString);
        $ticket->travel_date = $travel_date; // Use the converted date value
        $ticket->travel_time = $request->input('travel_time');
        $ticket->from = $request->input('from');
        $ticket->to = $request->input('to');
        $ticket->amount = $request->input('amount');

        // Save the ticket object to the database
        if ($ticket->save()) {
            return redirect()->back()->with('success', 'Ticket has been created successfully!');
        } else {
            return redirect()->back()->with('error', 'Ticket addition Failed!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the event associated with the ticket
         $ticket=Ticket::find($id);
        
        // Render the view with the ticket and event information
        return view('dashboard.print-reciept',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    
}

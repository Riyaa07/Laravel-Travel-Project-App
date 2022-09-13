<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\BookingRequest;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all()->last();
        $places = Place::all()->pluck('place_name', 'id');
        return view('booking.index', compact("bookings","places"));
    }

    public function show()
    {
        $bookings = DB::table('bookings')->get();
        return view('booking.show', compact("bookings"));
    }

    public function create(){
        $places = Place::all()->pluck('place_name', 'id');
        return view('booking.create', compact("places"));
    }

    public function store(BookingRequest $request) {
        $place = Place::findOrFail($request->place_id);
        $booking = new Booking($request->all());
        $booking->place()->associate($place)->save();
        return redirect('bookings');
    }
}

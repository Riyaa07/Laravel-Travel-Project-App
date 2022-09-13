<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Country;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
    public function index()
    {
//        $countries = DB::table('countries')->get();
        //$countries = Country::get();
        $countries = Country::paginate(4);
        return view('countries.index', compact("countries"));
    }

    public function show(Country $country)
    {
        return view('countries.show', compact("country"));
    }

    public function create(){
        return view('countries.create');
    }

    public function store(Request  $request) {
        $formData = $request->all();
        Country::create($formData);
        return redirect('countries');

    }

    public function destroy(Country $country) {
        $country->places()->delete();
        $country->delete();
        return redirect('countries');
    }


    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
}

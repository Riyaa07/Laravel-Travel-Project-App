<?php

namespace App\Http\Controllers;


use App\Customer_Feedback;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = DB::table('customer_feedbacks')->get()->last();
        return view('feedback.index', compact("feedbacks"));
    }

    public function show()
    {
        $feedbacks = DB::table('customer_feedbacks')->get();
        return view('feedback.show', compact("feedbacks"));
    }

    public function create(){
        return view('feedback.create');
    }

    public function store(Request $request) {
        return "Thank you for your Feedback!!";
    }
}

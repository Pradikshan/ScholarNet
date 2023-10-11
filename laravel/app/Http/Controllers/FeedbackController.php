<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request)
    {
        try
        {
            $feedback = new Feedback;
            
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->telephone_no=$request->telephone_no;
            $feedback->feedback_type=$request->feedback_type;
            $feedback->feedback=$request->feedback;
            
            $feedback->save();

            return redirect('/lms_feedback')->with('status', 'success');
        }   catch (Exception $e) {
            return redirect('/lms_feedback')->with('status', 'error');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}

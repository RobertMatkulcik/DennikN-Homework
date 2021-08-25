<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create($userId)
    {
        return view('subscribe', [
            'user' => User::find($userId)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store($userId)
    {

        $validatedPost = $this->validate(request(), [
            'type' => 'required',
            'duration' => 'required|numeric',
        ]);


        $newDateTime = Carbon::now()->addMonths($validatedPost["duration"]);

        $subscription = new Subscription();
        $subscription->type = $validatedPost["type"];
        $subscription->user_id = $userId;
        $subscription->start = now();
        $subscription->end = $newDateTime;

        $subscription->save();

        // Save $closestToEnd subscription for better sorting
        $closestToEnd = Subscription::where("user_id",$userId)->orderBy("end","asc")->first();
        $user = User::findOrFail($userId);
        if($closestToEnd){
            $closestToEndDate = $closestToEnd->end;

        }else{
            $closestToEndDate = $subscription->end;
        }
        $user->closest_subscription_end = $closestToEndDate;
        $user->save();


        return redirect()->to('/');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}

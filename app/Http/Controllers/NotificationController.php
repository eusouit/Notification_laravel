<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');    
    }

    public function notifications(Request $request)
    {
        $user = User::all();
        //dd($request->all());
        return view('posts.notifications.notification', compact('user'));
    }

    public function markAsRead(Request $request)
    {
        $notification = $request->user()->notifications()->where('id', $request->id)->first();

        if ($notification)
            $notification->markAsRead();
    }
}

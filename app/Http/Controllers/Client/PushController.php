<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\PushDemo;
use App\Models\User;
use Inertia\Inertia;
use Notification;

class PushController extends Controller
{

    public function index() {
        return Inertia::render('User/Push');
    }

    public function store(Request $request){
        $this->validate($request, ['endpoint' => 'required']);

        $request->user()->updatePushSubscription(
            $request->endpoint,
            $request->publicKey,
            $request->authToken,
            $request->contentEncoding
        );

        return response()->json(null, 204);
    }
    
}
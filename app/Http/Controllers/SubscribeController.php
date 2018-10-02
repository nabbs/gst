<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {   
        $email = request('email');

        $useremail = Subscription::where('email', $email)->exists();

        if ($useremail ==false) {
            $status = 'ok';
                Subscription::create([

                'email' => request('email')

            ]);
           
        }
        
        else {
            $status = 'exists';
        }

        return response()->json(['status' => $status]);
    }


    public function store(Request $request)
    {
         
    }

    public function show(Subscribe $subscribe)
    {
        //
    }


    public function edit(Subscribe $subscribe)
    {
        //

    }

    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }


    public function destroy(Subscribe $subscribe)
    {
        //
    }
}

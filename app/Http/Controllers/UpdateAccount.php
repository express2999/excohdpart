<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateAccount extends Controller
{

    public function update(Request $request): string
    {
        $new = $request->input('Newsletter');

        $news = $request->has('Newsletter') ? "true" : "false";

        $update = DB::table('users')
            ->select('users.*')
            ->where('id','=',Auth::id())
            ->update(
                [
                    'gender' => $request->input('Gender'),
                    'firstname' => $request->input('FirstName'),
                    'lastname' => $request->input('LastName'),
                    'date' => $request->input('birthday'),
                    'email' => $request->input('Email'),
                    'companyname' => $request->input('Company'),
                    'country' => $request->input('CountryId'),
                    'newsletter' => $news,
                    'signature' => $request->input('Signature'),


                ]
            );

        return 'done';

    }
}

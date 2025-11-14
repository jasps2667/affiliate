<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function check()
{
    if(auth()->user()->role == 'admin'){
        return redirect('/admin');
    }
    return redirect('/dashboard');
}

}

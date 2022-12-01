<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogController extends Controller
{
    //
    public function register(Request $request) {
        $log = new Log();
        $log->user_id = $request->user_id;
        $log->screen = $request->screen;
        $log->save();
        return 'success';
    }
}

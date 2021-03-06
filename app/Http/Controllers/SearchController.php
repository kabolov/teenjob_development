<?php

namespace App\Http\Controllers;

use App\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $path='offers';
        if($request->get("category") == 'offers')
            $path = $path.'?volunteering=on&internship=on';
        if($request->get("category") == 'events')
            return redirect()->route('site.'.$request->get("category"), request()->except('category'));
        if($request->get("category") == 'internship')
            $path = $path.'?internship=on';
        if($request->get("category") == 'volunteering')
            $path = $path.'?volunteering=on';
        if(!empty($request->get("query")))
            //$path = $path.'&query='.(request()->except('category'));
            $path = $path.'&query='.($request->get("query"));

        //return redirect()->route('site.'.$request->get("category"), request()->except('category'));
        //return redirect()->route('/offers?'.$query);

        return redirect($path);
    }
}
